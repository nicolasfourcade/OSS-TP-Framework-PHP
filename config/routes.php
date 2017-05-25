<?php
return array('routes' => array(
    '/' => array(
        'view' => 'Oss/view/index.php',
        'call' => 'Oss/controller/OssController.php',
        'action' => 'OssController',
        'model' => 'Oss/Model/OssModel.php',
        'model_action' => 'OssModel.php'
    ),
    'Oss' => array(
        'view' => 'Oss/view/index.php',
        'call' => 'Oss/controller/OssController.php',
        'action' => 'OssController',
        'model' => 'Oss/Model/OssModel.php',
        'model_action' => 'OssModel.php'
    ),
    'User' => array(
        'view' => 'User/view/index.php',
        'call' => 'User/controller/UserController.php',
        'action' => 'UserController',
        'model' => 'User/model/UserModel.php',
        'model_action' => 'UserModel'

    )
),
);
