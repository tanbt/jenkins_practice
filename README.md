# jenkins_practice
This project includes simple composer, phpunit testing, phing. The purpose is to test its deployment with jenkins

##Run test
* phpunit -v --testsuite "person"

## Create pull request:
* checkout -b a-new-branch
* do some changes
* git push origin a-new-branch
** create pull request from UI: go to pull request page, select two branches to compare
** create pull request from command line:
*** git push
*** git request-pull base-branch your-branch
