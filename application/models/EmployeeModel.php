<?php 
class EmployeeModel extends CI_Model{
    private $table_name = 'employee';

    public function insert($data){
        $this->db->insert($this->table_name,$data);
        return $this->db->insert_id();
    }
    public function update($data,$id){
        $this->db->set($data)->where('id',$id);
        $this->db->update($this->table_name);
    }
    public function getEmployees(){
        return $this->db->get($this->table_name)->result_array();
    }
    public function getEmployeeById($id){
        return $this->db->get_where($this->table_name,['id'=>$id]);
    }
}

?>