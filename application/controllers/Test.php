<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('breadcrumb');
    }

    function index() {
        $this->layout->set_title('Test');
        $this->layout->set_meta('Testing');

        $data['primary_title'] = 'Test';
        $data['sub_primary_title'] = 'Testing';

        $this->layout->back('test/index', $data);
    }
}