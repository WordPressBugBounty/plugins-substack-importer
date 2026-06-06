<?php return array(
    'root' => array(
        'name' => 'wordpress/substack-importer',
        'pretty_version' => '1.2.0',
        'version' => '1.2.0.0',
        'reference' => 'f80b5ced8c8d1192a2d58611ed75f2b7f78d1319',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/wxr-generator' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => 'fd337579c9a2f58441fbaf292781cadf81881d6f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../automattic/wxr-generator',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'wordpress/substack-importer' => array(
            'pretty_version' => '1.2.0',
            'version' => '1.2.0.0',
            'reference' => 'f80b5ced8c8d1192a2d58611ed75f2b7f78d1319',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
