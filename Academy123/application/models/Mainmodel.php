<?php
class Mainmodel extends CI_model
{

  //student registarion/updation
	public function reg_access($a,$b) 
  {
      $this->db->insert("tb_login",$b);
      $loginid=$this->db->insert_id();
      $a['loginid']=$loginid;
      $this->db->insert("tb_student",$a);
      
  } 
  public function encpass1($pass)
  {
    return password_hash($pass,PASSWORD_BCRYPT);
  }
   public function view()
  {
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_student.loginid','inner');
    $qry=$this->db->get("tb_student");
    return $qry;
  }


  public function updatedetails1($b,$c,$id)
             {
              $this->db->select("*");
               $qry=$this->db->where("tb_student.loginid",$id);
               $qry=$this->db->join('tb_login','tb_login.id=tb_student.loginid','inner');
               $qry=$this->db->update("tb_student",$b);
               $qry=$this->db->where("tb_login.id",$id);
                $qry=$this->db->update("tb_login",$c);
                return $qry;
                

             }

  //leena trainer
/*public function tbtreg($a,$b){
        $this->db->insert("tb_login",$b);
        $loginid = $this->db->insert_id();
        $a['loginid']=$loginid;
        $this->db->insert("tb_trainer",$a);
    }
    public function encpass($pass){
        return password_hash($pass,PASSWORD_BCRYPT);
    }

 
//office staff mainmodel
 
public function register($a)
{
    $this->db->insert("tb_staff",$a);
 
}

public function encpass($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }

public function newtb($a,$b)
{
    $this->db->insert("tb_login",$b);
    $loginid=$this->db->insert_id();
    $a['loginid']=$loginid;
    $this->db->insert("tb_staff",$a);
}
 
public function reg1()
          {
              $this->db->select('*');
              $this->db->join('tb_login','tb_login.id=tb_staff.loginid','inner');
              $cab=$this->db->get("tb_staff");
               return $cab;
          }

             public function tbtreg($a,$b){
        $this->db->insert("tb_login",$b);
        $loginid = $this->db->insert_id();
        $a['loginid']=$loginid;
        $this->db->insert("tb_trainer",$a);
    }
    public function encpass($pass){
        return password_hash($pass,PASSWORD_BCRYPT);
    }*/

    public function notiteach($a)
{
$this->db->insert("tb_complaint",$a);

}
public function addno()
  {
    $this->db->select('*');
    $this->db->join('tb_student','tb_student.id=tb_complaint.loginid','inner');
    $qry=$this->db->get("tb_complaint");
    return $qry;
  }

  public function addone($id)
  {
    $this->db->select('*');
  
    $qry=$this->db->get("tb_complaint");
    return $qry;
  }
}
 
