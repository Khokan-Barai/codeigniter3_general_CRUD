<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{

    public function index(){

        $this->load->model('frontend/EmployeeModel', 'emp');
        $data['employees'] = $this->emp->getAllEmployees();

        $data['title'] = 'All Employee list';

        $this->load->view('template/header', $data);
        $this->load->view('frontend/employee', $data);
        $this->load->view('template/footer');
    }

    public function create(){
        $data['title'] = 'Add New Employee';

        $this->load->view('template/header', $data);
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }

    public function store(){

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
    
        if( $this->form_validation->run()){
            $data = [
                'fname' => $this->input->post('first_name'),
                'lname' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
            ];
    
            // var_dump($data);
            $this->load->model('frontend/EmployeeModel', 'emp');
            $this->emp->insertEmployees($data);

            $this->session->set_flashdata('status', 'Employee Added Successfully!');

            redirect(base_url('employee'));
        }else{
            $this->create();
            // redirect(base_url('employee/add'));
        }
    }

    public function edit($id){
        $this->load->model('frontend/EmployeeModel', 'emp');
        $data['employee'] = $this->emp->getEmployees($id);
        $data['title'] = 'Edit Employee';

        $this->load->view('template/header', $data);
        $this->load->view('frontend/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id){
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
    
        if( $this->form_validation->run()):
        $data = [
            'fname' => $this->input->post('first_name'),
            'lname' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        ];

        $this->load->model('frontend/EmployeeModel', 'emp');
        $this->emp->updateEmployees($data, $id);

        $this->session->set_flashdata('status', 'Employee Data Updated Successfully!');

        redirect(base_url('employee'));
    else:
        $this->edit($id);
    endif;
    }

    public function delete($id){
        $this->load->model('frontend/EmployeeModel', 'emp');
        $this->emp->deleteEmployee($id);

        $this->session->set_flashdata('status', 'Employee Deleted Successfully!');

        redirect(base_url('employee'));
    }

}