<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Credit;



class CreditController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

public function getAll() {
    //select * from movies
    //$movies = Movie::all();
    //return response()->json ($movies);

    //SELECT id,title,movie_image FROM movies ORDER BY title ASC
    //$movies = Movie::select('id', 'title', 'movie_image')->orderBy('title','ASC')->get();

    $credits = Credit::all();


    return response()->json ($credits);

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
