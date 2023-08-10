<?php

declare(strict_types=1);


namespace App\Data;

use App\Models\Team;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TeamData extends Data
{
    public function __construct(
        public readonly string $team_name,
        public readonly int $total_users,
        #[DataCollectionOf(UserData::class)]
        public DataCollection $users,
        #[DataCollectionOf(SearchOptions::class)]
        public DataCollection $frontend,
    ) {
    }

    public static function fromTeam(Team $team): static
    {
        dd($team->users);

        return new self(
            team_name: $team->team_name,
            total_users: $team->users()->count(),
            users: UserData::collection($team->users),
            frontend: SearchOptions::collection($team->users),
        );
    }
}
