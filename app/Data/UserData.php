<?php

declare(strict_types=1);


namespace App\Data;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
    ) {
    }
}
