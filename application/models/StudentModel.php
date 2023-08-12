<?php

class StudentModel extends CI_Model{

    public function  getAllStudent(){
        $query = $this->db->get('students');
        return $query->result();
    }
    
    public function getStudent(){
        // $query = $this->db->get('students');
        // return $query->result();

        $query = $this->db->select('name, email, phone, address')
                ->from('students')
                ->where('address', 'Barishal')
                ->get();
        return $query->result();
    }

    public function insertStudent(){
        $data = array(
            'name' => 'aindya',
            'email' => 'aninday@gmail.com',
            'phone' => '01725365987',
            'address' => 'Chottogrm'
        );

        $this->db->insert('students', $data);

        return $this->db->insert_id();
    }

    public function updateStudent(){
        $data = array(
            'name' => 'Anindya'
        );

        $this->db->where('id', '4');
        $this->db->update('students', $data);

        return $this->db->affected_rows();

    }

    


}

