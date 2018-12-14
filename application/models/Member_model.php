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
        $this->test = $this->load->database('test',true);
        $this->test01 = $this->load->database('test01',true);
        //생성자에 코드 기능 추가
        //test와 test01 설정에 맞추어 데이터베이스 로드, test와 test01 변수에 저장      
    
    }
    
/*    
    private $members = array(
        '1' => 'Edward',
        '2' => 'Alex',
        '3' => 'John'
    );
*/
 
    
/* public function GetMembers()
    {
        //line35 database 로드 - databaseSetting 파일에서 active_group에 설정된 데베 정보연결
        $this->load->database();
        //database에서 쿼리를 보내고 그 결과를 객체로 변환해주는 코드
        $result = $this->db->query('SELECT id, name FROM members')->result();
        //자동으로 데베 연결을 끊어주나, 아래 코드는 수동을 끊기
        $this->db->close();
 
        return $result;
    }
    */
    
    public function GetMembersBytest(){
        
        //데이터베이스에 쿼리를 보내고 그 결과를 객체(object)로 반환 해주는 코드.
        $result = $this->test->query('SELECT id, name FROM members')->result();
        
        $this->test->close();
        
        return $result;    
    }
    
    
    public function GetMembersBytest01(){
        
        $result = $this->test01->query('SELECT id, name FROM members')->result();
        
        $this->test01->close();
    
        return $result;
    }
}

