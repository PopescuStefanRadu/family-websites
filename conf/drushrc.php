<?php

// Load a drushrc.php file from the 'drush' folder at the root of the current
// git repository. Customize as desired.
// (Script by grayside; @see: http://grayside.org/node/93)
$repo_dir = drush_get_option('root') ? drush_get_option('root') : getcwd();
$success = drush_shell_exec('cd %s && git rev-parse --show-toplevel 2> ' . drush_bit_bucket(), $repo_dir);
if ($success) {
  $output = drush_shell_exec_output();
  $repo = $output[0];
  $options['config'] = $repo . '/drush/drushrc.php';
  $options['include'] = $repo . '/drush/commands';
  $options['alias-path'] = $repo . '/drush/aliases';
}
