<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('post_model');
	}

	public function index()
	{
		$result['post_list'] = $this->post_model->get_list();
		$this->load->view('post',$result);
	}

	//add a new post
	public function add()
	{
		$this->post_model->add();
		$this->output->set_header("Location: http://hanbz.dlinkddns.com/demo/");
	}

	//delete a post
	public function del($sn)
	{
		$this->post_model->del($sn);
		$this->output->set_header("Location: http://hanbz.dlinkddns.com/demo/");
	}

}
