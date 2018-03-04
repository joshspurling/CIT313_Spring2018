<?php
class Post extends Model{

	function getPost($pID){

		$sql =  'SELECT posts.pID, posts.title, posts.content, posts.date, posts.uID,
		posts.categoryID, categories.name, users.first_name, users.last_name FROM posts
		 INNER JOIN categories ON posts.categoryID=categories.categoryID
		 INNER JOIN users ON posts.uID=users.uID WHERE pID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($pID));

		$post = $results;

		return $post;

	}

	public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT posts.pID, posts.title, posts.content, posts.date, posts.uID,
		posts.categoryID, categories.name, users.first_name, users.last_name FROM posts
		 INNER JOIN categories ON posts.categoryID=categories.categoryID
		 INNER JOIN users ON posts.uID=users.uID'.$numposts;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (title,content, date, categoryID) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}

	public function updatePost($data){
		$sql='UPDATE posts (title,content, date, categoryID) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;

}
}
