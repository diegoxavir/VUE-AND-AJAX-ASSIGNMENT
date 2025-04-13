<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;



class MovieController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

public function getAll() {
    //select * from movies
    //$movies = moive::all();
    //return response()->json ($movies);

    //SELECT id,title,movie_image FROM movies ORDER BY title ASC
    //$movies = Movie::select('id', 'title', 'movie_image')->orderBy('title','ASC')->get();

    $movies = Movie::select('id', 'title', 'posterSketch')
    ->orderBy('title', 'ASC')
    ->get();

return response()->json($movies);

}
public function getOne($id) {

    $movie = Movie::join('credits', 'credits.id', '=', 'movies.credits_id')
    ->select(
        'movies.id',
        'movies.title',
        'movies.release_date',
        'movies.movie_image',
        'credits.director',
        'credits.writer',
        'movies.posterSketch'
    )
    ->where('movies.id', $id)
    ->first();

if (!$movie) {
return response()->json(['message' => 'Movie not found'], 404);
}

return response()->json($movie);
}
    
public function save(Request $request) {
    
}
public function update(Request $request, $id) {
    
}

public function delete($id) {
    
}
    
}
