<?php
/**
 * @file
 * policy.drush.inc
 *
 * Probably you should not change anything in this file!!!
 */

/**
 * Implementation of drush_hook_COMMAND_validate().
 */
function drush_policy_sql_sync_validate($source = NULL, $destination = NULL) {
  $env_flow = drush_get_option('env-flow');
  if (!isset($env_flow[$destination]) || !in_array($source, $env_flow[$destination])) {
    return drush_set_error(dt('Unable to synchronize databases from !source to !destination. Permission denied!', array('!source' => $source, '!destination' => $destination)));
  }
