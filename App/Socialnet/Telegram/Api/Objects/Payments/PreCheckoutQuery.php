<?php

namespace App\Socialnet\Telegram\Api\Objects\Payments;

use App\Socialnet\Telegram\Api\Objects\BaseObject;
use App\Socialnet\Telegram\Api\Objects\User;

/**
 * @property string    $id                     Unique query identifier
 * @property User      $from                   User who sent the query.
 * @property string    $currency               Three-letter ISO 4217 currency code
 * @property int       $totalAmount            Total price in the smallest units of the currency (integer, not float/double)
 * @property string    $invoicePayload         Bot specified invoice payload
 * @property string    $shippingOptionId       (Optional). Identifier of the shipping option chosen by the user
 * @property OrderInfo $orderInfo              (Optional). Order info provided by the user
 *
 * @link https://core.telegram.org/bots/api#precheckoutquery
 */
class PreCheckoutQuery extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return array(
            'from'       => User::class,
            'order_info' => OrderInfo::class,
        );
    }
}
