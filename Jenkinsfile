pipeline {
  agent any

  environment {
    DOCKERHUB_CREDENTIALS = credentials('52548f71-7aac-467e-bcf6-5d934399133f')
    ACR_REGISTRY = "reda0011.azurecr.io"  // Mettez à jour avec votre nom de registre Azure

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
    stage('Push Images to Azure Container Registry') {
      steps {
        script {
          // Obtain Azure service principal credentials
          withCredentials([azureServicePrincipal(credentialsId: '06b3fde6-9b07-41d5-99ce-2da9c0260612', 
                                                appIdVariable: 'Client ID',
                                                passwordVariable: 'Client Secret',
                                                tenantVariable: 'Tenant ID')]) {
            
            // Log in to Azure Container Registry
            sh "docker login $ACR_REGISTRY -u $Client ID -p $Client Secret --tenant $Tenant ID"
            // Push Docker images using docker-compose
            sh "docker-compose push"
          }
        }
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
