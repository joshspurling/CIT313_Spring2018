<?php
class Post extends Model{

    function getPost($pID){
        $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.categoryID, p.date, c.name as name, u.first_name, u.last_name, co.commentText, co.date as commentDate FROM posts p
		INNER JOIN categories c on c.categoryID = p.categoryID
		INNER JOIN users u on u.uid = p.uid
    INNER JOIN comments co on co.postID = p.pID

		WHERE p.pID = ?	';
        $results = $this->db->getrow($sql, array($pID));

        $post = $results;

        return $post;

    }

    public function getUserPosts($uID){

        $sql = 'select * from posts where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getCatPosts($cID){

        $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.date, u.first_name, u.last_name
         FROM posts p
    INNER JOIN users u ON u.uid = p.uid
     WHERE categoryID = ?';

        $results = $this->db->execute($sql, $cID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getAllPosts($limit = 0){

        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryID, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryID = p.categoryID
		INNER JOIN users u on u.uid = p.uid'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;

    }

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }

    public function deletePost($data){
      $sql = 'DELETE FROM posts WHERE pID = ?';
      $this->db->execute($sql, $data);
      $message = "Post deleted.";
      return $message;
    }
}
