<?php
/**
* 
*/
	class CommonAction extends Action
	{
		
		Public function _initialize()
		{
	   // ��ʼ����ʱ�����û�Ȩ��
		   if(!isset($_SESSION['username'])|| $_SESSION['username']== '')
		   {
		   		$this->redirect('Login/login');
		   }
		}
	    
	}