<?php

namespace backend\controllers;

use yii;
use app\models\user;
class UserController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    
    //登录
    public function actionLogin()
    {
        $session = Yii::$app->session;
        $model=new User();
        if(yii::$app->request->post())
        {
            $post=yii::$app->request->post();
           // var_dump($post);die;
            $user_name=$post['user_name']; 
            $user_pwd=$post['user_pwd'];
            $is_check=isset($post['is_check']) ? $post['is_check'] : '' ;
            if(empty($user_name) || empty($user_pwd))
            {
                exit('字段不能非空');
            }
            //防sql注入
            $user_name = $this->actionFilterArr($user_name);
            $user_pwd = $this->actionFilterArr($user_pwd);
          //var_dump($user_name);die;
            $sql="select * from user where user_name='$user_name' ";
            $res=yii::$app->db->createCommand($sql)->queryOne();
            if ($res) {
               if($user_pwd==$res['user_pwd'])
               {
                    if($is_check=='1')
                    {
                        // $cookies = Yii::$app->request->cookies;
                       // $cookies->open();
                        // $cookies->set('user_name',$user_name);
                        $session->open();
                        $session->set('user_name',$user_name);
                        echo "<script>alert('登录成功');location.href='index.php?r=index/index'</script>";
                    }
                    else
                    {
                        $session->open();
                        $session->set('user_name',$user_name);
                        echo "<script>alert('登录成功');location.href='index.php?r=index/index'</script>";
                    }
                   
               }
               else
               {
                    echo "<script>alert('登录失败,请重新登录');location.href='index.php?r=user/login'</script>";
               }
            }
            else
            {
                echo '用户名不存在';
            }
        }
        else
        {
            return $this->renderPartial('login');
        }
    }

    /**
     * 注册
     */
    public function actionZhu()
    {
        if(yii::$app->request->post())
        {
            $email=yii::$app->request->post('email');
            $user_name=yii::$app->request->post('user_name');
            $user_pwd=yii::$app->request->post('user_pwd');
            $user_job=yii::$app->request->post('user_job');
            $user_phone=yii::$app->request->post('user_phone');
            $row=yii::$app->db->createCommand()->insert('user', [
                'user_name' => $user_name,
                'user_pwd' => $user_pwd,
                'user_job' => $user_job,
                'email' => $email,
                'user_phone' => $user_phone])->execute();
            if($row)
            {
                echo "<script>alert('注册成功');location.href='index.php?r=user/login'</script>";
            }
            else
            {
                echo "<script>alert('注册失败');location.href='index.php?r=user/zhu'</script>";
            }
        }
        else
        {
            return $this->renderPartial('zhu');
        } 
    }

    /**
     * 忘记密码
     */
    public function actionForget()
    {
        if (yii::$app->request->post()) {
            $email=yii::$app->request->post('email');
            //查询id
            $sql="select user_id from user where email='$email'";
            $row=yii::$app->db->createCommand($sql)->queryOne();
            $user_id=$row['user_id'];
            $mail= Yii::$app->mailer->compose();   
            $mail->setTo($email);  
            $mail->setSubject("邮件测试");  
            //$mail->setTextBody('zheshisha ');   //发布纯文字文本
            $str=Yii::$app->security->encryptByKey('12345678','12');
            //print_r($str);die;
            $res=urlencode($str);//print_r($res);die;
            $mail->setHtmlBody("<a href='http://www.guaziweb.com/admin/backend/web/index.php?r=user/gai&str=".$res."&user_id=".$user_id."'>点击修改</a>");    //发布可以带html标签的文本
            
           // echo yii::$app->security->decryptByKey($arr,'12');
            if($mail->send())  
                echo "success";  
            else  
                echo "failse";   
            die();
            // print_r($email);
        }
        else
        {
            return $this->renderPartial('forget');
        }
        
    }
    /**
     * 修改密码
     */

    public function actionGai()
    {
        $user_id=$_GET['user_id'];
        //print_r($user_id);die;
        if(yii::$app->request->post())
        {
            $user_id=yii::$app->request->post('user_id');
            $user_pwd=yii::$app->request->post('pwd');
            //print_r($user_pwd);die;
            $sql="update user set user_pwd='$user_pwd' where user_id='$user_id'";
            $row=yii::$app->db->createCommand($sql)->execute();
            //print_r($row);die;
            if ($row) {
               echo "<script>alert('修改成功');location.href='index.php?r=user/login'</script>";
            }
            else
            {
                echo "<script>alert('修改失败');location.href='index.php?r=user/forget'</script>";
            }
        }
        else
        {
            return $this->renderPartial('gai',['user_id'=>$user_id]);
        }
    }

    /**
     * 用户信息展示
     */
    public function actionUserlist()
    {
        return $this->renderPartial('userlist');
    }
     
    /**
     * 退出登录
     */
   public function actionLogout()
   {
        $session = Yii::$app->session;
        unset($_SESSION['user_name']);
        return $this->renderPartial('login');
   }

    //防止sql注入。xss攻击
    /**
     * 过滤参数
     * @param string $str 接受的参数
     * @return string
     */
    public function actionFilterWords($str)
    {
        $farr = array(
            "/<(\\/?)(script|i?frame|style|html|body|title|link|meta|object|\\?|\\%)([^>]*?)>/isU",
            "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",
            "/select|insert|update|delete|drop|\'|\/\*|\*|\+|\-|\"|\.\.\/|\.\/|union|into|load_file|outfile|dump/is"
        );
        $str = preg_replace($farr,'',$str);
        return $str;
    }
    /**
     * 过滤接受的参数或者数组,如$_GET,$_POST
     * @param array|string $arr 接受的参数或者数组
     * @return array|string
     */
    public function actionFilterArr($arr)
    {
        if(is_array($arr)){
            foreach($arr as $k => $v){
                $arr[$k] = $this->actionFilterWords($v);
            }
        }else{
            $arr = $this->actionFilterWords($arr);
        }
        return $arr;
    }



    //空白页(其他页面显示)
    public function actionBlack()
    {
        return $this->renderPartial('black');
    }

    //表单文件上传
    public function actionDropzone()
    {
        return $this->renderPartial('dropzone');
    }

    //表单组件
    public function actionForm()
    {
        return $this->renderPartial('form-elements');
    }
    



}
