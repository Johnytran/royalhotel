<?php
class Feedbacks extends Controller{
	protected function Index(){
		/*$dataset= array(1,2,3,4,5,6,7,8,9,10);
		$currPage=($_GET["pg"])?$_GET["pg"]:1;
		$pagination= new Pagination(sizeof($dataset),2,$currPage);*/
		
		$viewmodel = new FeedbackModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'Feedbacks');
		}
		$viewmodel = new FeedBackModel();
		$this->returnView($viewmodel->add(), true);
	}
}