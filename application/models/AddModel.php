<?php
class AddModel extends CI_Model{

    public function saveInfo($table,$d)
    {
        if(!empty($d)){
            $this->db->insert($table,$d);
            return $this->db->insert_id();
        }
		return false;
    }

    public function create_user($data) {
        if(!empty($data)){
            $this->db->insert('users',$data);
            return $this->db->insert_id();
        }
		return false;
    }

    public function create_user_profile($data) {
        if(!empty($data)){
            $this->db->insert('user_info',$data);
            return $this->db->insert_id();
        }
		return false;
    }



}