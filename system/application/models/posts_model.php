<?php
class Posts_model extends Model{

	function Posts_model()
	{
		
		parent::Model();	

	}
	
	function getAllPosts()
	{
		
		//banco de dados
		$query = $this->db->query('SELECT id, titulo, texto FROM posts','desc');
		
		if($query->num_rows() > 0){ // verifrica se tem dados na tabela
			foreach ($query->result_array() as $row)
			{			    				
				$posts[]=$row;
			}
			return $posts;
		}
	}
	
	function getPost($id){
		$query= $this->db->query('SELECT * FROM posts WHERE id='.$id );
		return $row= $query->row();
	}
	
	function createPost(){
		// fazendo
	}
	
}