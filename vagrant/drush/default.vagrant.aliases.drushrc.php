<?php

$aliases['main'] = array(
  'target-command-specific' => array (
    'sql-sync' => array (
      'sanitize' => TRUE,
      'no-cache' => TRUE,
    ),
  ),
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files',
   ),
);

$aliases['local'] = array(
  'parent' => '@main',
  'root' => '/drupal',
  'uri' => 'localhost',
);

$aliases['dev'] = array(
  'parent' => '@main',
  // 'root' => '',
  // 'remote-user' => '',
  // 'remote-host' => '',
  // 'ssh-options' => '',
  'target-command-specific' => array (
    'sql-sync' => array (
      'enable' => array(
        'devel',
        'coffee',
        'stage_file_proxy',
      ),
    ),
  ),
);

$aliases['staging'] = array(
  'parent' => '@main',
  // 'root' => '',
  // 'remote-user' => '',
  // 'remote-host' => '',
  // 'ssh-options' => '',
);

$aliases['prod'] = array(
  'parent' => '@main',
  // 'root' => '',
  // 'remote-user' => '',
  // 'remote-host' => '',
  // 'ssh-options' => '',
);
