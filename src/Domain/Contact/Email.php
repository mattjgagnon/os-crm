<?php

namespace OSCRM\Domain\Contact;

readonly class Email
{
    public function __construct(private string $email)
    {
    }

    public function get(): string
    {
        return $this->email;
    }
}
