<?php
namespace Deployer;
require 'recipe/drupal8.php';

// Configuration

set('repository', 'https://github.com/coderdojo-hirakata/coderdojo-hirakata.github.io.git');
set('ssh_type', 'native');
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Servers

server('production', 'coderdojo-hirakata.org')
  ->user('sumida')
  ->identityFile()
  ->set('deploy_path', '/var/git/coderdojo-hirakata')
  ->set('branch', 'master');



// Tasks
desc('Remove deploy.php');
task('deploy.php:remove', function () {
  run('pwd');
});
after('deploy', 'deploy.php:remove');
