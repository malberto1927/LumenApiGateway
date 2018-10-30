<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Traits\ApiResponser;

class AuthorController extends Controller
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

    public function show($author)
    {
      // code...
    }

    public function update(Request $request, $author)
    {
      // code...
    }

    public function destroy($author)
    {
      // code...
    }
}
