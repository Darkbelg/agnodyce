<?php


namespace App\Service\Youtube;


/**
 * @method static listSearch(string $string, array $optionalParameters)
 */
class Search
{
    public function __call($name, $arguments)
    {
        return (new Connection())->get()->search->$name($arguments[0], $arguments[1]);
    }
}
