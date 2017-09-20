<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 'On');

class Blog extends Controller {

	function Blog()
	{
		
		parent::Controller();	
		
		$this->load->scaffolding('posts'); //scaffolding 
		$this->load->helper('url');
		$this->load->helper('form');
		

	}
	
	function index()
	{		
		
		$this->load->model('posts_model');
		$posts['linhas']=$this->posts_model->getAllPosts();
		$this->load->view('blog_view',$posts);
	}
	
	function post($id){ //post detalhado
		$this->load->model('posts_model');
		$post['linha']=$this->posts_model->getPost($id);
		$this->load->view('post_view',$post);
		
		//seção de comentarios
		
		$this->db->where('post_id',$id);
		$data['query']= $this->db->get('comentarios');
		$this->load->view('comment_view',$data);
		
	}
	
	function comment_insert(){
		$this->db->insert('comentarios', $_POST);
		redirect('blog/index.php/blog/post/'.$_POST['post_id']);
	}
}

/* End of file blog.php */
/* Location: ./system/application/controllers/blog.php */
