<?php

namespace App\Observers;

use App\Events\UserChangedPhoneNumber;
use App\Events\UserConfirmedEmail;
use App\Events\UserRegisteredPush;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if($user->isDirty('email_verified_at') && $user->email_verified_at !== null){
            event(new UserConfirmedEmail($user));
        }
        if($user->isDirty('phone') && $user->phone !== null){
            event(new UserChangedPhoneNumber($user));
        }
        if($user->isDirty('push_token') && $user->push_token !== null){
            event(new UserRegisteredPush($user));
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
