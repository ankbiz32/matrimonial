<?php
class GetModel extends CI_Model{

    public function getInfo($table, $lim=null)
    {
        return $this->db->limit($lim)->get($table)->result();
    }

    public function getPeople()
    {
        $people=$this->db->select('u.fname, u.lname, u.email, ui.*')
                ->from('users u')
                ->join('user_info ui', 'u.id = ui.user_id', 'LEFT')
                ->where('u.status','1')
                ->where('u.role','user')
                ->order_by('u.id','desc')
                ->get()
                ->result();
        return $people;
    }

    public function getInfoById($id, $table)
    {
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    public function getInfoCondsId($table,$conds)
    {
        $this->db->where($conds);
        return $this->db->get($table)->row();
    }

    public function getInfoConds($table,$conds)
    {
        $this->db->where($conds);
        return $this->db->get($table)->result();
    }

}
?>