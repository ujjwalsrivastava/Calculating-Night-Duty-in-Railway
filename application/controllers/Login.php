<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('id'))
        {
            return redirect('Crore/record');
            
        }
        $this->load->model('Login_conn');
    }
    

    public function mylogin()
    {
        $this->load->view('login_view');
    }
    public function login_validation()
    {
        $value=$this->input->post(array('uname', 'psw'),TRUE);
        
        
        
        if ($this->form_validation->run('login') == FALSE)
            {
                $this->load->view('login_view');        
            }
        else
            {
                $data= $this->Login_conn->verification($value);
                if(password_verify($value['psw'],$data->psw))
                {
                    $session = array(
                        'username'  => $value['uname'],
                        'id'     => $data->id,
                        'logged_in' => TRUE
                );
                
                    $this->session->set_userdata($session);
                    $data11=$this->Login_conn->rview();   
                    $this->load->view('view2',array('data'=>$data11));  
                }
                else
                {

                    $data12 = array('login_err'=>'User name and password does not match');
                    $this->load->view('login_view',$data12);
                }

            }   
    }

}

/* End of file Login.php */

?>