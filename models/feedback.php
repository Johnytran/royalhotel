<?php
class FeedbackModel extends Model{
	public function Index(){
	    $this->query('SELECT * FROM feedbacks INNER JOIN users ON feedbacks.user_id=users.user_id ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO feedbacks (title, body, user_id) VALUES(:title, :body, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':user_id',$_SESSION['user_data']['user_id']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'Feedbacks');
			}
		}
		return;
	}
}