/*
    Define the pods that will be used in the Pipeline
*/
podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: jenkins-agent-php-81
        image: prengineer/jenkins-agent-php-8.1:ARM64
        command:
        - sleep
        args:
        - 9999999
        imagePullPolicy: Always
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
      git url: 'https://github.com/Tech-Byte-Tips/PHPUnit-Test-App', branch: 'main'

      container('jenkins-agent-php-81') {
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