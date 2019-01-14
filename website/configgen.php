<?php
echo json_encode(array(
    'site'  => array(
        'pages' => array(
            array(
                'class' =>  'IndexPage',
                'path'  =>  'index',
                'params'=>  1
            ),
            array(
                'class' => 'RatePage',
                'path'  => 'rate',
                'params'=>  1
            )
        )
    )
));