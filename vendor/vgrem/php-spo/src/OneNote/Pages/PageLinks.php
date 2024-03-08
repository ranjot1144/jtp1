<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00 
 */
namespace Office365\OneNote\Pages;

use Office365\OneNote\ExternalLink;
use Office365\Runtime\ClientValue;
class PageLinks extends ClientValue
{
    /**
     * @var ExternalLink
     */
    public $OneNoteClientUrl;
    /**
     * @var ExternalLink
     */
    public $OneNoteWebUrl;
}