<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;



class AuthorController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

public function getAll() {
    //select * from books
    //$books = Book::all();
    //return response()->json ($books);

    //SELECT id,title,book_image FROM books ORDER BY title ASC
    //$books = Book::select('id', 'title', 'book_image')->orderBy('title','ASC')->get();

    $authors = Author::all();


    return response()->json ($authors);

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
