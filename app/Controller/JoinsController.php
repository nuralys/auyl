<?php 

class JoinsController extends AppController{

	public function index(){
		$title_for_layout = 'Прием в партию';
		$this->set(compact('title_for_layout'));
	}
}