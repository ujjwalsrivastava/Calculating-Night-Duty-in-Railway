<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('id'))
        {
            return redirect('Login/mylogin');
        }
        $this->load->model('Login_conn');
    }
    

    public function index()
    {   $data=$this->Login_conn->sview();
        $this->load->view('signupview',array('data'=>$data));
    }

    public function sign_up()
    {
        $value=$this->input->post(array('user_id', 'psw','cpsw'),TRUE);
        
        
        
            if ($this->form_validation->run('signup') == FALSE)
            {
                $data=$this->Login_conn->sview();   
                $this->load->view('signupview',array('data'=>$data));        
            }
        else
            {
                $pass =   password_hash($value['psw'], PASSWORD_BCRYPT,array('cost'=> 11));
                $data = array('user_id'=>$value['user_id'],'psw'=>$pass);
                $this->Login_conn->signup($data); 
                $data=$this->Login_conn->sview();
                $this->load->view('signupview',array('data'=>$data));
            }
}
    public function update($id)
        {
            $this->load->view('updateview',array(('id')=>$id));
        }
    public function delete($id)
    {
        $this->Login_conn->delete1($id);
        return redirect('Signup','refresh');
    }
}

