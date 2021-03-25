<?php
namespace Deployer;

require 'recipe/laravel.php';
// require 'recipe/cachetool.php';

// Project name
set('application', 'whatspie_app');

// Project repository
set('repository', 'git@github.com:tarikhagustia/whatspie_app.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

set('cachetool', '/var/run/php/php7.2-fpm.sock');
set('cachetool_args', '');

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('157.230.243.159')
    ->user('deployer')
    ->set('deploy_path', '/home/deployer/webapps');

// Tasks

task('build', function () {
    run('cd {{release_path}} && npm install && npm run prod');
});

task('restart', function () {
    run('cd {{release_path}} && php artisan queue:restart');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'build');

after('deploy:symlink', 'restart');

/**
 * Clear opcache cache
 */
desc('Clearing OPcode cache');
task('cachetool:clear:opcache', function () {
    $releasePath = get('release_path');
    $options = get('cachetool');
    $fullOptions = get('cachetool_args');

    if (strlen($fullOptions) > 0) {
        $options = "{$fullOptions}";
    } elseif (strlen($options) > 0) {
        $options = "--fcgi={$options}";
    }

    cd($releasePath);
    $hasCachetool = run("if [ -e $releasePath/cachetool.phar ]; then echo 'true'; fi");

    if ('true' !== $hasCachetool) {
        run("curl -sOL https://github.com/gordalina/cachetool/releases/download/5.1.3/cachetool.phar");
    }

    run("{{bin/php}} cachetool.phar opcache:reset {$options}");
});

after('deploy:symlink', 'cachetool:clear:opcache');

// after('deploy:symlink', 'artisan:migrate');

