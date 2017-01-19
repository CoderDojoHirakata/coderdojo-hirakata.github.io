<?php
namespace Deployer;
require 'recipe/drupal8.php';

// Configuration

set('repository', 'git@domain.com:username/repository.git');
set('ssh_type', 'native');
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Servers

server('production', 'unplat.info')
    ->user('deploy')
    ->identityFile()
//    ->user('sumida')
//    ->identityFileAndPassword()
    ->set('deploy_path', '/var/www/coderdojo-hirakata');


// Tasks
desc('Remove deploy.php');
task('deploy.php:remove', function () {
  run('pwd');
});
after('deploy', 'deploy.php:remove');
