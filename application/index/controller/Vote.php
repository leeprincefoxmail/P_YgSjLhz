<?php 
namespace app\index\controller;

use think\Controller;

class Vote extends Common
{

	public function vote_list(){

		return $this->fetch();
	}

	public function answer_list(){
		
		return $this->fetch();
	}


}


 ?>