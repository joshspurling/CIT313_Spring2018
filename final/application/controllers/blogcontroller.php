<?php

class BlogController extends Controller{

	public $postObject;
	public $commentsObject;


   	public function post($pID){
        $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'Blog');
		$this->set('posts',$posts);
	}

	public function add(){
		$new = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'postID'=>$_POST['pID']);
		$this->commentsObject = new Comments();
		$outcome = $this->commentsObject->addComment($new);

	}

	public function category($cID){
			$this->postObject = new Post();
	$posts = $this->postObject->getCatPosts($cID);
		$this->set('title','Category');
		$this->set('posts',$posts);
	}


}

?>
