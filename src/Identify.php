<?php

namespace Dsmr\Identify;

use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Device;
use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Language;

class Identify
{

    /**
     * Store the os object
     * @var object
     */
    protected $os;

    /**
     * Store the device object
     * @var object
     */
    protected $device;

    /**
     * Store the browser object
     * @var object
     */
    protected $browser;

    /**
     * Store the language object
     * @var object
     */
    protected $language;

    /**
     *  Create an Instance of Browser and Os
     */
    public function __construct()
    {
        $this->os = new Os();
        $this->device = new Device();
        $this->browser = new Browser();
        $this->language = new Language();
    }

    /**
     * Get all the methods applicable to Os detection
     * e.g getName(), getVersion()
     * @return \Sinergi\BrowserDetector\Os
     */
    public static function os(): Os
    {
        return (new self)->os;
    }

    /**
     * Get all the methods applicable to Device detection
     * e.g getName()
     * @return \Sinergi\BrowserDetector\Device
     */
    public static function device(): Device
    {
        return (new self)->device;
    }

    /**
     * Get all the methods applicable to Browser detection
     * e.g getName(), getVersion()
     * @return \Sinergi\BrowserDetector\Browser
     */
    public static function browser(): Browser
    {
        return (new self)->browser;
    }

    /**
     * Get all the methods applicable to Language detection
     * e.g getLanguage()
     * @return \Sinergi\BrowserDetector\Language
     */
    public static function lang(): Language
    {
        return (new self)->language;
    }
}
