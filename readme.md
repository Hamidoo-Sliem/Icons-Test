# Icons - Test  [Documentation]

![Icons](public/imgs/ICONS.png)

This For generating a code Like this  [ NP WD-0004-RCC HA ](readme.md)


## A glance 

- **Make a regeistraion** 
- **Make a login**
- **Then select service and lead src from droplist**
- **press get code  to  get your  code**
- **go to link "view code report" to get all codes and its details**


## About Generated Code

- **First 2 letters represent : First name and Last of managed name** 
- **Second 2 letters represent : First name and Last of service name** 
- **The 4 numbers represent : random code**
- **Third 3 letters represent : First letter from every word of lead src name**
- **Last 2 letters represent : First name and Last of logged user**


## Installation & Configration

- **Edit  .env file for your configration** 
- **If vendor folder not found you can use composer.json to install it**

		```
			 composer install        // if not found
			 composer update      // if found
		```
- **Make migration for file in database folder to get your tables**

		```
			php artisan migrate
		```
- **Make seed to get random data for database**

		```
			php artisan db:seed
			php artisan db:seed --class=UsersTableSeeder   // for user table
		```


## Usage

### Run the test from the local url or virtual host : http(s):\\example.com


## Author

[Hamdi Sliem](https://github.com/Hamidoo-Sliem)


## License

[MIT License](LICENSE.md)
