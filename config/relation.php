<?php

return[
    'Contact'=>[
        'Account'=>[
             'table_name'=>'account_contact',
             'relationship'=>'Many to Many',
             'relationship_name'=>'accounts',
             'relationship_id'=>'account_id',
        ]
    ],
    'Account'=>[
        'Contact'=>[
             'table_name'=>'account_contact',
             'relationship'=>'Many to Many',
             'relationship_name'=>'accounts',
             'relationship_id'=>'account_id',
        ]
    ],
    'Project'=>[
        'Account'=>[
             'table_name'=>'account_project',
             'relationship'=>'Many to Many',
             'relationship_name'=>'accounts',
             'relationship_id'=>'account_id',
        ]
    ],
    'User'=>[
        'Project'=>[
            'table_name'=>'project_user',
            'relationship'=>'Many to Many',
            'relationship_name'=>'projects',
            'relationship_id'=>'project_id',
        ]
    ]

];


?>
