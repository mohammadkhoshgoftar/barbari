<?php

namespace Modules\Auth\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class LogAuthenticationActivity
{
    /**
     * Handle user login events.
     *
     * @param \Illuminate\Auth\Events\Login $event
     * @return void
     */
    public function handleLogin(Login $event)
    {
        activity()->causedBy($event->user)
            ->useLog('login')
            ->withProperties(['ip' => request()->ip()])
            ->log('User logged in');
    }

    /**
     * Handle user logout events.
     *
     * @param \Illuminate\Auth\Events\Logout $event
     * @return void
     */
    public function handleLogout(Logout $event)
    {
        activity()->causedBy($event->user)
            ->withProperties(['ip' => request()->ip()])
            ->useLog('logout')
            ->log('User logged out');
    }
}
