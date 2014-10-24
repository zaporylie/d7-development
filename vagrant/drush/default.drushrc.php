<?php
/*
 * Defines environment flow.
 *
 * This flow will be used in:
 * - sql-sync
 */
$options['env-flow'] = array(
  'prod' => array(),
  'staging' => array('local'),
  'dev' => array('staging', 'local'),
  'local' => array('prod', 'staging', 'dev'),
);
