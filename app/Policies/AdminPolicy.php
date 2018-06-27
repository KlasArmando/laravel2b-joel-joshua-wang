<?php

namespace App\Policies;

use App\User;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the Admin.
     *
     * @param  \App\User $user
     * @param  \App\Admin $Admin
     * @return mixed
     */
    public function view(User $user, Admin $Admin)
    {
        //
    }

    /**
     * Determine whether the user can create Admins.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can update the Admin.
     *
     * @param  \App\User $user
     * @param  \App\Admin $Admin
     * @return mixed
     */
    public function update(User $user, Admin $Admin)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the Admin.
     *
     * @param  \App\User $user
     * @param  \App\Admin $Admin
     * @return mixed
     */
    public function delete(User $user, Admin $Admin)
    {
        return $user->role == 'admin';
    }
}
