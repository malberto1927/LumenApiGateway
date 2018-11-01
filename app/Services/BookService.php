<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 30/10/18
 * Time: 18:13
 */

namespace App\Services;


use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     *
     * @var string
     */
    public $baseUri;

    /**
     * BookService constructor.
     */
    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Get the full list of books from the service book
     *
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create an instance of book from the service book
     *
     * @param $data
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Get an single instance of book from the service book
     *
     * @param $book
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    /**
     * Edit an single instance of book from the service book
     *
     * @param $data
     * @param $book
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function editBook($data, $book)
    {
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Remove an single instance of book from the service book
     *
     * @param $book
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }
}