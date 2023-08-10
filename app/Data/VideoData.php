<?php

declare(strict_types=1);


namespace App\Data;

use Spatie\LaravelData\Data;

class VideoData extends Data
{
    public function __construct(
        public readonly string $extension,
        public readonly string $category_id,
    ) {
    }
}
