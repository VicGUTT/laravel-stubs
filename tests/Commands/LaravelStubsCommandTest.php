<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

use Illuminate\Support\Facades\File;

$paths = [
    'results' => __DIR__ . '/../../.results/tests',
    // 'base_path()' => null,
];

beforeEach(function () use ($paths): void {
    File::ensureDirectoryExists($paths['results']);

    /** @var Illuminate\Foundation\Application */
    $app = app();

    // $paths['base_path()'] = $app->basePath();

    /**
     * Overwriting the `base_path()`'s return value.
     */
    $app->setBasePath($paths['results']);
});
afterEach(function () use ($paths): void {
    File::deleteDirectory($paths['results']);

    // if ($paths['base_path()']) {
    //     /** @var \Illuminate\Foundation\Application */
    //     $app = app();

    //     $app->setBasePath($paths['base_path()']);
    // }
});

it('works', function () use ($paths): void {
    expect(base_path())->toEqual($paths['results']);

    $targetPath = "{$paths['results']}/stubs";

    expect(empty(File::allFiles(dirname($targetPath))))->toEqual(true);

    artisan('stub:publish')->assertSuccessful();

    $originalFiles = File::allFiles(__DIR__ . '/../../stubs');
    $generatedFiles = File::allFiles($targetPath);

    expect(empty($generatedFiles))->toEqual(false);
    expect(count($generatedFiles))->toEqual(count($originalFiles));

    foreach ($generatedFiles as $generatedFile) {
        $content = $generatedFile->getContents();

        expect(str_contains($content, '___LaravelStubs___'))->toEqual(false);
        expect(str_ends_with($generatedFile->getFilename(), '.stub'))->toEqual(true);

        if (str_contains($generatedFile->getFilename(), 'migration.')) {
            continue;
        }

        if (str_contains($generatedFile->getFilename(), 'pest.')) {
            continue;
        }

        if ($generatedFile->getFilename() === 'factory.stub') {
            expect(str_contains($content, '{{ factoryNamespace }}'))->toEqual(true);

            continue;
        }

        expect(str_contains($content, '{{ namespace }}'))->toEqual(true);
    }
});
