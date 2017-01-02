<?php
	/**
	* 
	*/
	class AdminAction extends CommonAction
	{
		
		public function index()
		{	
			$teacher=M('Teacher');
			import('ORG.Util.Page');// 导入分页类
			$count=$teacher->count();
			$Page       = new Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
			$Page->setConfig('header','条数据');
			$Page->setConfig('prev', "上一页");//上一页
			$Page->setConfig('next', '下一页');//下一页
			$Page->setConfig('first', '首页');//第一页
			$Page->setConfig('last', "末页");//最后一页
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// 分页显示输出
			$list = $teacher->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
		}
		// public function teacher()
		// {	
		// 	$teacher=M('Teacher');
		// 	import('ORG.Util.Page');// 导入分页类
		// 	$count=$teacher->count();
		// 	$Page       = new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
		// 	$Page->setConfig('header','条数据');
		// 	$Page->setConfig('prev', "上一页");//上一页
		// 	$Page->setConfig('next', '下一页');//下一页
		// 	$Page->setConfig('first', '首页');//第一页
		// 	$Page->setConfig('last', "末页");//最后一页
		// 	$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%");
		// 	$show       = $Page->show();// 分页显示输出
		// 	$list = $teacher->limit($Page->firstRow.','.$Page->listRows)->select();
		// 	$this->assign('list',$list);
		// 	$this->assign('page',$show);// 赋值分页输出
		// 	$this->display();
		// }
		public function article(){
			$article=M('Article');
			if ($_GET['con']!='') {
				$condiction['column']=$_GET['con'];
			}else{
				$condiction['id']=array('egt','0');
			}
		
			import('ORG.Util.Page');// 导入分页类
			$count= $article->where($condiction)->count();
			$Page       = new Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
			$Page->setConfig('header','条数据');
			$Page->setConfig('prev', "上一页");//上一页
			$Page->setConfig('next', '下一页');//下一页
			$Page->setConfig('first', '首页');//第一页
			$Page->setConfig('last', "末页");//最后一页
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// 分页显示输出
			$list = $article->where($condiction)->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
		}
		public function AddTeacher(){
			$this->display();
		}
		public function ModifyTea(){
			
			$id=$_GET['id'];
			$data=M('Teacher')->find($id);
			$data['experience']=str_replace("\n", "", $data['experience']);
			$data['experience']=str_replace("\r", "", $data['experience']);
			$this->assign('data',$data);
			$this->display();
		}
		public function AddArticle(){
			$this->display();
		}
		public function ModifyArt(){
			$id=$_GET['id'];
			$data=M('Article')->find($id);
			$data['content']=str_replace("\n", "", $data['content']);
			$data['content']=str_replace("\r", "", $data['content']);
			$this->assign('data',$data);
			$this->display();
		}
		public function file(){
			$file=M('File');
			import('ORG.Util.Page');// 导入分页类
			$count= $file->count();
			$Page       = new Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
			$Page->setConfig('header','条数据');
			$Page->setConfig('prev', "上一页");//上一页
			$Page->setConfig('next', '下一页');//下一页
			$Page->setConfig('first', '首页');//第一页
			$Page->setConfig('last', "末页");//最后一页
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// 分页显示输出
			$list = $file->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// 赋值分页输出
			$this->display();

		}
		public function AddFile(){
			$this->display();
		}
		public function ModifyFile(){
			$id=$_GET['id'];
			$data=M('File')->find($id);
			$this->assign('data',$data);
			$this->display();
		}
	}