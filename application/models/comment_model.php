<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model{
	public function save($data){
		$this -> db -> insert('t_comment',$data);
		if($this -> db -> affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}