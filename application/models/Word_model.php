<?php
/**
 * Created by PhpStorm.
 * User: Dmitron
 * Date: 08.04.2015
 * Time: 2:26
 */

class Word_model extends CI_Model {

    public function __construct () {
        parent::__construct();
    }

    public function get_list (){

        $this->db->select('word.id, word.value, group_concat(meaning) meaning');
        $this->db->from('word');
        $this->db->join('translation', 'word.id = translation.word_id');
        $this->db->group_by('id');
        return (array)$this->db->get()->result();
    }

}