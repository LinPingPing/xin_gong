<?php
	/**
	* 
	*/
	class AdminAction extends CommonAction
	{
		
		public function index()
		{	
			$teacher=M('Teacher');
			import('ORG.Util.Page');// �����ҳ��
			$count=$teacher->count();
			$Page       = new Page($count,7);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��
			$Page->setConfig('header','������');
			$Page->setConfig('prev', "��һҳ");//��һҳ
			$Page->setConfig('next', '��һҳ');//��һҳ
			$Page->setConfig('first', '��ҳ');//��һҳ
			$Page->setConfig('last', "ĩҳ");//���һҳ
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% ҳ %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// ��ҳ��ʾ���
			$list = $teacher->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// ��ֵ��ҳ���
			$this->display();
		}
		// public function teacher()
		// {	
		// 	$teacher=M('Teacher');
		// 	import('ORG.Util.Page');// �����ҳ��
		// 	$count=$teacher->count();
		// 	$Page       = new Page($count,5);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��
		// 	$Page->setConfig('header','������');
		// 	$Page->setConfig('prev', "��һҳ");//��һҳ
		// 	$Page->setConfig('next', '��һҳ');//��һҳ
		// 	$Page->setConfig('first', '��ҳ');//��һҳ
		// 	$Page->setConfig('last', "ĩҳ");//���һҳ
		// 	$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% ҳ %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%");
		// 	$show       = $Page->show();// ��ҳ��ʾ���
		// 	$list = $teacher->limit($Page->firstRow.','.$Page->listRows)->select();
		// 	$this->assign('list',$list);
		// 	$this->assign('page',$show);// ��ֵ��ҳ���
		// 	$this->display();
		// }
		public function article(){
			$article=M('Article');
			if ($_GET['con']!='') {
				$condiction['column']=$_GET['con'];
			}else{
				$condiction['id']=array('egt','0');
			}
		
			import('ORG.Util.Page');// �����ҳ��
			$count= $article->where($condiction)->count();
			$Page       = new Page($count,7);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��
			$Page->setConfig('header','������');
			$Page->setConfig('prev', "��һҳ");//��һҳ
			$Page->setConfig('next', '��һҳ');//��һҳ
			$Page->setConfig('first', '��ҳ');//��һҳ
			$Page->setConfig('last', "ĩҳ");//���һҳ
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% ҳ %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// ��ҳ��ʾ���
			$list = $article->where($condiction)->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// ��ֵ��ҳ���
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
			import('ORG.Util.Page');// �����ҳ��
			$count= $file->count();
			$Page       = new Page($count,7);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��
			$Page->setConfig('header','������');
			$Page->setConfig('prev', "��һҳ");//��һҳ
			$Page->setConfig('next', '��һҳ');//��һҳ
			$Page->setConfig('first', '��ҳ');//��һҳ
			$Page->setConfig('last', "ĩҳ");//���һҳ
			$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% ҳ %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%");
			$show       = $Page->show();// ��ҳ��ʾ���
			$list = $file->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);// ��ֵ��ҳ���
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