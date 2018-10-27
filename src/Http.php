<?php
/**
 * @author Tony Lea <tony@devdojo.com>
 * @package google-image-search
 */
namespace DevDojo\GoogleImageSearch;

use GuzzleHttp\Client;

/**
 * Class Http. Used for the http query.
 *
 * @package DevDojo\GoogleImageSearch
 */
class Http
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->client = new Client();
    }

    public function query($query, $filters)
    {
        $query = [
            'q' => $query,
            'cx' => $this->config->cx(),
            'key' =>$this->config->apiKey(),
            'searchType' => 'image'
        ];

        foreach ($filters as $key => $filter) {
            $query[$key] = $filter;
        }

        return $this->client->get($this->config->baseUrl, ['query' => $query])->getBody();
    }
}
