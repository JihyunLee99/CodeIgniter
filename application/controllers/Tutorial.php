<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tutorial extends CI_Controller {

    public function index(){
        $data = array(
            'title' => 'Tutorial :: index',
            'content' => 'This is the first index page.'
        );
        
        $this->load->view('index', $data);
        
    }
    
    public function second(){
        $data = array(
            'title' => 'Tutorial :: second',
            'content' => 'This is the Hello Second'
            
        );
        
        $this->load->view('second', $data);
    }
    
    
    public function members(){
        $this->load->model('Member_model');
        
        $data['members'] = $this->Member_model->GetMembers();
        
        $this->load->view('Tutorial/members', $data);
    }
    
}



 /*
  public function index()
  {
    $this->load->view('index');
  }
 
  public function second()
  {
    $this->load->view('second');
  }*/