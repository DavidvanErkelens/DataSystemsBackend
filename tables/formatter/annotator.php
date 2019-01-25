<?php
echo json_encode(array(
    'columns'   =>  array(
        array(
            'name'              =>      'id',
            'type'              =>      'int',
            'null'              =>      false,
            'auto_increment'    =>      true
        ),
        array(
            'name'              =>      'fk_conversation',
            'type'              =>      'int',
            'null'              =>      false,
            'default'           =>      0
        ),
        array(
            'name'              =>      'satisfaction',
            'type'              =>      'int',
            'null'              =>      false
        ),
        array(
            'name'              =>      'reason',
            'type'              =>      'mediumtext',
            'null'              =>      'false'
        ),
        // array(
        //     'name'              =>      'created',
        //     'type'              =>      'datetime',
        //     'null'              =>      false
        // )
        // array(
        //     'name'              =>  'last_name',
        //     'type'              =>  'varchar(255)',
        //     'default'           =>  '- NO LASTNAME -',
        // )
    ),
    'primary'   =>  'id',
)) . PHP_EOL;
