<?php
class EventListModel extends Model{
		public function Index(){
		    if($_POST['delete'])
		{
			$delete_event_id= $_POST['delete_event_id'];
			$this->query('DELETE FROM events WHERE event_id=:event_id');
			$this->bind(':event_id',$delete_event_id);
			$this->execute();
		}
	    $this->query('SELECT * FROM events');
		$rows = $this->resultSet();
		return $rows;
		}
		
		public function addEvent(){
    		    // Sanitize POST
    		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    		if(isset($post['submit']))
    		{
    		    $images=$_FILES['event_image']['name'];
    		    $tmp_dir=$_FILES['event_image']['tmp_name'];
    		    $imageSize=$_FILES['event_image']['size'];
    		    
    		    $upload_dir='images/';//move to this images file
    		    $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
    		    $valid_extensions=array('jpeg', 'jpg', 'png');
    		    $event_image=rand(1000,1000000).".".$imgExt;
    		    move_uploaded_file($tmp_dir,$upload_dir.$event_image);
    		    
    			if($post['event_title'] == '' || $post['event_content'] == ''){
    				Messages::setMsg('Please Fill In All Fields', 'error');
    				return;
    			}
    			// Insert into MySQL
    			$this->query('INSERT INTO events (event_title, event_content, event_image,event_start_date) VALUES(:event_title, :event_content, :event_image,:event_start_date)');
    			$this->bind(':event_title', $post['event_title']);
    			$this->bind(':event_content', $post['event_content']);
    			$this->bind(':event_image',$event_image);
    			$this->bind(':event_start_date',$post['event_start_date']);
    			$this->execute();
    			// Verify
    			if($this->lastInsertId()){
    				// Redirect
    				header('Location: '.ROOT_URL.'EventList');
    			}
    		}
    		return;
		}
}