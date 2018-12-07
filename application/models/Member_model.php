<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_model extends CI_Model {
    public function __construct(){
        
        /*
        http://codeigniter-kr.org/user_guide_2.1.0/general/controllers.html#constructors
        
        컨트롤러에서 생성자를 사용하고자 한다면 생성자 아래 코드가 있어야함
        그렇지 않으면 내가 만든 생성자가 부모 controller의 생성자를 재정의
        하기 때문.
        반드시 line17처럼 수동으로 호출 해야함.
        
        자식 생성자 내에서 parent ::__construct(); 호출
        */
        parent ::__construct();
        //생성자에 코드 기능 추가
    
    }
    
    private $members = array(
        '1' => 'Edward',
        '2' => 'Alex',
        '3' => 'John'
    );
    
    public function getMembers(){
        return $this->members;    
    }
}

