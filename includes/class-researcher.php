<?php
class Researcher{
    protected $version;

    public function __construct(){
        if(defined('Researcher_Version')){
            $this->version = Researcher_Version;
        }
        else{
            $this->version = '1.1';
        }
    }

    public function run(){
        if(is_admin()){
            //Code for admin run only so the public cant see this : )
        }
        $this->setup();
    }
    //This is for Researcher data
    public function setup(){
        //Researchers
        require_once plugin_dir_path(dirname(__file__)).'admin/cpts.php';
        add_action('init', 'create_researchers', 0);
        add_filter('single_template', 'researchers_single');
        //add_filter('template_include', 'researchers_archive');
    }
    public function get_version(){
        return $this->version;
    }
}
