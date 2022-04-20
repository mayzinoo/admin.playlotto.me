<?php

if(!defined('BASEPATH'))
exit('No direct script acceess allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
	parent::__construct();
	error_reporting(1);
	$this->load->model('Admin_model');
	
	}
function hello()
{
	echo "hello";
}
function index()
{

	$this->load->view('admin_login');	
}	
function lotto_setting(){
	$data['adminbal']=$this->db->query("SELECT * from users where user_type='sitemanager'")->row();
	$data['withdrawaldata']=$this->db->query("SELECT fundings.*,fundings.amount as requestamt,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is not NULL ORDER BY id DESC");
$data['depositdata']=$this->db->query("SELECT fundings.*,fundings.amount as amt,fundings.status as status,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is NULL ORDER BY fundings.id DESC");
	$data['lotto']=$this->db->get("lotto_setting")->row();
	$data['lottodata']=$this->db->get("lotto_setting");

	$data['content']='lotto_setting';
	$this->load->view('template',$data);
}
function deposit(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$data['depositdata']=$this->db->query("SELECT fundings.*,fundings.amount as amt,fundings.status as status,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is NULL ORDER BY fundings.id DESC");
	$data['withdrawaldata']=$this->db->query("SELECT fundings.*,fundings.amount as requestamt,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is not NULL ORDER BY id DESC");
	$data['content']='depositrequest_list';
	$this->load->view('template',$data);	
}	
function withdraw(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$data['withdrawaldata']=$this->db->query("SELECT fundings.*,fundings.amount as requestamt,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is not NULL ORDER BY id DESC");
	$data['depositdata']=$this->db->query("SELECT fundings.*,fundings.amount as amt,fundings.status as status,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is NULL ORDER BY fundings.id DESC");
	$data['content']='withdrawalrequest_list';
	$this->load->view('template',$data);	
}	
function security(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$data['withdrawaldata']=$this->db->query("SELECT fundings.*,fundings.amount as requestamt,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is not NULL ORDER BY id DESC");
$data['depositdata']=$this->db->query("SELECT fundings.*,fundings.amount as amt,fundings.status as status,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is NULL ORDER BY fundings.id DESC");
	$data['content']='security';
	$this->load->view('template',$data);
}	
function update_lottosetting()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=1;
	$ticketfee=$this->input->post("ticketfee");
	$winpayrate=$this->input->post("winpayrate");
	$playpayrate=$this->input->post("playpayrate");
	$jackpayrate=$this->input->post("jackpayrate");
	$gameduration=$this->input->post("gameduration");

	$data=array(
		"ticket_fee"=>$ticketfee,
		"win_payrate"=>$winpayrate,
		"play_payrate"=>$playpayrate,
		"jackpot_payrate"=>$jackpayrate,
		"game_duration"=>$gameduration
	);

	$this->db->where("id",$id);
	$this->db->update("lotto_setting",$data);

	redirect("Admin/lotto_setting/","refresh");
}		
/*login form*/
function admin_form()
{
	$this->load->view('admin_login', $data);
}

function admin_login()
{

	ob_start();		

	$username=$this->input->post("username");
	$password=$this->input->post("password");
	$this->db->select('*');
	$this->db->from('admin');
	$this->db->where(array('username'=>$username,'password'=>$password));
	$query=$this->db->get();

	if($query->num_rows()==1)
	{

		$user=$query->row();
		$userdata=array('username'=>$user->username,'password'=>$user->password);
		$this->session->set_userdata($userdata);

		redirect("Admin/deposit/","refresh");
	}
	else
	{
		$this->load->view('admin_login',$data);
		?> <script>
		arert("User name and password do not match")
		</script><?php
	}
}
function userpwd_change(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->uri->segment(3);
	echo $id;
	$data['userdata']=$this->db->get_where("users",array("id"=>$id))->row();
	$data['content']='userpwd_changeform';
	$this->load->view("template",$data);
}
function userpwd_update()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$username=$this->input->post("username");
	$pwd=$this->input->post("newpwd");
	
	$data=array(
		"password"=>sha1($pwd)
		);
	$this->db->where("id",$id);
	$this->db->update("users",$data);
	
$userdata=array(
        
        "userid"=>$id
        );
        $this->session->set_userdata($userdata);
	
	redirect('Admin/user_detail/'.$this->session->userdata("userid"));
}

function update_requestlotto()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$userid=$this->input->post("userid");
	$wowamt=$this->input->post("lotto_amt");
	$bal=$this->input->post("bal");
	$total=$bal+$wowamt;
	$data=array(
		"balance"=>$total
	);

	$this->db->where("id",$userid);
	$this->db->update("users",$data);
	$sta=array(
		"status"=>3,
		"update_lotto"=>$wowamt,
		"amount"=>$wowamt
		);
	$this->db->where("id",$id);
	$this->db->update("fundings",$sta);
	redirect("Admin/deposit");
}

