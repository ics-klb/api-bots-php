<?php

// +-------------------------------------------------------------------------+
// | Copyright (c) 2008 - 2020 LLC ICS, Development Center (www.icstime.com) |
// | license   http://www.gnu.org/licenses/agpl.html AGPL Version 3          |
// | Written by:  KoloBizCom                                                 |
// | Version 2.3.8                                                           |
// | Created by Denys P. Zherebyatyev                                        |
// +-------------------------------------------------------------------------+-
// | $Id: Api_Messages/MessageDefaultAction.php, v1.03 2020/09/01 12:23:00 Exp $

namespace App\Socialnet\Facebook\Api\Messages;

/**
 * Class MessageDefaultAction
 *
 * @package Facebook\Api\Messages
 */
class MessageDefaultAction
{
    /**
     * Web url button type
     */
    const TYPE_WEB = "web_url";

    /**
     * Button type
     *
     * @var null|string
     */
    protected $type = null;

    /**
     * Button url
     *
     * @var null|string
     */
    protected $url = null;

    /**
     * Webview height ratio ("compact", "tall" or "full")
     *
     * @var null|string
     */
    protected $webview_height_ratio = null;

    /**
     * Messenger extensions which enable your web page to integrate with Messenger using js
     *
     * @var boolean
     */
    protected $messenger_extensions = false;

    /**
     * Fallback url to use on clients that don't support Messenger Extensions
     *
     * @var null|string
     */
    protected $fallback_url = null;

    /**
     * MessageButton constructor.
     *
     * @param string $type - Force TYPE_WEB
     * @param string $url url or postback
     */
    public function __construct($url = '', $webview_height_ratio = '', $messenger_extensions = false, $fallback_url = '')
    {
        $this->type = self::TYPE_WEB;

        $this->webview_height_ratio = $webview_height_ratio;
        $this->messenger_extensions = $messenger_extensions;
        $this->fallback_url = $fallback_url;
        $this->url = $url;
    }

    /**
     * Get Button data
     *
     * @return array
     */
    public function getData()
    {
        $result = array(
            'type' => $this->type
        );

        switch($this->type)
        {

            case self::TYPE_WEB:
              $result['url'] = $this->url;

              if ($this->webview_height_ratio) {
                  $result['webview_height_ratio'] = $this->webview_height_ratio;
              }

              if ($this->messenger_extensions){
                  $result['messenger_extensions'] = $this->messenger_extensions;
                  $result['fallback_url'] = $this->fallback_url;
              }
            break;

        }

        return $result;
    }
}
