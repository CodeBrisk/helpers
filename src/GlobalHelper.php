<?php


if (! function_exists('user')) {
    /**
     * Get the available user instance.
     *
     * @param  string|null  $guard
     * @return \App\User|null
     */
    function user() : \App\User
    {
        return auth()->user();
    }
}