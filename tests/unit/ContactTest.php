<?php

namespace unit;

use OSCRM\Domain\Contact\Email;
use OSCRM\Domain\Contact\FullName;
use OSCRM\Domain\Contact\Phone;
use PHPUnit\Framework\TestCase;
use OSCRM\Domain\Contact\Contact;

class ContactTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function it_creates_a_valid_contact()
    {
        // assemble
        $name = new FullName('John Doe');
        $email = new Email('john.doe@example.com');
        $phone = new Phone('555-1234');

        // act
        $contact = new Contact($name, $email, $phone);

        // assert
        $this->assertSame($name, $contact->name());
        $this->assertSame($email, $contact->email());
        $this->assertSame($phone, $contact->phone());
    }
}
