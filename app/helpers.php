<?php

if (!function_exists('getPageTitle')) {
    function getPageTitle(?string $title = null): string
    {
        return $title ? $title . ' | ' . config('app.name') : config('app.name');
    }
}
