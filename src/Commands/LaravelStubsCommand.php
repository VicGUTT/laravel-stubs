<?php

declare(strict_types=1);

namespace VicGutt\LaravelStubs\Commands;

use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;
use Illuminate\Console\View\Components\Factory;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Foundation\Console\StubPublishCommand;

final class LaravelStubsCommand extends StubPublishCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stub:publish';

    /**
     * Placeholder variable names used in the default Laravel
     * stubs. Ex.: `{{ namespacedModel }}`.
     *
     * Note: The order matter. If `namespace` were to be put
     * before `namespacedModel` than only the "namespace"
     * part of the string would be replaced.
     */
    protected array $stubVariables = [
        'rootNamespace',
        'namespacedModel',
        'namespacedRequests',
        'namespacedParentModel',
        'namespacedUserModel',
        'factoryNamespace',
        'parentModelVariable',
        'parentModel',
        'modelVariable',
        'storeRequest',
        'updateRequest',
        'ruleType',
        'namespace',
        'class',
        'model',
        'factory',
        'user',
        'view',
    ];

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->init();

        $ourStubsBasePath = realpath(__DIR__ . '/../../stubs');
        $appStubsBasePath = realpath(base_path('stubs'));

        if (!$ourStubsBasePath) {
            $path = __DIR__ . '/../../stubs';

            $this->notify()->error("The path at: `{$path}` does not exist.");

            return self::FAILURE;
        }

        if (!$appStubsBasePath) {
            $path = base_path('stubs');

            $this->notify()->error("The path at: `{$path}` does not exist.");

            return self::FAILURE;
        }

        $this->handleStubs(File::allFiles($ourStubsBasePath), $ourStubsBasePath, $appStubsBasePath);

        $this->notify()->info('Default stubs overwritten successfully.');

        return self::SUCCESS;
    }

    protected function init(): void
    {
        $this->addOption('existing');
        $this->addOption('force', null, InputOption::VALUE_REQUIRED, '', true);

        parent::handle();
    }

    /**
     * @param SplFileInfo[] $stubs
     */
    protected function handleStubs(array $stubs, string $ourStubsBasePath, string $appStubsBasePath): void
    {
        foreach ($stubs as $stub) {
            $this->handleStub($stub, $ourStubsBasePath, $appStubsBasePath);
        }
    }

    protected function handleStub(SplFileInfo $stub, string $ourStubsBasePath, string $appStubsBasePath): void
    {
        $from = $stub->getRealPath();
        $to = str_replace($ourStubsBasePath, $appStubsBasePath, $stub->getRealPath());
        $to = str_replace('.stub.php', '.stub', $to);

        File::ensureDirectoryExists(dirname($to));

        $content = File::get($from);
        $content = $this->replacePlaceholderVariables($content);
        $content = $this->fixReplacedPlaceholderVariables($content);

        File::put($to, $content);
    }

    protected function replacePlaceholderVariables(string $content): string
    {
        $prefix = '___LaravelStubs___';
        $wrap = fn (string $variable): string => "{{ {$variable} }}";
        $variables = $this->stubVariables;

        $tokens = array_reduce($variables, function (array $acc, string $variable) use ($prefix, $wrap): array {
            $acc["{$prefix}{$variable}"] = $wrap($variable);

            return $acc;
        }, []);

        return str_replace(array_keys($tokens), array_values($tokens), $content);
    }

    protected function fixReplacedPlaceholderVariables(string $replaced): string
    {
        return str_replace(
            ['use {{ namespacedRequests }};', '// keep: ', "Response;\n\nuse"],
            ['use {{ namespacedRequests }}', '', "Response;\nuse"],
            $replaced,
        );
    }

    private function notify(): Factory|self
    {
        /**
         * Notes:
         * - `$this->components` is not a defined property when running on a
         *   GitHub Action CI pipeline.
         * - Not simply doing `($this->components ?? $this)` as
         *   `$this->components` is not typed as being able to be null
         *   and therefore make PHPStan unhappy.
         * - `$this->components` is marked as an internal property to the framework
         *   but simply using `$this->(info|error|...)()` does not render the same
         *   visual results as those of the native Laravel command outputs.
         */
        if (property_exists($this, 'components')) {
            return $this->components;
        }

        return $this;
    }

    // private function renameFilesInProject(): void
    // {
    //     $appStubsBasePath = realpath(base_path('stubs'));

    //     $stubs = File::allFiles($appStubsBasePath);

    //     foreach ($stubs as $stub) {
    //         $from = $stub->getRealPath();
    //         // $to = str_replace('.stub', '.php', $stub->getRealPath());
    //         $to = str_replace('.php', '.stub.php', $stub->getRealPath());

    //         rename($from, $to);
    //     }
    // }
}
