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

    /**
     * Retrieve and show all the authors
     * @return \Illuminate\Http\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
      return $this->successResponse($this->authorService->obtainAuthors());
    }

    /**
     * Creates an instance of authors
     * @param Request $request
     */
    public function store(Request $request)
    {
      // code...
    }

    /**
     * @param $author
     */
    public function show($author)
    {
      // code...
    }

    /**
     * @param Request $request
     * @param $author
     */
    public function update(Request $request, $author)
    {
      // code...
    }

    /**
     * @param $author
     */
    public function destroy($author)
    {
      // code...
    }
}
