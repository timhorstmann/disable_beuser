<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "disable_beuser"
 *
 * Auto generated by Extension Builder 2015-09-02
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Disable BeUser Task',
    'description' => 'Scheduler task to disable inactive User',
    'category' => 'plugin',
    'author' => 'Sven Juergens',
    'author_email' => 'sj@nordsonne.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.3.2',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.7.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
            't3_slack' => '1.0.0-1.99.99',
        ],
    ],
];
