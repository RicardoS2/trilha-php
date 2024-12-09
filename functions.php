<?php


function dd(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</prep>';
    die();
}


function abort($code)
{
    http_response_code($code);
    
    die();
}
