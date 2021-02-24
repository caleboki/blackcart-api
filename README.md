# BlackCart API

## Project Setup

1. Make sure you have [Docker](https://docs.docker.com/get-docker/) installed. If you are on a Windows make sure that Windows Subsystem for Linux 2 (WSL2) is installed and enabled. WSL allows you to run Linux binary executables natively on Windows 10.

2. Run the terminal and clone this repo:

```
git clone https://github.com/caleboki/blackcart-api blackcart
cd blackcart
```
3. Install dependences:

```
composer install
```
4. Rename the `env.example` to `env`. In the `.env` file change set `DB_HOST=mysql`  

5. This project uses Laravel Sail which is a light-weight command-line interface for interacting with Laravel's default Docker development environment. Configure a Bash alias that allows you to execute Sail's commands more easily: 

```
alias sail='bash vendor/bin/sail'
```
Once the Bash alias has been configured, you may execute Sail commands by simply typing `sail`.

```
sail up
```

6. On a new terminal run:

```
alias sail='bash vendor/bin/sail'
sail artisan key:generate
```

7. To setup the database restart the application by running:

```
sail down -v
sail up
```

## Database migration and seeding

To create the database table, run:

```
sail artisan migrate
```

Then run these commands to seed data

```
sail artisan db:seed --class=PlatformSeeder
sail artisan db:seed --class=ProductSeeder
sail artisan db:seed --class=PlatformProductSeeder
```

## Tests

To run feature tests run the command:

```
sail test
```

## Endpoints

- App URL: ```http://localhost```
- List Platforms (GET): ```http://localhost/api/stores```
- View Platform (GET): ```http://localhost/api/stores/{store}```
- Create new Platform (POST): ```http://localhost/api/stores```
- Delete Platform (Delete): ```http://localhost/api/stores/{stores}```
