<?php


namespace App\Service\Youtube;


/**
 * @method static listSearch(string $string, array $optionalParameters)
 */
class Videos
{
    public function __call($name, $arguments)
    {
        return (new Connection())->get()->videos->$name($arguments[0], $arguments[1]);
    }
}
