Drupal 7 development
===============

Use this repo to create your own Drupal Development Environmet.

# Instalation

- go to /drupal and clone drupal repo inside (into "drupal" folder, instructions in separate README file)
- go to /vagrant and build your vagrant provision with vagrant up

# Next steps:

- login to vagrant with 'vagrant ssh'
- clone your ssh key with ssh-copy-id command
- go to /drupal to work on drupal folder
- use 'drush @alias <command>'
- your site is available under localhost:7777
- enjoy!

# Aliases

You can configure your aliases in vagrant/default.aliases.drushrc.php
- @local - this is alias to drupal hosted by your vagrant
- @dev - this is dev environment
- @staging - staging environment
- @live - live/production environmet

# Data

- ssh port - 2777
- drupal database - drupal:drupal@localhost/drupal

# PhpStorm
Open project based on top level of this repo to have access to php remote interpreter, xdebug and and similar already configured.
