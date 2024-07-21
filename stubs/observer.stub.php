<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

// keep: use ___LaravelStubs___namespacedModel;

/**
 * When models are being created within a database transaction,
 * the observer may be instructed to only execute its event handlers
 * after the database transaction is committed. This may be accomplished
 * by implementing the `ShouldHandleEventsAfterCommit` interface. If a database
 * transaction is not in progress, the event handlers will execute immediately.
 *
 * All Eloquent model events dispatched (as of v9-v11):
 *    - retrieved
 *    - creating
 *    - created
 *    - updating
 *    - updated
 *    - saving
 *    - saved
 *    - deleting
 *    - deleted
 *    - trashed
 *    - forceDeleting
 *    - forceDeleted
 *    - restoring
 *    - restored
 *    - replicating.
 *
 * @docs https://laravel.com/docs/eloquent#events
 * @docs https://laravel.com/docs/eloquent#observers
 */
final class ___LaravelStubs___class
{
    /**
     * Handle the ___LaravelStubs___model "created" event.
     */
    public function created(___LaravelStubs___model $___LaravelStubs___modelVariable): void
    {
        //
    }

    /**
     * Handle the ___LaravelStubs___model "updated" event.
     */
    public function updated(___LaravelStubs___model $___LaravelStubs___modelVariable): void
    {
        //
    }

    /**
     * Handle the ___LaravelStubs___model "deleted" event.
     */
    public function deleted(___LaravelStubs___model $___LaravelStubs___modelVariable): void
    {
        //
    }

    /**
     * Handle the ___LaravelStubs___model "restored" event.
     */
    public function restored(___LaravelStubs___model $___LaravelStubs___modelVariable): void
    {
        //
    }

    /**
     * Handle the ___LaravelStubs___model "force deleted" event.
     */
    public function forceDeleted(___LaravelStubs___model $___LaravelStubs___modelVariable): void
    {
        //
    }
}
