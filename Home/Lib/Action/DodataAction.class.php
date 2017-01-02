<?php 
	/**
	* 
	*/
	class DodataAction extends CommonAction
	{
		
		public function AddTeacher()
		{
			$teacher = M("Teacher"); // 实例化User对象
			$teacher->create(); // 创建数据对象
			if($_FILES['photo']['size']>0){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类
				$upload->maxSize  = 3145728 ;// 设置附件上传大小
				$upload->saveRule = time();
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				// $upload->thumb = true;
				// $upload->thumbMaxWidth = '50,200';
				// $upload->thumbMaxHeight = '50,200';
	   //          $upload->thumbPrefix = 'm_';
	   //          $upload->thumbRemoveOrigin = false;
				$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				}
				$teacher->photo_name = $info[0]['savename']; // 保存上传的照片根据需要自行组装
			}
			// 保存表单数据 包括附件数据
			
			
			$teacher->add(); // 写入用户数据到数据库
			$this->success('数据保存成功','__APP__/Admin/index');
		}

		public function DelTeacher(){
			$id=$_GET['id'];
			$count=M('Teacher')->delete($id);
			if($count>0){
				$this->success('数据删除成功','__APP__/Admin/index');
			}else{
				$this->error('数据删除失败','__APP__/Admin/index');
			}
		}


		public function ModifyTea(){
			$teacher = M("Teacher"); // 实例化User对象
			$teacher->create(); // 创建数据对象
			if($_FILES['photo']['size']>0){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类
				$upload->maxSize  = 3145728 ;// 设置附件上传大小
				$upload->saveRule = time();
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				// $upload->thumb = true;
				// $upload->thumbMaxWidth = '50,200';
				// $upload->thumbMaxHeight = '50,200';
				//$upload->thumbPrefix = 'm_';
				//$upload->thumbRemoveOrigin = false;
				$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				}
				$teacher->photo_name = $info[0]['savename']; // 保存上传的照片根据需要自行组装
			}
			
			// 保存表单数据 包括附件数据
			
			$count=$teacher->save(); // 写入用户数据到数据库
			if ($count) {
				$this->success('数据修改成功','__APP__/Admin/index');
			}else{
				$this->error('数据保存失败！');
			}
			
		}
		public function AddArticle(){
			$article = M('Article');
			$article -> create();
			$article->time=date("y-m-d",time());
			$count= $article -> add();
			if ($count) {
				$this->success('数据保存成功！','__APP__/Admin/article');
			}else{
				$this->error('数据保存失败！');
			}
		}
		public function DelArt(){
			$id=$_GET['id'];
			$count=M('Article')->delete($id);
			if($count>0){
				$this->success('数据删除成功','__APP__/Admin/article');
			}else{
				$this->error('数据删除失败','__APP__/Admin/article');
			}
		}
		public function ModifyArt(){
			
			$article = M('Article');
			$article -> create();
			$article->time=date("y-m-d",time());
			$count= $article ->save();
			if ($count) {
				$this->success('数据保存成功！','__APP__/Admin/article');
			}else{
				$this->error('数据保存失败！');
			}
		}

		public function AddFile(){
			$file = M("File"); // 实例化User对象
			$file->create(); // 创建数据对象
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->saveRule = time();
			//$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/file/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			}
			$file->file_name = $info[0]['savename']; // 保存上传的照片根据需要自行组装
			$file->time=date("y-m-d",time());
			// 保存表单数据 包括附件数据
			
			
			$file->add(); // 写入用户数据到数据库
			$this->success('数据保存成功','__APP__/Admin/file');
		}

		public function DelFile(){
			$id=$_GET['id'];
			$file=M('File')->find($id);
			
			$file_path='./Public/Uploads/file/'.$file[file_name];
			if(unlink($file_path)){
				$count=M('File')->delete($id);
				if($count>0){
				$this->success('文件删除成功','__APP__/Admin/file');
				}else{
					$this->error('文件删除失败','__APP__/Admin/file');
				}
			}else{
				$this->error('文件删除失败','__APP__/Admin/file');
			}
			
		}
		public function ModifyFile(){
			$file = M("File"); // 实例化User对象
			$file->create(); // 创建数据对象
			$file->time=date("y-m-d",time());
			$count = $file ->save();
			if ($count) {
				$this->success('数据保存成功！','__APP__/Admin/file');
			}else{
				$this->error('数据保存失败！');
			}
		}
	}
