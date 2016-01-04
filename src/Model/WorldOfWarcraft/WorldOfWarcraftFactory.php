<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use GuzzleHttp\Psr7\Response;

/**
 * Class WorldOfWarcraftFactory
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraftFactory
{
    const ACHIEVEMENTS        = 'achievements';
    const AUCTION_DATA_STATUS = 'auction_data_status';
    const MASTER_LIST         = 'master_list';
    const PET_ABILITY         = 'pet_ability';
    const PET_SPECIES         = 'pet_species';
    const PET_STATS           = 'pet_stats';

    /**
     * Get model
     *
     * @param string   $modelType Service model type
     * @param Response $response  Response
     *
     * @return object
     */
    public function getModel($modelType, $response)
    {
        $models = [
            self::ACHIEVEMENTS        => new Achievement(),
            self::AUCTION_DATA_STATUS => new Auction(),
            self::MASTER_LIST         => new Master(),
            self::PET_ABILITY         => new PetAbility(),
            self::PET_SPECIES         => new PetSpecies(),
            self::PET_STATS           => new PetStats(),
        ];

        /** @var AbstractModel $model */
        $model = $models[$modelType];

        return $model->initializeObject($response);
    }
}