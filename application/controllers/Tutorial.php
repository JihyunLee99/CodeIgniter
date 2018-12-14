<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tutorial extends CI_Controller {


     /*
      public function index()
      {
        $this->load->view('index');
      }

      public function second()
      {
        $this->load->view('second');
      }*/

    
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
        $this->load->model('member_model');
        
        $data['members'] = $this->Member_model->GetMembers();
        
        $this->load->view('Tutorial/members', $data);
    }


    public function members_test(){
        $this->load->model('Tutorial/member_model');
        
        $data['members'] = $this->Member_model->GetMembersBytest();
        
        $this->load->view('Tutorial/members',$data);
    }


    public function members_test01(){
        $this->load->model('Tutorial/member_model');
        
        $data['members'] = $this->Member_model->GetMembersBytest01();
        
        $this->load->view('Tutorial/members', $data);
    }


}