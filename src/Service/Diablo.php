<?php

namespace LogansUA\BlizzardApi\Service;

use GuzzleHttp\Psr7\Response;

/**
 * Class Diablo
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Diablo extends Service
{
    /**
     * {@inheritdoc}
     */
    protected $serviceParam = '/d3';

    // region Profile API

    /**
     * Get career profile by battle tag
     *
     * Returns the career profile of a Battle Tag
     *
     * @param string $battleTag Battle Tag in name-#### format (ie. Noob-1234)
     * @param array  $options   Options
     *
     * @return Response
     */
    public function getCareerProfile($battleTag, array $options = [])
    {
        return $this->request('/profile/'.(string) $battleTag.'/', $options);
    }

    /**
     * Get hero profile by battle tag and hero id
     *
     * Returns the hero profile of a Battle Tag's hero
     *
     * @param string $battleTag Battle Tag in name-#### format (ie. Noob-1234)
     * @param string $heroId    The hero id of the hero to look up
     * @param array  $options   Options
     *
     * @return Response
     */
    public function getHeroProfile($battleTag, $heroId, array $options = [])
    {
        return $this->request('/profile/'.(string) $battleTag.'/hero/'.(int) $heroId, $options);
    }

    // end region Profile API

    // region Data resources API

    /**
     * Get item data by item ID
     *
     * Returns data for a profile item
     *
     * @param string $itemId  The item data string (from a profile) containing the item to lookup
     * @param array  $options Options
     *
     * @return Response
     */
    public function getItemDataById($itemId, array $options = [])
    {
        return $this->request('/data/item/'.(string) $itemId, $options);
    }

    /**
     * Get follower data
     *
     * Returns data for a follower
     *
     * @param string $follower The data about a follower (enchantress, scoundrel, templar)
     * @param array  $options  Options
     *
     * @return Response
     */
    public function getFollowerData($follower, array $options = [])
    {
        return $this->request('/data/follower/'.(string) $follower, $options);
    }

    /**
     * Get artisan data
     *
     * Returns data for an artisan
     *
     * @param string $artisan The data about an artisan (blacksmith, jeweler, mystic)
     * @param array  $options Options
     *
     * @return Response
     */
    public function getArtisanData($artisan, array $options = [])
    {
        return $this->request('/data/artisan/'.(string) $artisan, $options);
    }

    // end region Data resources API
}
