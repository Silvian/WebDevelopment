<?php

class Blog extends CI_Controller{
	
	function Blog(){
		parent::__construct();
		//$this -> load -> scaffolding('entries');
		$this -> load -> helper('url');
		$this -> load -> helper('form');
	}
	
	function index(){
		$data['title'] = "My Blog Title";
		$data['heading'] = "My Blog Heading";
		$data['query'] = $this -> db -> get('entries');
		
		$this->load->view('blog_view', $data);
	}
	
	function comments(){
		$data['title'] = "My Comment Title";
		$data['heading'] = "My Comment Heading";
		$this -> db -> where('entry_id', $this->uri -> segment(3));
		$data['query'] = $this -> db -> get('comments');
		
		$this->load->view('comment_view', $data);
	}
	
	function comment_insert(){
		$this -> db -> insert('comments', $_POST);
		redirect('blog/comments/'.$_POST['entry_id']);
	}
	
	function createblog(){
		$this->load->view('createblog_view');
		//$this -> db -> insert('entries', $_POST);
		
	}
	
	function blog_insert(){
		$this -> db -> insert('entries', $_POST);
		redirect('/blog');
	}
}

?>