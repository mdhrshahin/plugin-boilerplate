<?php

namespace Inc\Pages;
use Inc\Base\BaseController;

Class Admin extends BaseController{

    public function register(){
      add_action('admin_menu',array($this, 'add_admin_pages'));

    }

    function add_admin_pages(){
        add_menu_page('new-plugin','new-plugin','manage_options',
            'new_plugin',array($this ,'admin_index'),'',null);
    }
    function  admin_index(){
//        echo $this->plugin_path;
        require_once $this->plugin_path . 'templates/admin.php';

    }

}