<?php

// +-------------------------------------------------------------------------+
// | Copyright (c) 2008 - 2020 LLC ICS, Development Center (www.icstime.com) |
// | license   http://www.gnu.org/licenses/agpl.html AGPL Version 3          |
// | Written by:  KoloBizCom                                                 |
// | Version 2.3.8                                                           |
// | Created by Denys P. Zherebyatyev                                        |
// +-------------------------------------------------------------------------+-
// | $Id: Viber_Extended_Api, v1.03 2020/09/01 12:23:00 Exp $

namespace App\Socialnet\Viber\Api\Message;

use App\Socialnet\Viber\Api as Api;

/**
 * Class Sticker
 *
 * @package Viber\Api
 *
 * Sticker as message
  * @see https://developers.viber.com/tools/sticker-ids/index.html
 */
class Sticker extends Api\Message
{
    /**
     * Unique Viber sticker ID.
     *
     * @var integer
     */
    protected $sticker_id;

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return Type::STICKER;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), array(
            'sticker_id' => $this->getStickerId(),
        ));
    }

    /**
     * Get the value of Unique Viber sticker ID.
     *
     * @return integer
     */
    public function getStickerId()
    {
        return $this->sticker_id;
    }

    /**
     * Set the value of Unique Viber sticker ID.
     *
     * @param integer sticker_id
     *
     * @return self
     */
    public function setStickerId($sticker_id)
    {
        $this->sticker_id = $sticker_id;

        return $this;
    }
}
