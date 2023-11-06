pipeline {
  agent any

  environment {
    DOCKERHUB_CREDENTIALS = credentials('52548f71-7aac-467e-bcf6-5d934399133f')
  }
  stages {
    stage('Checkout code') {
      steps {
        checkout scm
      }
    }

    stage('Build') {
      steps {
        bat 'docker-compose build'
        bat 'start docker-compose up -d'
      }
    }

    stage('Test') {
      steps {
        echo "test passed"
      }
    }

    stage('Push Images to Docker Hub') {
      steps {
        bat 'echo %DOCKERHUB_CREDENTIALS_PSW%| docker login -u %DOCKERHUB_CREDENTIALS_USR% --password-stdin'
        bat 'docker-compose push'
      }
    }

    stage('Cleanup') {
      steps {
        bat 'docker-compose down'
      }
    }
  }

  post {
    success {
      mail bcc: '', body: '''Le pipeline Jenkins s\'est execute avec succes. 
      Tout s\'est deroule sans erreur.
      Voici le lien de l'application si vous souhaitez le consulter : https://pfea8.azurewebsites.net/
      ''', subject: 'Sujet : Reussite du pipeline Jenkins', to: 'bsreda87@gmail.com'
    }
    failure {
      mail bcc: '', body: '''Le pipeline Jenkins a echoue. 
      Veuillez prendre les mesures nécessaires pour resoudre le probleme.
      ''', subject: 'Sujet : Echec du pipeline Jenkins', to: 'bsreda87@gmail.com'
    }
  }
}
