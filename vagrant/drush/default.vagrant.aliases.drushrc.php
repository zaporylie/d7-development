<?php

$aliases['main'] = array(
  'target-command-specific' => array (
    'sql-sync' => array(
      // Add general options for sql-sync target here.
    ),
  ),
  'source-command-specific' => array(
    'sql-sync' => array(
      // Add general options for sql-sync source here.
    ),
  ),
  'command-specific' => array(
    'sql-sync' => array(
      'confirm-sanitizations' => TRUE,
      'structure-tables' => array(
        'common' => array(
          'cache*',
          'sessions',
          'watchdog',
        ),
      ),
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
  'target-command-specific' => array (
    'sql-sync' => array (
      'enable' => array(
        'devel',
        'coffee',
        'stage_file_proxy',
      ),
      'no-cache' => TRUE,
      'sanitize' => TRUE,
      'no-ordered-dump' => TRUE,
      'structure-tables-key' => 'common',
    ),
  ),
);

$aliases['dev'] = array(
  'parent' => '@main, @local',
  // 'root' => '',
  // 'remote-user' => '',
  // 'remote-host' => '',
  // 'ssh-options' => '',
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
