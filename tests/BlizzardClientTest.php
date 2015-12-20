<?php

namespace Tests\BlizzardApi\BlizzardClient;

use LogansUA\BlizzardApi\BlizzardClient;

/**
 * BlizzardClientTest
 *
 * @author Oleg Kachinsky <Logansoleg@gmail.com>
 */
class BlizzardClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string $apiKey API key
     */
    private $apiKey = '999999999';

    /**
     * @var string $locale Locale
     */
    private $locale = 'en_US';

    /**
     * @var string $region Region
     */
    private $region = 'US';

    /**
     * Test creation of new blizzard client
     */
    public function testCreateNewBlizzardClient()
    {
        $client = new BlizzardClient($this->apiKey, $this->locale, $this->region);

        $lowerRegion = strtolower($this->region);
        $lowerLocale = strtolower($this->locale);

        $this->assertEquals("https://{$lowerRegion}.api.battle.net", $client->getApiUrl());
        $this->assertEquals($this->apiKey, $client->getApiKey());
        $this->assertEquals($lowerLocale, $client->getLocale());
        $this->assertEquals($lowerRegion, $client->getRegion());
    }

    /**
     * Test getter for `apiKey` field
     */
    public function testGetApiKey()
    {
        $client = new BlizzardClient($this->apiKey, $this->locale, $this->region);

        $this->assertEquals($this->apiKey, $client->getApiKey());
    }

    /**
     * Test getter for `region` field
     */
    public function testGetRegion()
    {
        $client = new BlizzardClient($this->apiKey, $this->locale, $this->region);

        $this->assertEquals(strtolower($this->region), $client->getRegion());
    }

    /**
     * Test getter for `locale` field
     */
    public function testGetLocale()
    {
        $client = new BlizzardClient($this->apiKey, $this->locale, $this->region);

        $this->assertEquals(strtolower($this->locale), $client->getLocale());
    }

    /**
     * Test getter for `apiUrl` field
     */
    public function testGetApiUrl()
    {
        $lowerRegion = strtolower($this->region);
        $apiUrl      = "https://{$lowerRegion}.api.battle.net";

        $client = new BlizzardClient($this->apiKey, $this->locale, $this->region);

        $this->assertEquals($apiUrl, $client->getApiUrl());
    }
}
