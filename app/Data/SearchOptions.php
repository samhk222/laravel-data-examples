<?php

declare(strict_types=1);


namespace App\Data;

use App\Models\Category;
use App\Models\User;
use App\Models\Video;
use Spatie\LaravelData\Data;

class SearchOptions extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly int $id_other,
        public readonly int $id_another,
    ) {
    }

    public static function fromUser(User $user): static
    {
        return new self(
            id: $user->getKey(),
            id_other: $user->getKey(),
            id_another: $user->getKey(),
        );
    }

    public static function fromVideo(Video $video): static
    {
        return new self(
            id: $video->getKey(),
            id_other: $video->getKey(),
            id_another: $video->getKey(),
        );
    }
}
