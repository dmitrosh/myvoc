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
        parent::__construct();
        header('Content-Type: application/json; charset=utf-8');
    }
    public function wordlist() {
        $this->load->model('word_model');
        $this->respond = $this->word_model->get_list();
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function __destruct () {
        die(json_encode($this->respond, JSON_UNESCAPED_UNICODE));
    }
}