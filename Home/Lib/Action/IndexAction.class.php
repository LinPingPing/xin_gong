<?php

class IndexAction extends Action {
    public function index(){
        $article=M('Article');
        $condiction_1['column']='competition';
        $sstd_cont['column']='teacher_student';
        $competition=$article->where($condiction_1)->order('id desc')->field('id,headline,time')->limit(7)->select();
        $sstd=$article->where($sstd_cont)->order('id desc')->field('id,headline,content,time')->limit(4)->select();
        for($i=0;$sstd[$i]['id']!=null;$i++){
            $sstd[$i]['img_path']=$this->Getimg($sstd[$i]['content']);
        }
        

        $this->assign('competition',$competition);
        $this->assign('sstd_cont',$sstd);
		$this->display();
    }
    protected function Getimg($str){

        preg_match_all("/<img.*\>/isU",$str,$ereg);//������ʽ��ͼƬ����������ȡ������
        $img=$ereg[0][0];//ͼƬ
        $p="#src=('|\")(.*)('|\")#isU";//������ʽ
        preg_match_all ($p, $img, $img1);
           $img_path =$img1[2][0];//��ȡ��һ��ͼƬ·��
        if(!$img_path){
            $img_path="__PUBLIC__/Images/sstd.jpg";
        } //��������в�����ͼƬ����Ĭ�ϵ�nopic.jpg�滻 */
        return $img_path;
    }
    
    public function jie_shao($tid=1){
        $this->base_1();
        if ($tid==''||$tid==1) {          //ѧԺ���ҳ��
             
            $Academy=M('Article');
            $data=$Academy->where('headline="ѧԺ���"')->find();
            $this->assign('data',$data);
            $this->display();
        }elseif ($tid==2) {                 //�����쵼ҳ��
            $this->base_1();
            $lead=M('Teacher')->limit(7)->select();
            $this->assign('data',$lead);
            $this->display('leader');
            
        }elseif ($tid==10) {                 //��ʦ��ϸ��Ϣ��ʾ
            $tea=$_GET['id'];
            $teacher=M('Teacher');
            $data=$teacher->find($tea);
            $this->base_1();
            $this->assign('data',$data);
            $this->display('teacher_info');
        } else{
            $this->base_1();                 //��֯����ҳ��
            $this->display('organize');
            
        }
        
    }
    /******ѧ�ƽ���Ŀ�����*******/
    public function xue_ke($tid=1){
        $this->base_2();
        if ($tid==''||$tid==1) {                        //�ص�ѧ��
            $article=M('Article');
            $condiction['headline']='�ص�ѧ��';
            $data=$article->where($condiction)->find();

            $sitenav['1']='ѧ�ƽ���';
            $sitenav['2']='�ص�ѧ��';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==2){                              //ѧλ����
            $article=M('Article');
            $condiction['headline']='ѧλ����';
            $data=$article->where($condiction)->find();
            $sitenav['1']='ѧ�ƽ���';
            $sitenav['2']='ѧλ����';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==3){                              //ѧ�ƻ���
            $article=M('Article');
            $condiction['headline']='ѧ�ƻ���';
            $data=$article->where($condiction)->find();
            $sitenav['1']='ѧ�ƽ���';
            $sitenav['2']='ѧ�ƻ���';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==10) {                            //��ʦ��ϸ��Ϣ��ʾ
            $teacher=M('Teacher');
            $tea=$_GET['id'];
            $data=$teacher->find($tea);
            $this->base_2();
            $this->assign('data',$data);
            $this->display('teacher_info');
        }else{                        //ѧ�ƴ�ͷ��
            $teacher=M('Teacher');
            $condiction['other']='ѧ�ƴ�ͷ��';
            $data=$teacher->where($condiction)->select();
            $this->base_2();
            $this->assign('data',$data);
            $this->display('famous_tea');
        }
    }

    /******���ƽ����Ŀ�����*******/
    public function ungraduate($stu=1){
        $article=M('Article');
        $sitenav['1']='���ƽ���';
        $sitenav['a_1']='ungraduate';
        $sitenav['2']='רҵ����';
        $sitenav['a_1']='ungraduate';
        $this->assign('sitenav',$sitenav);
        if ($stu==1||$stu=='') {
            $data=$article->where('headline="�Զ���רҵ"')->find();
        }elseif($stu==2){
            $data=$article->where('headline="��Ϣ����רҵ"')->find();
        }elseif($stu==3){
            $data=$article->where('headline="������Ϣ����רҵ"')->find();
        }elseif($stu==4){
            $data=$article->where('headline="�������ѧ�뼼��"')->find();
        }else{
            $data=$article->where('headline="����������"')->find();
        }
        $this->assign('data',$data);
        $this->base_3(); 
        $this->display();
    }

    /******�о��������Ŀ�����*******/
    public function graduate($id=''){
        // $id=$_GET['id'];
        $sitenav['1']='�о�������';
        $sitenav['a_1']='graduate';
        $sitenav['2']='�о�����';
        $sitenav['a_1']='graduate';
        $this->assign('sitenav',$sitenav);
        $this->base_4();
        if ($id!='') {
            $data=M('Article')->find($id);
            $this->assign('data',$data);
            $this->display('ungraduate');
        }else{
           
            $article=M('Article');
            $condiction['column']='graduate';
            $list=$article->where($condiction)->select();
            $this->assign('list',$list);
            $this->display('list');
            }
        
    }

