<?php

namespace App\Socialnet\Telegram\Api\Objects;

/**
 * Class GameHighScore.
 *
 * @property int  $position Position in high score table for the game.
 * @property User $user     User
 * @property int  $score    Score
 */
class GameHighScore extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return array(
            'user' => 'User',
        );
    }
}
