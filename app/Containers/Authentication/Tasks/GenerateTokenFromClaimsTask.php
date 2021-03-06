<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Adapters\JwtAuthAdapter;
use App\Port\Task\Abstracts\Task;

/**
 * Class GenerateTokenFromClaimsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class GenerateTokenFromClaimsTask extends Task
{

    /**
     * ApiLoginThisUserObjectTask constructor.
     *
     * @param \App\Containers\Authentication\Adapters\JwtAuthAdapter $jwtAuthAdapter
     */
    public function __construct(JwtAuthAdapter $jwtAuthAdapter)
    {
        $this->jwtAuthAdapter = $jwtAuthAdapter;
    }


    /**
     * @param $customClaims
     */
    public function run($customClaims)
    {
        return $this->jwtAuthAdapter->makeTokenWithCustomClaims($customClaims);
    }

}
