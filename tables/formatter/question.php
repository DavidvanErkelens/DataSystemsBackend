<?php

/**
 *     - id
    - index
    - fk_conversation
    - fk_response
    - text

 */

echo json_encode(array(
    'columns'   =>  array(
        array(
            'name'              =>      'id',
            'type'              =>      'int',
            'null'              =>      false,
            'auto_increment'    =>      true
        ),
        array(
            'name'              =>      'idx',
            'type'              =>      'int',
            'null'              =>      false
        ),
        array(
            'name'              =>      'fk_conversation',
            'type'              =>      'int',
            'null'              =>      false,
            'default'           =>      0
        ),
        array(
            'name'              =>      'fk_response',
            'type'              =>      'int',
            'null'              =>      false,
            'default'           =>      0
        ),
        array(
            'name'              =>      'content',
            'type'              =>      'text',
            'null'              =>      false
        ),
        // array(
        //     'name'              =>  'last_name',
        //     'type'              =>  'varchar(255)',
        //     'default'           =>  '- NO LASTNAME -',
        // )
    ),
    'primary'   =>  'id',
)) . PHP_EOL;
