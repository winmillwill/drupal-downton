## Downton

Like the show, this drupal module is all about service(s) and using them.
Downton will provide a message passing layer for Drupal 7 that builds on the
Services module, using its callbacks as the primary means of invoking another
module, which will allow for the actual service that answers that message to be
either embedded in the Drupal application where the message originated, or in
another application.

### Development

For now, I am using the following:

* Docker -- for packaging the application environment and backing services
* fig -- for managing docker containers
* (hacked) buildstep -- for creating a docker image from the heroku php
  buildpack
* heroku_buildpack_php -- for provisioning the image with php and apache
* drupal/tangler and static.drupal-packagist.org -- for building a drupal on
  demand for development of the module

What this means for you:

* install fig
* ensure access to a docker service
  * install locally on Linux
  * use a vm otherwise
* run `cd buildstep && make build`
* run `buildstep/buildstep downton /full/path/to/top/dir`
  * NB: this is the path on the machine actually running docker
* run `cp fig.yml.dist fig.yml` and edit the paths
* run `fig up` to start your web and database layers
* run `fig ps` or `docker ps` to see your services running
* run `fig run drupalctl install` to install drupal
  * see `fig run drupalctl install -h` for more info
* point your browser at the machine running docker
* hack on your code and hit refresh ad nauseum
