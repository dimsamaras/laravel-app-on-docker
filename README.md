## A new Lavavel app

### Components

Infrastructure:
- Docker
Stack:
- Laravel version 5.8
- PHP version  7.2
- MySQL as database 5.7

### Installation Steps
- [Install docker-compose](https://docs.docker.com/compose/install/) on your local machine.
- [Clone] (https://git-scm.com/docs/git-clone) the project using: ```https://github.com/dimsamaras/laravel-app-on-docker.git```
    or download through the download ZIP option found at the upper right section (could cause permissions conflicts).
  - Place the project to the destination folder.
  - Build the docker-compose project.
    ```sh
    $ cd folder_with_the_project 
    $ docker-compose build
    ```
  - Run the docker-compose project. 
    ```sh
    $ docker-compose up
    ```
    or to run as deamon
    ```sh
    $ docker-compose up -d
    ```
  - Access the API at [localhost](localhost) using PostMan or via your web browser


### Provisioning

#### Infrastructure

  - Any changes on the infrastructure can be performed on the docker-compose.yml file regarding the source location and ports binding and the containers.
  - MySQL is exposed on port 3306.
  - NginX listens on port 80.
  - Source code is in directory src inside this project and mapped in directory /var/www in the containers.
    
#### Data
  - The database is called 'laravel'
  - Database data will persist in dbdata folder