<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	//set action
	public $action="";

	//set arguments
	public $args="";
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model("Student_model",'stud_m');
		$this->load->view('header');

		//get action and store it
		$this->action=$this->uri->segment(2);

		//get arguments and store it
		$this->args=$this->uri->segment(3);
	}

	public function index()
	{
		$this->action="display";
		$this->display();
	}

	public function add()
	{
		$posted_data=$this->input->post();
		if (isset($posted_data['btn_add'])) {
			$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
			$this->form_validation->set_rules('txt_stud_name', 'student name', 'trim|required|min_length[2]|max_length[12]|alpha|is_unique[students.name]',array(
				"required"=>"You have not provided %s",
				"is_unique"=>"This %s already exists"

			));
			$this->form_validation->set_rules('txt_contact', 'contact no', 'trim|required|min_length[2]|max_length[12]|numeric');
			if ($this->form_validation->run() == TRUE) {

				$data['name']=$posted_data['txt_stud_name'];
				$data['contact']=$posted_data['txt_contact'];

				//$stud_m->insert_student("students",$data);
				if($this->stud_m->insert_student("students",$data)){
					redirect('students/display');
				}
				else{
					$this->load->view('students_add');
				}
				# code...
			} 
			else {
				$this->load->view('students_add');
			}

			

		}
		else{
			$this->load->view('students_add');
		}
	}

	public function edit()
	{
		$posted_data=$this->input->post();
		if (isset($posted_data['btn_update'])) {

			$data['name']=$posted_data['txt_stud_name'];
			$data['contact']=$posted_data['txt_contact'];
			$where['id']=$posted_data['stud_id'];

			//$where="id={$posted_data['stud_id']}";// id=10


			if($this->stud_m->update_student("students",$data,$where)){
				redirect('students/display');
			}
			else{
				$this->load->view('students_add');
			}
		}
		//print_r($posted_data);
		$id=$this->args;
		if(isset($id)){
			$data['id']=$id;
			if($this->stud_m->get_student_by_id("students", $data)){
				$data['student_info']=$this->stud_m->get_student_by_id("students", $data);
				$this->load->view('student_update', $data);
			}
			else{

			}
		}	
		$this->display();
	}

	public function delete()
	{
		$id=$this->args;
		if(isset($id)){
			$where['id']=$id;
			//$where= array("id"=>$id);
			if($this->stud_m->delete_student("students", $where)){
		//		$this->display();
			}
			else{

			}
		}
		$this->display();
	}
	public function select()
	{
		
	}

	public function display()
	{
		//echo $this->action;
		if($this->action=="edit"){
			$data['mode']=$this->action;	
		}
		else if($this->action=="delete"){
			$data['mode']=$this->action;	
		}
		else{
			$this->action="display";
			$data['mode']=$this->action;	
		}
		$data['students_data']=$this->stud_m->get_students("students");
		$this->load->view('students_view',$data);	
	}

}

/* End of file Students.php */
/* Location: ./application/controllers/Students.php */