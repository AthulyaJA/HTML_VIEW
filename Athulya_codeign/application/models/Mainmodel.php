<?php
class Mainmodel extends CI_model
{
	
 

public function addone()
  {
    $this->db->select('*');
   // $qury=$this->db->where('loginid',$id);
  $this->db->join('teach_tb','teach_tb.loginid=notification.loginid','inner');
    $qry=$this->db->get("notification");
    return $qry;
  }
public function deletedetail($id)
{ 
        $this->db->where("loginid",$id);
        $this->db->delete("notification");
}
}

?>