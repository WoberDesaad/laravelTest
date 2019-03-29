pipeline {
    agent any

    stages {
        stage ('Build'){
            steps{
            sh "git pull"

            sh "composer install"
            sh "composer dump-autoload"
            sh "php artisan cache:clear"

            }
        }
        stage ('test'){
            steps{
                sh "./vendor/bin/phpunit"
            }
        }
    }
}
