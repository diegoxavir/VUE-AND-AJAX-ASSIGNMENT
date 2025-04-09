<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;



class BookController extends Controller {
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

    $books = Book::join('authors','authors.id','=','books.author_id')->select('books.id', 'books.title', 'authors.name', 'books.published_date', 'books.book_image')->orderBy('books.title', 'ASC')->get();


    return response()->json ($books);

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
