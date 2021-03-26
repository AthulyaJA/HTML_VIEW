<?php
class Mainojt extends CI_model{

    
public function login_insert($a)
{

$this->db->insert('ojt_login',$a);

}


}