<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faculty_page extends CI_Controller
{
    function __construct() {
        parent::__construct();
        /*$this->load->model('Faculty_page_model');*/
    }
    public function index() {

        $this->load->view('faculty_page_view');
    }
}
?>