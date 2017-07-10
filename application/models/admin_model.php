<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
	public function get_by_name_pwd($admin_name, $admin_pwd) {
        return $this -> db -> get_where('t_admin', array('admin_name'=>$admin_name, 'admin_pwd'=>$admin_pwd))-> row();
    	}
    public function get_allcomments(){
    		$this -> db -> select('comment.*');
			$this -> db -> from('t_comment comment');
			$this -> db -> order_by("comment.add_time", "desc");
			return $this -> db -> get() -> result();
    }
    public function get_user(){
    		$this -> db -> select('users.*');
			$this -> db -> from('t_users users');
			return $this -> db -> get() -> result();
    }
    public function get_allblogs($offset=0){
    		$this -> db -> select('blog.*');
			$this -> db -> from('t_blog blog');
			$this -> db -> order_by("blog.add_time", "desc");
			$this -> db -> limit(8,$offset);
			return $this -> db -> get() -> result();
    }
    public function get_admin(){
    		$this -> db -> select('users.*');
			$this -> db -> from('t_users users');
			return $this -> db -> get() -> result();
    }
    public function delete($comment_id){
			$this -> db -> delete('t_comment', array('COMMENT_ID' => $comment_id));
			if($this -> db -> affected_rows() > 0){
				return TRUE;
			}
			return FALSE;
		}
	public function get_by_page($offset=0){
    		$this -> db -> order_by('add_time','desc');
			$this -> db -> limit(100,$offset);
			return $this -> db -> get('t_comment') -> result();
    }
    public function deleteblog($blog_id){
			$this -> db -> delete('t_blog', array('BLOG_ID' => $blog_id));
			if($this -> db -> affected_rows() > 0){
				return TRUE;
			}
			return FALSE;
		}
	public function get_by_blogpage($offset=0){
			$this -> db -> select('blog.*, catalog.CATALOG_NAME');
			$this -> db -> from('t_blog blog');
			$this -> db -> join("t_catalog catalog", 'blog.CATALOG_ID=catalog.CATALOG_ID');
			$this -> db -> order_by("blog.add_time", "desc");
			$this -> db -> limit(100,$offset);
			return $this -> db -> get() -> result();
    }
    public function update_by_user_id($data,$User_id){
		$this-> db ->where('USER_ID', $User_id);
		$this-> db ->update('t_users', $data); 
		if($this -> db -> affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function save_blogs($data){
		$this -> db -> insert('t_blog',$data);
		if($this -> db -> affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}