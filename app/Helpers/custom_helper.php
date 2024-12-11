<?php
if (!function_exists('setActive')) {
    function setActive($path)
    {
        return (uri_string() === $path) ? 'active' : '';
    }
}

?>