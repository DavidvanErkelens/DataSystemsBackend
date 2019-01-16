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
                'path'  => 'rate',
                'params'=>  1
            ),
            array(
                'class' =>  'LoginPage',
                'path'  =>  'login'
            ),
            array(
                'class' =>  'LogoutPage',
                'path'  =>  'logout'
            )
        )
    )
));