<?php
class Comments extends Model{
public $commentsObject;

    public function addComment($new){

        $sql="INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,GETDATE(),?)";
        $outcome = $this->db->execute($sql, $new);

    		return $outcome;

    }

    public function save(){
      $this->postObject = new Comments();
      $data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'postID'=>$_POST['pID']);
      //$this->getCategories();

      $result = $this->commentsObject->addComment($data);
      $this->set('message', $result);
    }

    public function delete(){
      $this->postObject = new Comments();
      $data = $_POST['commentID'];
      $result = $this->commentsObject->deleteComment($data);
    }

    public function deleteComment($data) {

        $sql = 'DELETE FROM comments WHERE commentID = ?';
        $this->db->execute($sql, $data);
        $message = "Comment deleted.";
        return $message;
    }
}
