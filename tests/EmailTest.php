<?php

use PlatziPHP\Domain\Email;

class EmailTest extends PHPUnit\Framework\TestCase
{
    function test_email_is_valid()
    {
        $email = new Email('fake.email@example.dev');

        $this->assertInstanceOf(
            Email::class,
            $email
        );
    }

    function test_email_is_invalid()
    {
        $this->setExpectedException(
            InvalidArgumentException::class
        );

        $email = new Email('esto no es un email');
    }
}