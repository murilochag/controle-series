<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodesController
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }

    public function updateWatched(Request $request, Season $season)
    {
        $watchedIds = $request->episodes ?? [];

        foreach ($season->episodes as $episode) {
            $episode->watched = in_array($episode->id, $watchedIds);
            $episode->save();
        }

        return to_route('episodes.index', $season->id)
            ->with(['mensagemSucesso' => 'Os episódios foram marcados como assistidos.']);
    }
}
