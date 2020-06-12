<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function insert_student($table,$data){			
			$this->db->insert($table,$data);
			//$this->db->last_query();
			
			return ($this->db->affected_rows() > 0 )? true : false;
	}


	public function update_student($table, $data,$where){
		//UPDATE `students` SET `name` = 'chirag patel', `contact` = '9909919284' WHERE `id` = '1'
		//`name` = 'chirag patel', `contact` = '9909919284' ($data)
		// `id` = '1' ($where)
		//students ($table)

		//method-1
		//$this->db->set($data)->where($where)->update($table);

		//method-2
		//$this->db->set($data);
		//$this->db->where($where);
		//$this->db->update($table);

		//method-3
		$this->db->update($table,$data,$where);

		//method-4
		//$this->db->where($where);
		//$this->db->update($table,$data);
		
		//echo $this->db->get_compiled_update();
		
	}


	public function delete_student($table, $where){
		//return true;
		return $this->db->delete($table,$where);
	}

	public function get_student_by_id($table,$data){
		$query=$this->db->get_where($table, $data);
		return $query->result(); //object
		
	}


	public function get_students($table){
		$query=$this->db->get($table);
		return $query->result(); //object
		
	}

	

}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */