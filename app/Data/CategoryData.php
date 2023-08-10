<?php

declare(strict_types=1);


namespace App\Data;

use App\Models\Category;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CategoryData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly int $total_videos,
        #[DataCollectionOf(VideoData::class)]
        public DataCollection $videos,
        #[DataCollectionOf(SearchOptions::class)]
        public DataCollection $frontend,
    ) {
    }

    public static function fromCategory(Category $category): static
    {
        return new self(
            name: $category->name,
            total_videos: $category->videos()->count(),
            videos: VideoData::collection($category->videos),
            frontend: SearchOptions::collection($category->videos),
        );
    }
}
