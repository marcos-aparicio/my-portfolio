# my-portfolio

Simple vanila website to showcase previous experiences and skills, will be refactored soon

### Requirements

1. MySQL
2. PHP

### Manual Installation


1. clone the repo and change the .env file to your according mysql credentials

```bash
git clone https://github.com/marcos-aparicio/my-portfolio.git
cd my-portfolio
cp .env.sample .env
# change the .env file using your prefered text editor
```

2. Create or use the sql credentials that you specified on the .env file to setup the database, make sure to update the `database/setup.sql` database name before this step

```bash
# from the repo's root
cd database
mysql -u your_username -p your_password -h your_host < setup.sql
```

3. Setup cron jobs for the `crons/updateDB.php` file or run it only one time

```bash
# from repo's root
php ./crons/updateDB.php
```

4. Start the server
```bash
# you can use whatever method you like here, i am going to use php
# from repo's root
php localhost:8000 -S
```
