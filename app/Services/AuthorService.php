<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 30/10/18
 * Time: 18:13
 */

namespace App\Services;


use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     *
     * @var string
     */
    public $baseUri;

    /**
     * AuthorService constructor.
     */
    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Get the full list of authors from the service author
     *
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create an instance of author from the service author
     *
     * @param $data
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Get an single instance of author from the service author
     *
     * @param $author
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    /**
     * Edit an single instance of author from the service author
     *
     * @param $data
     * @param $author
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * Remove an single instance of author from the service author
     *
     * @param $author
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}