
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crore extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('id'))
        {
            return redirect('Login/mylogin');
        }
        $this->load->model('Login_conn');
    }
    public function record()
    {
        
    $value=$this->input->post(array('tno', 'date','from','to','dept','arrt','ojj','kms','remark'),TRUE);
        
        if ($this->form_validation->run('record') == FALSE)
            {
                $data=$this->Login_conn->rview();   
                $this->load->view('view2',array('data'=>$data));  
            }
        else
            {
                $this->Login_conn->input($value);
                $data=$this->Login_conn->rview();   
                $this->load->view('view2',array('data'=>$data));
            }
    }
    // public function recordview()
    // {
    // $data=$this->Login_conn->rview();   
    // $this->load->view('rview',array('data'=>$data));
    
    // }
    public function delete1($id)
    {
        $this->Login_conn->delete($id);
        return redirect('Crore/recordview','refresh');
    }
    public function delete2($id)
    {
        $this->Login_conn->delete($id);
        return redirect('Crore/record','refresh');
    }
    public function logout()
    {
    $this->session->sess_destroy();
    return redirect('Login/mylogin','refresh');
    }
    public function report()
    {
        $this->load->view('rview');
        $dat=$this->input->post(array('dfrom', 'dto'),TRUE);
        $new=$this->Login_conn->acquiring($dat);
        $this->load->view('rview2',array('new'=>$new,'dat'=>$dat));    
    }
    public function distentry()
    {
        $this->load->view('dview');
        $dist=$this->input->post(array('stat','kmm'),TRUE);
        if(isset($dist)){
        $this->Login_conn->distance($dist);}
    }
    
}
?>
