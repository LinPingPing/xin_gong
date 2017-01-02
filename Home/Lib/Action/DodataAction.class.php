<?php 
	/**
	* 
	*/
	class DodataAction extends CommonAction
	{
		
		public function AddTeacher()
		{
			$teacher = M("Teacher"); // ʵ����User����
			$teacher->create(); // �������ݶ���
			if($_FILES['photo']['size']>0){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// ʵ�����ϴ���
				$upload->maxSize  = 3145728 ;// ���ø����ϴ���С
				$upload->saveRule = time();
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
				// $upload->thumb = true;
				// $upload->thumbMaxWidth = '50,200';
				// $upload->thumbMaxHeight = '50,200';
	   //          $upload->thumbPrefix = 'm_';
	   //          $upload->thumbRemoveOrigin = false;
				$upload->savePath =  './Public/Uploads/';// ���ø����ϴ�Ŀ¼
				if(!$upload->upload()) {// �ϴ�������ʾ������Ϣ
				$this->error($upload->getErrorMsg());
				}else{// �ϴ��ɹ� ��ȡ�ϴ��ļ���Ϣ
				$info =  $upload->getUploadFileInfo();
				}
				$teacher->photo_name = $info[0]['savename']; // �����ϴ�����Ƭ������Ҫ������װ
			}
			// ��������� ������������
			
			
			$teacher->add(); // д���û����ݵ����ݿ�
			$this->success('���ݱ���ɹ�','__APP__/Admin/index');
		}

		public function DelTeacher(){
			$id=$_GET['id'];
			$count=M('Teacher')->delete($id);
			if($count>0){
				$this->success('����ɾ���ɹ�','__APP__/Admin/index');
			}else{
				$this->error('����ɾ��ʧ��','__APP__/Admin/index');
			}
		}


		public function ModifyTea(){
			$teacher = M("Teacher"); // ʵ����User����
			$teacher->create(); // �������ݶ���
			if($_FILES['photo']['size']>0){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// ʵ�����ϴ���
				$upload->maxSize  = 3145728 ;// ���ø����ϴ���С
				$upload->saveRule = time();
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
				// $upload->thumb = true;
				// $upload->thumbMaxWidth = '50,200';
				// $upload->thumbMaxHeight = '50,200';
				//$upload->thumbPrefix = 'm_';
				//$upload->thumbRemoveOrigin = false;
				$upload->savePath =  './Public/Uploads/';// ���ø����ϴ�Ŀ¼
				if(!$upload->upload()) {// �ϴ�������ʾ������Ϣ
				$this->error($upload->getErrorMsg());
				}else{// �ϴ��ɹ� ��ȡ�ϴ��ļ���Ϣ
				$info =  $upload->getUploadFileInfo();
				}
				$teacher->photo_name = $info[0]['savename']; // �����ϴ�����Ƭ������Ҫ������װ
			}
			
			// ��������� ������������
			
			$count=$teacher->save(); // д���û����ݵ����ݿ�
			if ($count) {
				$this->success('�����޸ĳɹ�','__APP__/Admin/index');
			}else{
				$this->error('���ݱ���ʧ�ܣ�');
			}
			
		}
		public function AddArticle(){
			$article = M('Article');
			$article -> create();
			$article->time=date("y-m-d",time());
			$count= $article -> add();
			if ($count) {
				$this->success('���ݱ���ɹ���','__APP__/Admin/article');
			}else{
				$this->error('���ݱ���ʧ�ܣ�');
			}
		}
		public function DelArt(){
			$id=$_GET['id'];
			$count=M('Article')->delete($id);
			if($count>0){
				$this->success('����ɾ���ɹ�','__APP__/Admin/article');
			}else{
				$this->error('����ɾ��ʧ��','__APP__/Admin/article');
			}
		}
		public function ModifyArt(){
			
			$article = M('Article');
			$article -> create();
			$article->time=date("y-m-d",time());
			$count= $article ->save();
			if ($count) {
				$this->success('���ݱ���ɹ���','__APP__/Admin/article');
			}else{
				$this->error('���ݱ���ʧ�ܣ�');
			}
		}

		public function AddFile(){
			$file = M("File"); // ʵ����User����
			$file->create(); // �������ݶ���
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// ʵ�����ϴ���
			$upload->maxSize  = 3145728 ;// ���ø����ϴ���С
			$upload->saveRule = time();
			//$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
			$upload->savePath =  './Public/Uploads/file/';// ���ø����ϴ�Ŀ¼
			if(!$upload->upload()) {// �ϴ�������ʾ������Ϣ
			$this->error($upload->getErrorMsg());
			}else{// �ϴ��ɹ� ��ȡ�ϴ��ļ���Ϣ
			$info =  $upload->getUploadFileInfo();
			}
			$file->file_name = $info[0]['savename']; // �����ϴ�����Ƭ������Ҫ������װ
			$file->time=date("y-m-d",time());
			// ��������� ������������
			
			
			$file->add(); // д���û����ݵ����ݿ�
			$this->success('���ݱ���ɹ�','__APP__/Admin/file');
		}

		public function DelFile(){
			$id=$_GET['id'];
			$file=M('File')->find($id);
			
			$file_path='./Public/Uploads/file/'.$file[file_name];
			if(unlink($file_path)){
				$count=M('File')->delete($id);
				if($count>0){
				$this->success('�ļ�ɾ���ɹ�','__APP__/Admin/file');
				}else{
					$this->error('�ļ�ɾ��ʧ��','__APP__/Admin/file');
				}
			}else{
				$this->error('�ļ�ɾ��ʧ��','__APP__/Admin/file');
			}
			
		}
		public function ModifyFile(){
			$file = M("File"); // ʵ����User����
			$file->create(); // �������ݶ���
			$file->time=date("y-m-d",time());
			$count = $file ->save();
			if ($count) {
				$this->success('���ݱ���ɹ���','__APP__/Admin/file');
			}else{
				$this->error('���ݱ���ʧ�ܣ�');
			}
		}
	}
