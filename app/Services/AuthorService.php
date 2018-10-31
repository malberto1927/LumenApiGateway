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
     * Get the full list of authors from the service
     *
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }
}