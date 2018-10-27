<?php
/**
 * @author Tony Lea <tony@devdojo.com>
 * @package google-image-search
 */
namespace DevDojo\GoogleImageSearch;

/**
 * Class ImageSearch. Used as the main entry point to search images.
 *
 * @package DevDojo\GoogleImageSearch
 */
class ImageSearch
{
    /**
     * Used to search for images.
     *
     * @param $query
     * @param $filters
     * @return mixed
     */
    public static function search($query, $filters = [])
    {
        return Image::search($query, $filters);
    }

    /**
     * Used to set or get config values.
     *
     * @return null
     */
    public static function config()
    {
        return Config::instance();
    }
}
