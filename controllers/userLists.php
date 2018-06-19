<?php
class UserList extends Controller{
	protected function Index(){
		$viewmodel = new UserListModel();
		$this->returnView($viewmodel->Index(), true);
	}
}