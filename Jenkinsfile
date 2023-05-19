/*
    Define the pods that will be used in the Pipeline
*/
podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: kaniko
        image: gcr.io/kaniko-project/executor:debug
        command:
        - sleep
        args:
        - 9999999
        volumeMounts:
        - name: kaniko-secret
          mountPath: /kaniko/.docker
      restartPolicy: Never
      volumes:
      - name: kaniko-secret
        secret:
            secretName: dockerhub-creds
            items:
            - key: .dockerconfigjson
              path: config.json
      - name: maven
        image: maven:3.8.1-jdk-8
        command:
        - sleep
        args:
        - 99d
''')
/*
    Define the actual Pipeline
*/
{
  node(POD_LABEL) {

    /*
        At this stage, we build the docker container for PHPUnit testing
    */
    stage('Build Test Container Image') {
      git url: 'https://github.com/Tech-Byte-Tips/PHPUnit-Test-App', branch: 'main'
      container('kaniko') {
        stage('Build and Push') {
          sh '''
            /kaniko/executor --context `pwd` --dockerfile=Dockerfile-test --destination prengineer/testpipeline:latest
          '''
        }
      }
    }

    /*
        At this stage we run the tests
    */
    stage('Clone from Git') {
      git url: 'https://github.com/Tech-Byte-Tips/PHPUnit-Test-App', branch: 'main'
      container('maven') {
        stage('Build a Maven project') {
          sh '''
          echo pwd
          '''
        }
      }
    }

  }
}