<?php

namespace Lib;

class Hydrator {
  
    public function hydrate(array $data, $object) {
        if (!is_object($object)) {
            throw new Exception\BadMethodCallException(sprintf('%s expects the provided $object to be a PHP object)', __METHOD__));
        }

        $transform = function($letters) {
            $letter = substr(array_shift($letters), 1, 1);

            return ucfirst($letter);
        };

        foreach ($data as $property => $value) {
            $method = 'set' . ucfirst($property);
            if ($this->underscoreSeparatedKeys) {
                $method = preg_replace_callback('/(_[a-z])/i', $transform, $method);
            }
            if (is_callable(array($object, $method))) {
                $value = $this->hydrateValue($property, $value, $data);
                $object->$method($value);
            }
        }

        return $object;
    }

}
