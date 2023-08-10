<?php

namespace App\Http\Controllers;

use App\Data\TeamData;
use App\Models\Team;

class TeamController extends Controller
{
    public function __invoke(
        Team $team
    ) {
        return TeamData::from($team);
    }
}
