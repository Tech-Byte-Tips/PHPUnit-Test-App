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
''')

/*
    Define the actual Pipeline
*/
{
  node(POD_LABEL) {

    /*
        At this stage, we build the docker container for PHPUnit testing
    */
    stage('Get Dockerfile from GitHub') {
      git url: 'https://github.com/Tech-Byte-Tips/PHPUnit-Test-App', branch: 'main'
      container('kaniko') {
        stage('Build and Push to DockerHub') {
          sh '''
            /kaniko/executor --context "`pwd`" --dockerfile=Dockerfile-test-ARM64 --destination prengineer/testapp
          '''
        }
      }
    }

  }
}


/*
    Define the pods that will be used in the Pipeline
*/
podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: testapp
        image: prengineer/testapp
        command: ["/bin/sh", "-c"]
        args:
        - phpunit tests --testdox;
      restartPolicy: Never
''')

/*
    Define the actual Pipeline
*/
{
  node(POD_LABEL) {

    /*
        At this stage we run the tests
    */
    stage('Clone from Git') {      
      container('testapp') {
        stage('Execute tests') {
          sh '''
          composer update
          phpunit tests --testdox
          '''
        }
      }
    }

  }
}