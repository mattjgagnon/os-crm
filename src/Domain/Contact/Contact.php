<?php

namespace OSCRM\Domain\Contact;

readonly class Contact
{
    public function __construct(
        private FullName $name,
        private Email $email,
        private Phone $phone) {
    }

    public function name(): FullName
    {
        return $this->name;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function phone(): Phone
    {
        return $this->phone;
    }
}
