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

    $movies = Movie::join('credits','credits.id','=','movies.credits_id')->select('movies.id', 'movies.title', 'credits.director', 'credits.writer', 'movies.release_date', 'movies.movie_image')->orderBy('movies.title', 'ASC')->get();


    return response()->json ($movies);

}
public function getOne($id) {
    
}
public function save(Request $request) {
    
}
public function update(Request $request, $id) {
    
}

public function delete($id) {
    
}
    
}
