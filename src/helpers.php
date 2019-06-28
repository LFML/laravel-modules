<?php

if (!function_exists('module')) {
    /**
     * @param $module
     * @param null $customview
     * @return \Laravel\Modules\Support\ModuleFunctions
     */
    function module($module, $customview = null)
    {
        return new \Laravel\Modules\Support\ModuleFunctions($module, $customview);
    }
}

if (!function_exists('module_path')) {
    function module_path($name)
    {
        $module = app('modules')->find($name);

        return $module->getPath();
    }
}

if (!function_exists('module_make_path')) {
    function module_make_path($parts)
    {
        $path = implode(DIRECTORY_SEPARATOR, $parts);

        while (strpos($path, DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR) !== false) {
            $path = str_replace(DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, $path);
        }

        return $path;
    }
}

if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if (!function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param string $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->make('path.public') . ($path ? DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}
