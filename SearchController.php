<?php
class SearchController extends AppController{
	public $uses = 'User';
	//public $autoRender = false;
	public function index(){
		//echo "test";
		$users = $this->User->find('all');
		$this->set('users',$users);
		//var_dump($users);
	}
	public function add(){
		echo $this->request->method();
		if($this->request->method() == 'POST'){
		 $this->User->save($this->request->data);
		 //$this->User->save($this->request->data);
		}
		//echo "test";
		//$users = $this->User->find('all');users
		$request_data = $this->request->data;
		$this->set('request_data',$request_data);
		//echo $this->request->method();
	}
	public function view($id = null){
		$user = $this->User->findById($id);
		if(!$user){
		 throw new NotFoundException('Khong tim thay trang');
		}
		$this->set('user',$user);
		//echo 'xxxx';	
		/*
		if(!$id){
		 throw new NotFoundException('xxxxx');
		}
		$this->User->id = $id;
		if($this->User->ex
		$users = $this->User->read(null,$id);
		$this->set('users',$users);
		*/
	}
	protected function hide(){
		echo "test";exit;
	}
}
?>