    /******ѧ�������Ŀ�����*******/
    public function student_work($tid=1){
        $this->base_5();
        $article=M('Article');
        if ($tid==1) {                        //ѧ����
            
            $condiction['headline']='ѧ����';
            $data=$article->where($condiction)->find();

            $sitenav['1']='ѧ������';
            $sitenav['2']='ѧ����';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==2){                              //����ί
            $condiction['headline']='����ί';
            $data=$article->where($condiction)->find();
            $sitenav['1']='ѧ������';
            $sitenav['2']='����ί';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==3){                              //ѧ����
            $condiction['headline']='ѧ����';
            $data=$article->where($condiction)->find();
            $sitenav['1']='ѧ������';
            $sitenav['2']='ѧ����';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }else{
            $condiction['headline']='��ɫ����';
            $data=$article->where($condiction)->find();
            $sitenav['1']='ѧ������';
            $sitenav['2']='��ɫ����';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }
        
    }

    /******���������Ŀ�����*******/
    public function party_work($tid=1){
        $this->base_6();
        $article=M('Article');
        if ($tid==715) {
            $id=$_GET['id'];
            $sitenav['1']='��������';
            $sitenav['2']='���߷���';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==1) {
            $condiction['column']='zheng_che';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='ѧ������';
            $sitenav['2']='���߷���';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }else{
            $condiction['column']='party_active';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='ѧ������';
            $sitenav['2']='֧���';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
   }

    /******������ҵ�Ŀ�����*******/
    public function recruit($tid=1){
        $this->base_9();
        $article=M('Article');
        if ($tid==1) {
            $condiction['headline']=array('like','%��������%');
            $data=$article->where($condiction)->find();
            $sitenav['1']='������ҵ';
            $sitenav['2']='��������';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif($tid==2){
            $condiction['headline']=array('like','%�о�������%');
            $data=$article->where($condiction)->find();
            $sitenav['1']='������ҵ';
            $sitenav['2']='�о�������';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif($tid==715){
            $id=$_GET['id'];
            $sitenav['1']='������ҵ';
            $sitenav['2']='��ҵ����';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }else{
            $condiction['column']='jiu_ye';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='������ҵ';
            $sitenav['2']='��ҵ����';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
    }

    /******�������صĿ�����*******/
    public function download($tid=0){
        $sitenav['1']='��������';
        $file=M('File');
        if ($tid==0) {
            $sitenav['2']='ȫ������';
            $list=$file->select();
        }elseif ($tid==1) {
            $sitenav['2']='���߷���';
            $condiction['column']='���߷���';
            $list=$file->where($condiction)->select();
        }elseif ($tid==2) {
            $sitenav['2']='�����ļ�';
            $condiction['column']='�����ļ�';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='�о����ļ�';
            $condiction['column']='�о����ļ�';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='ѧ������';
            $condiction['column']='ѧ������';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='������ҵ';
            $condiction['column']='������ҵ';
            $list=$file->where($condiction)->select();
        }else{
            $sitenav['2']='ȫ������';
            $list=$file->select();
        }
        $this->base_7();
        $this->assign('sitenav',$sitenav);
        $this->assign('list',$list);
        $this->display('file_list');
    }

    public function sstd($tid=1){
        $this->base_8();
        $article=M('Article');
        if($tid==715){
            $id=$_GET['id'];
            $sitenav['1']='ʦ�����';
            $sitenav['2']='ѧ�ƾ���';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
            
        }elseif($tid==2){
            $condiction['column']='teacher_student';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='ѧ������';
            $sitenav['2']='ʦ�����';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }else{
            $condiction['column']='competition';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='ѧ������';
            $sitenav['2']='ѧ�ƾ���';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
    }

    /******��������ӵĿ�����*******/
    protected function base_1(){
        $base['w']='ѧԺ�ſ�';
        $base['w1']='ѧԺ���';
        $base['w2']='�����쵼';
        $base['w3']='��֯����';
       
        $this->assign('base',$base);
    }
    protected function base_2(){
        $base['w']='ѧ�ƽ���';
        $base['w1']='�ص�ѧ��';
        $base['w2']='ѧλ����';
        $base['w3']='ѧ�ƻ���';
        $base['w4']='ѧ�ƴ�ͷ��';
        $this->assign('base',$base);
    }
    protected function base_3(){
        $base['w']='���ƽ���';
        $base['w1']='רҵ����';
            $base['w1_1']='�Զ���';
            $base['w1_2']='��Ϣ����';
            $base['w1_3']='������Ϣ����';
            $base['w1_4']='��������ѧ';
            $base['w1_5']='������';
        $base['w2']='��������';

        $this->assign('base',$base);  
    }
    protected function base_4(){
        $base['w']='�о�������';
        $base['w1']='�о�����';
        $base['w2']='�����ƻ�';
        $base['w3']='��ʦ����';
        $base['w4']='��������';
        $this->assign('base',$base);
    }
    protected function base_5(){
        $base['w']='ѧ������';
        $base['w1']='ѧ����';
        $base['w2']='����ί';
        $base['w3']='ѧ����';
        $base['w4']='��ɫ����';
        
        $this->assign('base',$base);
    }
    protected function base_6(){
        $base['w']='��������';
        $base['w1']='���߷���';
        $base['w2']='֧���';
        $this->assign('base',$base);
    }
    protected function base_7(){
        $base['w']='��������';
        $base['w1']='���߷���';
        $base['w2']='�����ļ�';
        $base['w3']='�о����ļ�';
        $base['w4']='ѧ������';
        $base['w5']='������ҵ';
        $this->assign('base',$base);
    }
    protected function base_8(){
        $base['w']='ʦ�����';
        $base['w1']='ѧ�ƾ���';
        $base['w2']='ʦ�����';
        $this->assign('base',$base);
    }
    protected function base_9(){
        $base['w']='������ҵ';
        $base['w1']='��������';
        $base['w2']='�о�������';
        $base['w3']='��ҵ����';
        $this->assign('base',$base);
    }
}