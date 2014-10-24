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
  // 'uri' => '', // i.e. www.example.com
  // 'root' => '', // i.e. /var/www/example.com
  // 'remote-user' => '', // i.e. knut
  // 'remote-host' => '', // i.e. dev.example.com
  // 'ssh-options' => '', // i.e. -p 23
);

$aliases['staging'] = array(
  'parent' => '@main',
  // 'uri' => '', // i.e. www.example.com
  // 'root' => '', // i.e. /var/www/example.com
  // 'remote-user' => '', // i.e. knut
  // 'remote-host' => '', // i.e. dev.example.com
  // 'ssh-options' => '', // i.e. -p 23
);

$aliases['prod'] = array(
  'parent' => '@main',
  // 'uri' => '', // i.e. www.example.com
  // 'root' => '', // i.e. /var/www/example.com
  // 'remote-user' => '', // i.e. knut
  // 'remote-host' => '', // i.e. dev.example.com
  // 'ssh-options' => '', // i.e. -p 23
);
