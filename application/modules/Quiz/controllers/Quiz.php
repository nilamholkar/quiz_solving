<?php
class Quiz extends MX_Controller
{
 function __construct()
  {
	parent ::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Quiz_model');
  }
   public function index()
    {
    	$this->load->view('Login');
      if($this->input->post('save'))
      {
        $a=$this->input->post('email');
        $b=$this->input->post('name');
        $success=$this->Quiz_model->saverecords($a,$b);
        $this->session->set_userdata('user', $a); /*create session and store value of session*/
        echo "<script>window.location='http://localhost/quiz/index.php/Quiz/index11'</script>";
      }
    }
     public function DisplayLoginData()
        {
            if (isset($this->session->userdata['user']))
            {
                $a  = $this->session->userdata['user'];
                $data5["user_logindata"] = $this->Quiz_model->fetchuserlogindata($a);
                $this->load->view('question',$data5);
            }
            else
            {
                echo "<script>alert('Error while login..!!');window.location='http://localhost/quiz/'</script>";
            }
        }
     public function index11()
    {
       $a  = $this->session->userdata['user'];
       $data5["user_logindata"] = $this->Quiz_model->fetchuserlogindata($a);
       $this->load->view('question',$data5);
       if($this->input->post('save'))
        {
            $u=$this->input->post('optradio5');
            $b=$this->input->post('optradio6');
            $c=$this->input->post('optradio7');
            $d=$this->input->post('optradio8');
            $e=$this->input->post('optradio9');
            $f=$this->input->post('optradio1');
            $g=$this->input->post('optradio2');
            $h=$this->input->post('optradio3');
            $i=$this->input->post('optradio4');
            $j=$this->input->post('optradio51');
            $k=$this->input->post('optradio52');
            $l=$this->input->post('optradio53');
            $m=$this->input->post('optradio54');
            $n=$this->input->post('optradio55');
            $o=$this->input->post('optradio56');
            $p=$this->input->post('optradio57');
            $q=$this->input->post('optradio58');
            $r=$this->input->post('optradio59');
            $s=$this->input->post('optradio');
            $t=$this->input->post('optradio11');
            $count=0;

            $success=$this->Quiz_model->saverecords1($u,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$a);
            if($u==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }
            if($b==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($c==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($d==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($e==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($f==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($g==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($h==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($i==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($j==2)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($k==2)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($l==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($m==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($n==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($o==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($p==3)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($q==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }
            if($r==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }
            if($s==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }if($t==4)
            {
              $count=$count+1;
            }
            else
            {
              $count=$count+0;
            }
            $this->db->query("UPDATE reg SET grade='$count' WHERE email='$a'");
            
            if($count>=16)
            {
            
              echo "<script>alert('Well Done! You Pass the Quiz');window.location='http://localhost/quiz/'</script>";
            }
            else
            {
              echo "<script>alert('All the Best for the Next time');window.location='http://localhost/quiz/'</script>";
            
            }

       
      }

    }
   
}
?>
