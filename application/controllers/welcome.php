<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this -> load -> model('comment_model');
		$this -> load -> model('admin_model');
		
	}
	
	public function index()
	{
		$rs = $this -> admin_model -> get_allblogs();
		$users = $this -> admin_model -> get_user();
		$data = array(
			"blogs" => $rs,
			'users' => $users
		);	
		$this-> load ->view('index',$data);
	}
	public function comment(){
		//1.接收数据
		$Name = $this -> input -> post('contactName');
		$Email = $this -> input -> post('contactEmail');
		$Number = $this -> input -> post('contactNumber');
		$Message = $this -> input -> post('contactMessage');
		if($Name == '' || $Email == '' || $Message == ''){
			echo "<script>alert('请检查是否输入正确');location.href='../welcome/index'</script>";
			}else{
		//2.访问数据库
			$data = array(
			'NAME' => $Name,
			'EMAIL' => $Email,
			'PHONENUMBER' => $Number,		
			'MESSAGE' => $Message
			);
			
			$result = $this -> comment_model -> save($data);
			if($result){
			// echo 'success';
			echo "<script>alert('提交成功');location.href='../welcome/index'</script>";
			}else{
			echo "<script>alert('提交失败');location.href='../welcome/index'</script>";
			$this -> load -> view(index);}
		}
	}
}	
