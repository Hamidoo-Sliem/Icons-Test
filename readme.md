# Icons - Test [Documentation]

This For generating a code Like this  [ NP WD-0004-RCC HA ](readme.md)


## A glance 

**1- Make a regeistraion** 
**2- Make a login**
**3- Then select service and lead src from droplist**
**4- press get code  to  get your  code**
**5- go to link "view code report" to get all codes and its details**


## About Generated Code

**1- First 2 letters represent : First name and Last of managed name** 
**2- Second 2 letters represent : First name and Last of service name** 
**3- The 4 numbers represent : random code**
**4- Third 3 letters represent : First letter from every word of lead src name**
**5- Last 2 letters represent : First name and Last of logged user**


## Installation & Configration

**1- Edit  .env file for your configration** 
**2- If vendor folder not found you can use composer.json to install it**
```html
    composer install        // if not found
    composer update      // if found
```
**3- Make migration for file in database folder to get your tables**
```javascript
    php artisan migrate
```
**4- Make seed to get random data for database**
```javascript
    php artisan db:seed
    php artisan db:seed --class=UsersTableSeeder
```


## Usage

### Run the test from the local url or virtual host : example.com


## Author

[Hamdi Sliem](https://github.com/Hamidoo-Sliem)
