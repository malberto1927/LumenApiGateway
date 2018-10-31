<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{

    use ApiResponser;

    /**
     * The service to consume the book service
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @param BookService $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
      // code...
    }

    public function store(Request $request)
    {
      // code...
    }

    public function show($book)
    {
      // code...
    }

    public function update(Request $request, $book)
    {
      // code...
    }

    public function destroy($book)
    {
      // code...
    }
}
