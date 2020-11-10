<?php
class Quiz_Model extends CI_Model
{
	public function saverecords($email,$name)
	{
	$query="insert into reg values('','$email','$name','')";
	$this->db->query($query);
	}
	 public function fetchuserlogindata($a)
        {
            $this->db->select('*');
            $this->db->from('reg');
            $this->db->where('email', $a);
            $query = $this->db->get();
            return $query->row();
            
        }
     public function saverecords1($u,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$a)
     {
     	$query="insert into quiz values('','$u','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$a')";
		$this->db->query($query);
     }

}
?>