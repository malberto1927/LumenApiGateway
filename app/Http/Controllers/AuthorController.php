<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{

    use ApiResponser;

    /**
     * The service to consume the author service
     *
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
     *
     * @return \Illuminate\Http\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
        return $this->successResponse($this->authorService->obtainAuthors());
    }

    /**
     * Creates an instance of authors
     *
     * @param Request $request
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->authorService->createAuthor($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Retrieve and show an instance of author
     *
     * @param $author
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($author)
    {
        return $this->successResponse($this->authorService->obtainAuthor($author));
    }

    /**
     * Update an instance of author
     *
     * @param Request $request
     * @param $author
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->editAuthor($request->all(), $author));
    }

    /**
     * Remove an instance of author
     *
     * @param $author
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteAuthor($author));
    }
}
