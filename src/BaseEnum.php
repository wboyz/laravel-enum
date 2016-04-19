<?php

namespace WBoyz\LaravelEnum;

use ReflectionClass;

abstract class BaseEnum
{
    const DEFAULT_VALUE = 0;

    /**
     * Returns an enum value by its key.
     *
     * @return mixed
     */
    public static function getValue($key)
    {
        $className = get_called_class();
        $reflectionClass = new ReflectionClass($className);

        if (! $reflectionClass->hasConstant($key)) {
            return static::DEFAULT_VALUE;
        }

        return $reflectionClass->getConstant($key);
    }

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
        $dictionary = $reflectionClass->getConstants();
        
        unset($dictionary['DEFAULT_VALUE']);

        return $dictionary;
    }

    /**
     * Checks if a value exists in constant values.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public static function hasValue($value)
    {
        return in_array($value, static::getValues(), true);
    }

    /**
     * Checks if a key exists in constant names.
     *
     * @param string $key
     *
     * @return bool
     */
    public static function hasKey($key)
    {
        return in_array($key, static::getKeys());
    }

}
