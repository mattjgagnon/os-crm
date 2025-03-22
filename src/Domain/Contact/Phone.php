<?php

namespace OSCRM\Domain\Contact;

readonly class Phone
{
    public function __construct(private string $phone)
    {
    }

    public function get(): string
    {
        return $this->phone;
    }
}
