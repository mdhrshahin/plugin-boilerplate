<?php

namespace Inc\Base;
use Inc\Base\BaseController;
Class SettingLinks extends BaseController
{

    public function register()
    {

        add_filter("plugin_action_links_".$this->plugin,array($this,'setting_links'));

    }
    function setting_links($links){
        $setting_links = '<a href="options-general.php?page=new_plugin">Settings</a>';
        array_push($links,$setting_links);
        return $links;
    }
}