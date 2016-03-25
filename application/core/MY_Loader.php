<?php
(defined('BASEPATH')) or exit('No direct script access allowed');

/* load the HMVC_Loader class */
require APPPATH . 'third_party/HMVC/Loader.php';
require APPPATH . 'libraries/Twig.php';

class MY_Loader extends HMVC_Loader {
  public function __construct() {
    parent::__construct();
    $this->twig = new Twig;
  }

  public function get_vars(){
    return $this->_ci_cached_vars;
  }

  public function view($template, $data = array(), $return = FALSE){
    return $this->twig->parse($template, $data, $return);
  }
}