function itenrate_insert()
{	
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$itenrate=$this->input->post("iten_amt");

	$data=array(		
		"iten_rate"=>$itenrate
	);
	$this->db->insert("itenrate",$data);
	redirect("Admin/deposit_rate");
}
function bankinfo()
{
	$data['bankinfolist']=$this->db->get('bankinfor');
	
	$data['content']='bankinfo_create';
	$this->load->view('template',$data);
}
function bankinfo_insert()
{
	$bankname=$this->input->post("bankname");
	$ownername=$this->input->post("name");
	$acctno=$this->input->post("acctno");

	$data=array(
		"acctowner"=>$ownername,
		"acctno"=>$acctno,
		"bankname"=>$bankname
	);
	$this->db->insert("bankinfor",$data);
	redirect("Admin/bankinfo");
}
function bankinfo_editform()
{
	$id=$this->uri->segment(3);
	
	$data['bankinfo']=$this->db->get_where("bankinfor",array("id"=>$id))->row();
	$data['content']='bankinfo_edit';
	$this->load->view("template",$data);
}
function bankinfo_update()
{
	$id=$this->input->post("id");
	$bankname=$this->input->post("bankname");
	$ownername=$this->input->post("name");
	$acctno=$this->input->post("acctno");
	$currency_type=$this->input->post("currency_type");
	$data=array(
		"acctowner"=>$ownername,
		"acctno"=>$acctno,
		"bankname"=>$bankname,
		"currency_type"=>$currency_type
		);
	$this->db->where("id",$id);
	$this->db->update("bankinfor",$data);
	redirect("Admin/bankinfo");
}
function editlotto(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->uri->segment(3);
	$data['userdata']=$this->db->query("Select * from users WHERE id=$id")->row();
	$data['content']='lottoinfo';
	$this->load->view('template',$data);
}
function deposit_request()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$data['depositrequest']=$this->db->query("SELECT fundings.*,fundings.amount as amt,fundings.status as status,users.balance as bal,users.username as username FROM fundings LEFT JOIN users ON users.id=fundings.user_id WHERE withdrawal_id is NULL ORDER BY fundings.id DESC");
//	$data['depositrequest']=$this->Admin_model->depositrequest("fundings");
	$data['content']='depositrequest_list';
	$this->load->view("template",$data);
}
function depositrequest_confirm()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$userid=$this->input->post("userid");
	$wow=$this->input->post("wow");
	$bal=$this->input->post("bal");
	$total=$wow+$bal;
		
	$data=array(
		"balance"=>$total
		);
	$this->db->where("id",$userid);
	$this->db->update("users",$data);
	$fun=array(
		"status"=>1
		);
	$this->db->where("id",$id);
	$this->db->update("fundings",$fun);
	echo $total;	
}
function depositrequest_cancel()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$userid=$this->input->post("userid");
	$wow=$this->input->post("wow");
	$bal=$this->input->post("bal");
	
	$data=array(
		"status"=>2
		);
	$this->db->where("id",$id);
	$this->db->update("fundings",$data);
	
}
function withdrawalinfo()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$query=$this->db->query("SELECT * from fundings WHERE id=$id ")->row_array();
	$result=json_encode($query);

	echo $result;
}
function withdrawalrequest_confirm()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$data=array(
		"status"=>1
		);
	$this->db->where("id",$id);
	$this->db->update("fundings",$data);
}
function withdrawalrequest_cancel()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$userid=$this->input->post("userid");
	$wow=$this->input->post("wow");
	$bal=$this->input->post("bal");
	$total=$wow+$bal;
	$data=array(
		"balance"=>$total
		);
	
	$this->db->where("id",$userid);
	$this->db->update("users",$data);
	$sta=array(
		"status"=>2
		);
	$this->db->where("id",$id);
	$this->db->update("fundings",$sta);
}
function depositinfo()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	$id=$this->input->post("id");
	$query=$this->db->query("SELECT * FROM fundings where id=$id")->row_array();
	$result=json_encode($query);
	echo $result;
}

function admin_profile(){
	if($this->session->userdata("username") && $this->session->userdata("password"))
	{
	$data["admindata"]=$this->db->get("admin")->row();

	$data["content"]="admin_profile";
	$this->load->view("template",$data);
	}
	else{
			
		$this->load->view('admin_login');
	}
}
function setting(){
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	if($this->session->userdata("username") && $this->session->userdata("password"))
	{
	$data["admindata"]=$this->db->get("admin");
	$data["content"]="setting";
	$this->load->view("template",$data);
	}
	else{
			
		$this->load->view('admin_login');
	}
}
function update_admin()
{
	$data['adminbal']=$this->db->query("Select * from users where user_type='sitemanager'")->row();
	// $id=$this->session->userdata('id');
    $oldpwd=$this->input->post('oldpwd');
	$newpwd=$this->input->post('newpwd');
	$data=array(
	    
	    "password" =>$newpwd);
	// $this->db->where('id',$id);
	$this->db->update("admin",$data);
	session_destroy();
	redirect('/',"refresh");
}
/*logout*/
function logout()
{
	session_destroy();
	redirect('/',"refresh");
}
/**/
}
?>
