<?php
/**
 * Created by PhpStorm.
 * User: Dmitron
 * Date: 31.03.2015
 * Time: 2:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {
    private $respond = null;
    public function __construct () {
        header('Content-Type: application/json');
    }
    public function wordlist() {
        $this->respond = array("apple" => array("фрукт", "компания"), "set" => array("набор"));
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function __destruct () {
        die(json_encode($this->respond));
    }
}