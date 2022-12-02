<?php

function active_class($path, $active = 'active')
{
    // return call_user_func_array('Request::is', (array)$path) ? $active : '';
    return $path == request()->url() ? $active : '';
}

function is_active_route($path)
{
    // return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
    return $path == request()->url() ? 'true' : 'false';
}

function show_class($path)
{
    // return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
    return $path == request()->url() ? 'show' : '';
}

function getBreadcrums()
{
    $explode = explode('/', substr(strstr($_SERVER['REQUEST_URI'], '/'), 1));
    $array = [];
    foreach ($explode as $key => $value) {
        if (end($explode) == $value) {
            array_push($array, ['label' => ucfirst($value), 'url' => url(implode('/', $explode)), 'active' => true]);
        } else {
            array_push($array, ['label' => 'Home', 'url' => url('/' . $value), 'active' => false]);
        }
    }
    return $array;
}

function app_name()
{
    $string = 'Auth-Res';
    return explode('-', $string);
}
