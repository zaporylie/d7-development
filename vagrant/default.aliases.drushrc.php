<?php

$aliases['local'] = array(
  'root' => '/drupal',
  'uri' => 'localhost',
);

$aliases['dev'] = array(
  'parent' => '@local',
);

$aliases['staging'] = array(
  'parent' => '@local',
);

$aliases['prod'] = array(
  'parent' => '@local',
);
