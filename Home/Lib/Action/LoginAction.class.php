<?php
	
	class LoginAction extends Action
	{
		
		public function login()
		{
			$this->display();
		}

		public function dologin()
		{
			$username=$_POST["username"];
			$password=$_POST["password"];
			$user=M('User');
			
			$where["username"]=$username;
			$where["password"]=$password;
			$count=$user->where($where)->count();
			
			if ($count>0) {
				$_SESSION["username"]=$username;
				
				$this->redirect('Admin/index');
			}else{
				$this->error("ÓÃ»§µÇÂ¼Ê§°Ü");
			}
		}
		public function doLogout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->redirect("login");
		}
	}