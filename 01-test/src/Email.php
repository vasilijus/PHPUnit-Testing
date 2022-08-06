<?php 
declare(strict_types=1);

namespace Sergei\TestOne;

use InvalidArgumentException;

final class Email
{
    private $emai;

    private function __construct(string $email)
    {
        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    private function enumIsValidEmail(string $email): void 
    {
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
    
}