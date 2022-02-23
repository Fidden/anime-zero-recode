<?php

namespace App\Http\Controllers;

use App\Jobs\FilmParseJob;
use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\Genre;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FilmParserController extends Controller
{
    public function store()
    {
        FilmParseJob::dispatch();
    }
}
