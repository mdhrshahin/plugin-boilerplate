<?php
namespace Inc;
final Class Init{
    public static function get_services()
    {
        return[
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingLinks::class,
            Base\BaseController::class
        ];
        
    }
   public static function register_service()
    {
        foreach (self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service,'register')){
                $service->register();
            }

        }

    }

    private static function instantiate($class){
        return new $class;
    }

}
    //use Inc\Activate;
    //use Inc\Deactivated;
    //use Inc\Admin\AdminPages;
    //Class NewPlugin{
    //
    //    public $plugin;
    //    function __construct()
    //    {
    //        $this->plugin = plugin_basename(__FILE__);
    //    }
    //
    //    function register(){
    //
    //        add_filter("plugin_action_links_$this->plugin",array($this,'setting_links'));
    //
    //    }
    //    function setting_links($links){
    //        $setting_links = '<a href="options-general.php?page=new_plugin">Settings</a>';
    //        array_push($links,$setting_links);
    //        return $links;
    //    }
    //
    //    function add_admin_pages(){
    //        add_menu_page('new-plugin','new-plugin','manage_options',
    //            'new_plugin',array($this ,'admin_index'),'',null);
    //    }
    //
    //    function  admin_index(){
    //        require_once plugin_dir_path(__FILE__).'templates/admin.php';
    //
    //    }
    //    function create_post_type(){
    //        add_action('init',array($this,'custom_post_type'));
    //
    //    }
    //
    //    function uninstall(){
    //
    //    }
    //
    //    function custom_post_type(){
    //        register_post_type('book' ,['public'=>true]);
    //    }
    //
    //    function enqueue(){
    //        wp_enqueue_style('newpluginstyle',plugins_url('assets/mystyle.css'),__FILE__);
    //        wp_enqueue_script('newpluginscript',plugins_url('assets/myscript.js'),__FILE__);
    //
    //    }
    //
    //    function activate(){
    ////        require_once plugin_dir_path(__FILE__).'inc/plugin-activate.php';
    //        Activate::activate();
    //
    //    }
    //
    //}
    //
    //if (class_exists('NewPlugin')){
    //    $newPlugin = new NewPlugin();
    //    $newPlugin->register();
    //}
    //
    //register_activation_hook(__FILE__,array($newPlugin,'activate'));
    ////
    ////require_once plugin_dir_path(__FILE__).'inc/plugin-deactivate.php';
    //
    //register_deactivation_hook(__FILE__,array('Deactivate','deactivated'));