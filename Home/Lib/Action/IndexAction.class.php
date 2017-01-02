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

        preg_match_all("/<img.*\>/isU",$str,$ereg);//正则表达式把图片的整个都获取出来了
        $img=$ereg[0][0];//图片
        $p="#src=('|\")(.*)('|\")#isU";//正则表达式
        preg_match_all ($p, $img, $img1);
           $img_path =$img1[2][0];//获取第一张图片路径
        if(!$img_path){
            $img_path="__PUBLIC__/Images/sstd.jpg";
        } //如果新闻中不存在图片，用默认的nopic.jpg替换 */
        return $img_path;
    }
    
    public function jie_shao($tid=1){
        $this->base_1();
        if ($tid==''||$tid==1) {          //学院简介页面
             
            $Academy=M('Article');
            $data=$Academy->where('headline="学院简介"')->find();
            $this->assign('data',$data);
            $this->display();
        }elseif ($tid==2) {                 //现任领导页面
            $this->base_1();
            $lead=M('Teacher')->limit(7)->select();
            $this->assign('data',$lead);
            $this->display('leader');
            
        }elseif ($tid==10) {                 //教师详细信息显示
            $tea=$_GET['id'];
            $teacher=M('Teacher');
            $data=$teacher->find($tea);
            $this->base_1();
            $this->assign('data',$data);
            $this->display('teacher_info');
        } else{
            $this->base_1();                 //组织机构页面
            $this->display('organize');
            
        }
        
    }
    /******学科建设的控制器*******/
    public function xue_ke($tid=1){
        $this->base_2();
        if ($tid==''||$tid==1) {                        //重点学科
            $article=M('Article');
            $condiction['headline']='重点学科';
            $data=$article->where($condiction)->find();

            $sitenav['1']='学科建设';
            $sitenav['2']='重点学科';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==2){                              //学位建设
            $article=M('Article');
            $condiction['headline']='学位建设';
            $data=$article->where($condiction)->find();
            $sitenav['1']='学科建设';
            $sitenav['2']='学位建设';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==3){                              //学科基地
            $article=M('Article');
            $condiction['headline']='学科基地';
            $data=$article->where($condiction)->find();
            $sitenav['1']='学科建设';
            $sitenav['2']='学科基地';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==10) {                            //教师详细信息显示
            $teacher=M('Teacher');
            $tea=$_GET['id'];
            $data=$teacher->find($tea);
            $this->base_2();
            $this->assign('data',$data);
            $this->display('teacher_info');
        }else{                        //学科带头人
            $teacher=M('Teacher');
            $condiction['other']='学科带头人';
            $data=$teacher->where($condiction)->select();
            $this->base_2();
            $this->assign('data',$data);
            $this->display('famous_tea');
        }
    }

    /******本科教育的控制器*******/
    public function ungraduate($stu=1){
        $article=M('Article');
        $sitenav['1']='本科教育';
        $sitenav['a_1']='ungraduate';
        $sitenav['2']='专业介绍';
        $sitenav['a_1']='ungraduate';
        $this->assign('sitenav',$sitenav);
        if ($stu==1||$stu=='') {
            $data=$article->where('headline="自动化专业"')->find();
        }elseif($stu==2){
            $data=$article->where('headline="信息工程专业"')->find();
        }elseif($stu==3){
            $data=$article->where('headline="电子信息工程专业"')->find();
        }elseif($stu==4){
            $data=$article->where('headline="计算机科学与技术"')->find();
        }else{
            $data=$article->where('headline="物联网工程"')->find();
        }
        $this->assign('data',$data);
        $this->base_3(); 
        $this->display();
    }

    /******研究生教育的控制器*******/
    public function graduate($id=''){
        // $id=$_GET['id'];
        $sitenav['1']='研究生教育';
        $sitenav['a_1']='graduate';
        $sitenav['2']='研究方向';
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

    /******学生工作的控制器*******/
    public function student_work($tid=1){
        $this->base_5();
        $article=M('Article');
        if ($tid==1) {                        //学工办
            
            $condiction['headline']='学工办';
            $data=$article->where($condiction)->find();

            $sitenav['1']='学生工作';
            $sitenav['2']='学工办';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==2){                              //分团委
            $condiction['headline']='分团委';
            $data=$article->where($condiction)->find();
            $sitenav['1']='学生工作';
            $sitenav['2']='分团委';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==3){                              //学生会
            $condiction['headline']='学生会';
            $data=$article->where($condiction)->find();
            $sitenav['1']='学生工作';
            $sitenav['2']='学生会';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }else{
            $condiction['headline']='特色基地';
            $data=$article->where($condiction)->find();
            $sitenav['1']='学生工作';
            $sitenav['2']='特色基地';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }
        
    }

    /******党建工作的控制器*******/
    public function party_work($tid=1){
        $this->base_6();
        $article=M('Article');
        if ($tid==715) {
            $id=$_GET['id'];
            $sitenav['1']='党建工作';
            $sitenav['2']='政策法规';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif ($tid==1) {
            $condiction['column']='zheng_che';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='学生工作';
            $sitenav['2']='政策法规';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }else{
            $condiction['column']='party_active';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='学生工作';
            $sitenav['2']='支部活动';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
   }

    /******招生就业的控制器*******/
    public function recruit($tid=1){
        $this->base_9();
        $article=M('Article');
        if ($tid==1) {
            $condiction['headline']=array('like','%本科招生%');
            $data=$article->where($condiction)->find();
            $sitenav['1']='招生就业';
            $sitenav['2']='本科招生';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif($tid==2){
            $condiction['headline']=array('like','%研究生招生%');
            $data=$article->where($condiction)->find();
            $sitenav['1']='招生就业';
            $sitenav['2']='研究生招生';
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }elseif($tid==715){
            $id=$_GET['id'];
            $sitenav['1']='招生就业';
            $sitenav['2']='就业工作';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
        }else{
            $condiction['column']='jiu_ye';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='招生就业';
            $sitenav['2']='就业工作';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
    }

    /******资料下载的控制器*******/
    public function download($tid=0){
        $sitenav['1']='资料下载';
        $file=M('File');
        if ($tid==0) {
            $sitenav['2']='全部资料';
            $list=$file->select();
        }elseif ($tid==1) {
            $sitenav['2']='政策法规';
            $condiction['column']='政策法规';
            $list=$file->where($condiction)->select();
        }elseif ($tid==2) {
            $sitenav['2']='本科文件';
            $condiction['column']='本科文件';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='研究生文件';
            $condiction['column']='研究生文件';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='学生工作';
            $condiction['column']='学生工作';
            $list=$file->where($condiction)->select();
        }elseif ($tid==3) {
            $sitenav['2']='招生就业';
            $condiction['column']='招生就业';
            $list=$file->where($condiction)->select();
        }else{
            $sitenav['2']='全部资料';
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
            $sitenav['1']='师生天地';
            $sitenav['2']='学科竞赛';
            $data=$article->find($id);
            $this->assign('sitenav',$sitenav);
            $this->assign('data',$data);
            $this->display('article');
            
        }elseif($tid==2){
            $condiction['column']='teacher_student';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='学生工作';
            $sitenav['2']='师生天地';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }else{
            $condiction['column']='competition';
            $list=$article->where($condiction)->order('id desc')->field('id,headline,time')->select();
            $sitenav['1']='学生工作';
            $sitenav['2']='学科竞赛';
            $this->assign('sitenav',$sitenav);
            $this->assign('list',$list);
            $this->display('list');
        }
    }

    /******侧边栏链接的控制器*******/
    protected function base_1(){
        $base['w']='学院概况';
        $base['w1']='学院简介';
        $base['w2']='现任领导';
        $base['w3']='组织机构';
       
        $this->assign('base',$base);
    }
    protected function base_2(){
        $base['w']='学科建设';
        $base['w1']='重点学科';
        $base['w2']='学位建设';
        $base['w3']='学科基地';
        $base['w4']='学科带头人';
        $this->assign('base',$base);
    }
    protected function base_3(){
        $base['w']='本科教育';
        $base['w1']='专业介绍';
            $base['w1_1']='自动化';
            $base['w1_2']='信息工程';
            $base['w1_3']='电子信息工程';
            $base['w1_4']='计算机与科学';
            $base['w1_5']='物联网';
        $base['w2']='培养方案';

        $this->assign('base',$base);  
    }
    protected function base_4(){
        $base['w']='研究生教育';
        $base['w1']='研究方向';
        $base['w2']='培养计划';
        $base['w3']='导师介绍';
        $base['w4']='资料下载';
        $this->assign('base',$base);
    }
    protected function base_5(){
        $base['w']='学生工作';
        $base['w1']='学工办';
        $base['w2']='分团委';
        $base['w3']='学生会';
        $base['w4']='特色基地';
        
        $this->assign('base',$base);
    }
    protected function base_6(){
        $base['w']='党建工作';
        $base['w1']='政策法规';
        $base['w2']='支部活动';
        $this->assign('base',$base);
    }
    protected function base_7(){
        $base['w']='资料下载';
        $base['w1']='政策法规';
        $base['w2']='本科文件';
        $base['w3']='研究生文件';
        $base['w4']='学生工作';
        $base['w5']='招生就业';
        $this->assign('base',$base);
    }
    protected function base_8(){
        $base['w']='师生天地';
        $base['w1']='学科竞赛';
        $base['w2']='师生天地';
        $this->assign('base',$base);
    }
    protected function base_9(){
        $base['w']='招生就业';
        $base['w1']='本科招生';
        $base['w2']='研究生招生';
        $base['w3']='就业工作';
        $this->assign('base',$base);
    }
}