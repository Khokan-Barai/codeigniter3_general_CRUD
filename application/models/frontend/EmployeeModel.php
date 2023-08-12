<?php


class EmployeeModel extends CI_Model{

    public function getAllEmployees(){
        $query = $this->db->get('employees');
        return $query->result();
    }

    public function insertEmployees($data){
        return $this->db->insert('employees', $data);
    }

    public function  getEmployees($id){
        $query = $this->db->get_where('employees', ['id' => $id]);
        return $query->row();
    }

    public function updateEmployees($data, $id){
        return $this->db->update('employees', $data, ['id' => $id]);
    }

    public function deleteEmployee($id){
        return $this->db->delete('employees', ['id' => $id]);
    }
}