<?php
class EditModel extends CI_Model{

    public function updateInfo($data, $key, $id, $table)
    {
        $this->db->where($key, $id);
        $wpflag = $this->db->update($table , $data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

}
?>
     