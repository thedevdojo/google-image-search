<?php
/**
 * @author Tony Lea <tony@devdojo.com>
 * @package google-image-search
 */
namespace DevDojo\GoogleImageSearch;

/**
 * Class Image. Used to query google images.
 *
 * @package DevDojo\GoogleImageSearch
 */
class Image
{
    /**
     * @param $query
     * @param array $filters
     * @return mixed
     */
    public static function search($query, $filters = [])
    {
        $http = new Http(Config::instance());

        return json_decode((string) $http->query($query, $filters), true);
    }
}
