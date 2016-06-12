<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=guazi',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],

        //发送邮件
         'mailer' => [  
       'class' => 'yii\swiftmailer\Mailer',  
        'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件
       'transport' => [  
           'class' => 'Swift_SmtpTransport',  
           'host' => 'smtp.sina.com',  //每种邮箱的host配置不一样
           'username' => 'song105263@sina.com',
            'password' => 'iloveyou13.', 
           'port' => '25',  
           'encryption' => 'tls',  
                               
                       ],   
       'messageConfig'=>[  
           'charset'=>'UTF-8',  
           'from'=>['song105263@sina.com'=>'admin']  
           ],  
        ],
    ],


];
