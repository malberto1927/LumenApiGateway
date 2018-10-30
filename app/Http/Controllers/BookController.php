<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Traits\ApiResponser;

class BookController extends Controller
{

    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
