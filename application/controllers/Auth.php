<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Abdulaja
 * Date: 26/01/2017
 * Time: 14.47
 */
class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function login() {
        $this->data['title'] = "Login";

        $this->load->view('back/layouts/auth/login', $this->data);
    }

}