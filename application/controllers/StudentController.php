<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{
    public $StudentModel;

    public function index(){
        $this->load->model('StudentModel');
        $data['students'] = $this->StudentModel->getAllStudent();
        $data['title'] = 'All Student Data';

        $this->load->view('index', $data);
    }

    public function findByCondition(){
        $this->load->model('StudentModel');
        $data['students'] = $this->StudentModel->getStudent();

        $data['title'] = 'Student Controller Page';

        $this->load->view('index', $data);
    }

    public function store(){
        $this->load->model('StudentModel');

        echo $this->StudentModel->insertStudent();
    }

    public function update(){
        $this->load->model('StudentModel');

        echo $this->StudentModel->updateStudent();
    }

}