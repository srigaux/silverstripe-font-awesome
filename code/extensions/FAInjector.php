<?php

/**
 * Class FAInjector
 */
class FAInjector extends Extension
{
    public function onBeforeInit()
    {
        if (SiteConfig::current_site_config()->UseCDN) {
            Requirements::css("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
        } else {
            Requirements::css("font-awesome/css/font-awesome.min.css");
        }

    }
}