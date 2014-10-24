<?php
/*
 * Defines environment flow.
 *
 * This flow will be used in:
 * - sql-sync
 */
$options['env-flow'] = array(
  '@prod' => array(),
  '@staging' => array('@prod'),
  '@dev' => array('@prod', '@staging'),
  '@local' => array('@prod', '@staging', '@dev'),
);
