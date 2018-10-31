<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    use ApiResponser;

    /**
     * The service to consume the author service
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @param AuthorService $authorService
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
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
