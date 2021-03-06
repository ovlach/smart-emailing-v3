<?php
namespace SmartEmailing\v3\Exceptions;

class InvalidFormatException extends \LogicException
{
    /**
     * Checks if the value is in the array. Throws exception if not
     * @param mixed $value
     * @param array $allowed
     */
    public static function checkInArray($value, array $allowed)
    {
        if (!in_array($value, $allowed)) {
            throw new InvalidFormatException("Value '{$value}' not allowed: ".implode(', ', $allowed));
        }
    }
}