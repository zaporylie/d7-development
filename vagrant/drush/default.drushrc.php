<?php
/*
 * Defines environment flow.
 *
 * This flow will be used in:
 * - sql-sync
 */
$options['env-flow'] = array(
  'live' => array('staging', 'dev', 'local'),
  'staging' => array('dev', 'local'),
  'dev' => array('local'),
  'local' => array(),
);
