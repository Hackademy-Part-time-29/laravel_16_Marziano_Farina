<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function genre_index () {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $genres = $response['data'];
        return view ('genre.index',compact('genres'));
    }

    public function animeByGenre ($id){
        $response = Http::get('https://api.jikan.moe/v4/anime?genres='.$id)->json();
        
        $animes = Arr::map($response['data'],function($anime){
            return [
                'id'=>$anime['mal_id'],
                'title_en'=>$anime['title_english'],
                'synopsis'=>$anime['synopsis'],
            ];
        });

        return view ('anime.index',compact('animes'));
    }
}
