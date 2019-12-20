<?php

/**
 * @package   Functional-php
 * @author    Lars Strojny <lstrojny@php.net>
 * @copyright 2011-2017 Lars Strojny
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/lstrojny/functional-php
 */

namespace Functional;

/**
 * Returns true if $a is strictly greater than $b.
 *
 * @template V of numeric
 * @param V $b
 * @return callable(V): bool
 */
function greater_than($b): callable
{
    return static function ($a) use ($b): bool {
        return $a > $b;
    };
}
