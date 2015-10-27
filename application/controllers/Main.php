<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

/*
	$route['notes']['get'] = 'main/notes_index';
	$route['notes']['post'] = 'main/notes_create';
	$route['notes/(:any)']['delete'] = 'main/notes_destroy';
	$route['notes/(:any)']['put'] = 'main/notes_update';
	$route['notes/new']['get'] = 'main/notes_new';
	$route['notes/(:any)']['post'] = 'main/notes_show';
	 * Index Page for this controller.
*/
	public function __construct(){
		parent::__construct();
		$this->load->model('notes');
	}
	public function index()
	{
	$this->load->view('index');
	}
	public function notes_index(){
		$values = $this->notes->index();
		$this->load->view('partials/index',array('values'=>$values));
	}

	public function create(){
		$this->notes->create($this->input->post());
		echo ("success");
	}

	public function update($id){
		$this->notes->update($this->input->post(),$id);
	}
	public function delete($id){
		$this->notes->delete($id);
	}
}
