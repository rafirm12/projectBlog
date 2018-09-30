<?php

class Posts Extends CI_Controller{


	public function index  (){
		$data['title'] = 'Latest Post';

		$data['posts'] =$this->post_model->get_posts();
		// print_r($data['posts']);
		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');

	}
}