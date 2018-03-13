<?php

namespace pxgamer\Gitcoin;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class Client
 */
class Client
{
    /**
     * The base URI to connect with.
     */
    public const BASE_URI = 'https://gitcoin.co/api/v0.1/';
    /**
     * @var GuzzleClient
     */
    private $client;

    /**
     * Basic constructor.
     */
    public function __construct()
    {
        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URI,
        ]);
    }

    /**
     * Get a specific bounty by its id.
     *
     * @param int $id
     * @return Bounty
     */
    public function getBounty(int $id)
    {
        $data = \GuzzleHttp\json_decode(
            $this->client
                ->get('bounties/'.$id)
                ->getBody()
                ->getContents()
        );

        return $this->populateFromData(
            Bounty::class,
            $data
        );
    }

    /**
     * @param string       $className
     * @param array|object $data
     * @return object|Bounty
     */
    private function populateFromData(string $className, $data)
    {
        $bounty = new $className();

        foreach ($data as $key => $value) {
            $bounty->{$key} = $value;
        }

        return $bounty;
    }
}
