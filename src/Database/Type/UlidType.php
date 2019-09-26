<?php

namespace mitakeck\UlidTypes\Database\Type;

use Cake\Database\Driver;
use Cake\Database\Type\StringType;
use Ulid\Ulid;

/**
 * Provides behavior for the ULID type
 */
class UlidType extends StringType
{
    /**
     * Casts given value from a PHP type to one acceptable by database
     *
     * @param mixed $value value to be converted to database equivalent
     * @param \Cake\Database\Driver $driver object from which database preferences and configuration will be extracted
     * @return string|null
     */
    public function toDatabase($value, Driver $driver)
    {
        if ($value === null || $value === '') {
            return null;
        }
        return parent::toDatabase($value, $driver);
    }

    /**
     * Generate a new ULID
     *
     * @return string A new primary key value.
     */
    public function newId()
    {
        return (string)Ulid::generate();
    }

    /**
     * Marshals request data into a PHP string
     *
     * @param mixed $value The value to convert.
     * @return string|null Converted value.
     */
    public function marshal($value)
    {
        if ($value === null || $value === '' || is_array($value)) {
            return null;
        }
        return (string)$value;
    }
}
