pipeline {
    stages {
        stage ('Build'){
            sh "git pull"

            sh "composer install"
            sh "composer dump-autoload"
            sh "php artisan clear:cache"
        }
        stage ('test'){
            sh "./vendor/bin/phpunit"
        }
    }
}
