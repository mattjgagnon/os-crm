<?php

namespace OSCRM\Domain\Contact;

readonly class FullName
{
    public function __construct(private string $fullName)
    {
    }

    public function get(): string
    {
        return $this->fullName;
    }
}
