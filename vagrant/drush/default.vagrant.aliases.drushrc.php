<?php

$aliases['main'] = array(
  'target-command-specific' => array (
    'sql-sync' => array (
      'sanitize' => TRUE,
    ),
  ),
);

$aliases['local'] = array(
  'parent' => '@main',
  'root' => '/drupal',
  'uri' => 'localhost',
);

$aliases['dev'] = array(
  'parent' => '@main',
);

$aliases['staging'] = array(
  'parent' => '@main',
);

$aliases['prod'] = array(
  'parent' => '@main',
);
