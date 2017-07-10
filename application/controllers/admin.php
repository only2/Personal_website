<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> model('admin_model');
       
    }

    public function login() {
        $this-> load ->view('admin-login');
    }
    public function index() {
        $this-> load ->view('admin-index');
    }
    public function ad_check_login() {
       //接受数据
        $admin_name = $this -> input -> post('ad_name');
        $admin_pwd  = $this -> input -> post('ad_password');
       //访问数据库
        $this -> load -> model('admin_model');
        $admin = $this -> admin_model ->get_by_name_pwd($admin_name,$admin_pwd);
       //跳转
        if($admin){
            redirect('admin/index');
                }else{
            $this -> load -> view('admin-login');
                    }
        }
    public function get_allcomments(){
        $comments = $this -> admin_model -> get_allcomments();
        $data = array(
                "comments" => $comments
                );
        $this->load->view('admin-comment', $data);
        }

    public function list_comment(){
        $this -> load -> model('admin_model');
        $comments = $this -> admin_model -> get_by_page();
        $data = array(
            "comments" => $comments
            );
        $this -> load -> view('admin-comment',$data);

        }
     public function list_blog(){
        $this -> load -> model('admin_model');
        $blogs = $this -> admin_model -> get_by_blogpage();
        $data = array(
            "blogs" => $blogs
            );
        $this -> load -> view('admin-blog',$data);

        }
    public function remove(){
        $comment_id = $this -> input -> get('commentid');
        $result = $this -> admin_model -> delete($comment_id);
            if($result){
                echo 'success'; 
            }else{
                echo 'fail';
            }
        }
    public function get_more(){
        $offset = $this -> input ->get('offset');
        $comments = $this -> admin_model -> get_by_page($offset);
        echo json_encode($comments);
    }
    public function removeblog(){
        $blog_id = $this -> input -> get('blog_id');
        $result = $this -> admin_model -> deleteblog($blog_id);
            if($result){
                echo 'success'; 
            }else{
                echo 'fail';
            }
        }
     public function get_moreblog(){
        $offset = $this -> input ->get('offset');
        $comments = $this -> admin_model -> get_by_blogpage($offset);
        echo json_encode($comments);
    }
    public function admin_me(){
        $this -> load -> model('admin_model');
        $users = $this -> admin_model -> get_admin();
        $data = array(
            "users" => $users
            );
        $this -> load -> view('admin-user',$data);

    }
    public function update_user(){
       //1.接收数据
        $User_id = $this -> input -> post('User_id');
        $Name = $this -> input -> post('Name');
        $Email = $this -> input -> post('Email');
        $Phonenumber = $this -> input -> post('Phonenumber');
        $Address = $this -> input -> post('Address');
        $Introduce = $this -> input -> post('Introduce');
        if($Name == '' || $Email == '' || $Phonenumber == ''){
            echo "<script>alert('请检查是否输入正确');location.href='../admin/update_user'</script>";
            }else{
        //2.访问数据库
            $data = array(
            'USER_ID' => $User_id,
            'NAME' => $Name,
            'EMAIL' => $Email,
            'TELEPHONE' => $Phonenumber,       
            'ADDRESS' => $Address,
            'INTRODUCE' => $Introduce
            );
            
            $result = $this -> admin_model -> update_by_user_id($data,$User_id); 
            if($result){
            // echo 'success';
            echo "<script>alert('修改成功');location.href='../admin/index'</script>";
            }else{
            echo "<script>alert('修改失败');location.href='../admin/admin_me'</script>";
           }
    }

}
    public function Toadd_blog(){
        $this -> load -> view('admin-addblog');
    }

    public function add_blogs(){
        //1.接收数据
        $Title = $this -> input -> post('Title');
        $Catalog = $this -> input -> post('Catalog');
        $Writer = $this -> input -> post('Writer');
        $Outline = $this -> input -> post('Outline');
        $Bg_image = $this -> input -> post('Bg_image');
        $Bigbg_image = $this -> input -> post('Bigbg_image');
        $Content = $this -> input -> post('Content');
        if($Title == '' || $Writer == '' || $Content == ''){
            echo "<script>alert('请检查是否输入正确');location.href='../welcome/index'</script>";
            }else{
        //2.访问数据库
            $data = array(
            'TITLE' => $Title,
            'CATALOG_ID' => $Catalog,
            'WRITER' => $Writer,       
            'OUTLINE' => $Outline,
            'BG_IMAGE' => $Bg_image,
            'BIGBG_IMAGE' => $Bigbg_image
            );
            
            $result = $this -> admin_model -> save_blogs($data);
            if($result){
            // echo 'success';
            echo "<script>alert('提交成功');location.href='../admin/index'</script>";
            }else{
            echo "<script>alert('提交失败');location.href='../admin/Toadd_blog'</script>";
            $this -> load -> view(index);}
        }
    }
  
}