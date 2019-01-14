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
            'name'              =>      'identifier',
            'type'              =>      'varchar(255)',
            'null'              =>      false
        ),
        array(
            'name'              =>      'source',
            'type'              =>      'varchar(255)',
            'null'              =>      false
        ),
        array(
            'name'              =>      'runtime',
            'type'              =>      'decimal(10,2)'
        )
        // array(
        //     'name'              =>  'last_name',
        //     'type'              =>  'varchar(255)',
        //     'default'           =>  '- NO LASTNAME -',
        // )
    ),
    'primary'   =>  'id',
)) . PHP_EOL;
