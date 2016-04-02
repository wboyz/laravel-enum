<?php

namespace WBoyz\LaravelEnum;

use ReflectionClass;

abstract class BaseEnum
{
    /**
     * Returns the enum values.
     *
     * @return array
     */
    public static function getValues()
    {
        return array_values(static::toDictionary());
    }

    /**
     * Returns the enum keys.
     *
     * @return array
     */
    public static function getKeys()
    {
        return array_keys(static::toDictionary());
    }

    /**
     * Returns the enum as dictionary.
     *
     * @return array
     */
    public static function toDictionary()
    {
        $className = get_called_class();
        $reflectionClass = new ReflectionClass($className);

        return $reflectionClass->getConstants();
    }
}
