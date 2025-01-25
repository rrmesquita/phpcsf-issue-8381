<?php

class Example
{
    public string $first = 'John';

    public string $last = 'Doe';

    public string $full_name {
        get {
            return $this->first . ' ' . $this->last;
        }
    }
}
