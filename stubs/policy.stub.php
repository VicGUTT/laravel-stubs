<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Auth\Access\Response;
// keep: use ___LaravelStubs___namespacedModel;
// keep: use ___LaravelStubs___namespacedUserModel;
use Illuminate\Auth\Access\HandlesAuthorization;

final class ___LaravelStubs___class
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(___LaravelStubs___user $user): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(___LaravelStubs___user $user, ___LaravelStubs___model $___LaravelStubs___modelVariable): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(___LaravelStubs___user $user): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(___LaravelStubs___user $user, ___LaravelStubs___model $___LaravelStubs___modelVariable): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(___LaravelStubs___user $user, ___LaravelStubs___model $___LaravelStubs___modelVariable): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(___LaravelStubs___user $user, ___LaravelStubs___model $___LaravelStubs___modelVariable): Response|bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(___LaravelStubs___user $user, ___LaravelStubs___model $___LaravelStubs___modelVariable): Response|bool
    {
        return false;
    }
}
