<?php
echo json_encode(array(
    'site'  => array(
        'pages' => array(
            array(
                'class' =>  'IndexPage',
                'path'  =>  'index'
            ),
            array(
                'class' => 'RatePage',
                'path'  => 'rate'
            ),
            array(
                'class' =>  'LoginPage',
                'path'  =>  'login'
            ),
            array(
                'class' =>  'LogoutPage',
                'path'  =>  'logout'
            ),
            array(
                'class' =>  'AdminPanel',
                'path'  =>  'dashboard'
            ),
            array(
                'class' =>  'UploadPage',
                'path'  =>  'upload'
            )
        )
    )
));