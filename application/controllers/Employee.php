<?php
class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel', 'EmpModel');
    }
    public function index()
    {
        $view_bag['title'] = 'Employee Dashboard';
        $view_bag['year'] = date('Y');
        $this->load->view('templates/header_view', $view_bag);
        echo "<h1>Dashboard</h1>";
        $this->load->view('templates/footer_view', $view_bag);
    }
    public function add()
    {   
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        
        $view_bag['title'] = 'Add Employee';
        $view_bag['year'] = date('Y');
        
        //form rules
        
        $config = array(
            array(
                'field'=>'name',
                'label'=>'Name',
                'rules'=>array('required','min_length[8]')
            ),
            array(
                'field'=>'address',
                'label'=>'Address',
                'rules'=>array('required')
            ),
            array(
                'field'=>'email',
                'label'=>'Email Address',
                'rules'=>array('required','valid_email')
            )
        );
        $this->form_validation->set_rules($config);


        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header_view', $view_bag);
            $this->load->view('pages/addemployee');
            $this->load->view('templates/footer_view', $view_bag);
        }
        else{
            $emp_data = [
                "name" => $name,
                "address" => $address,
                "email" => $email,
            ];
            $this->EmpModel->insert($emp_data);
            $this->load->view('forms/register_success');
        } 
    }
    public function addemployee()
    {
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
        

        

        // $result = $this->EmpModel->insert($emp_data);
        // echo $result;
    }
}
