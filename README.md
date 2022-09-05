



# Old Bits und Bäume – Conference Website

<br>

The new (by 2022-08) website is maintained in <https://github.com/bitsundbaeume/bits-und-baeume.org>

This repo is leagacy.

<br>


<br>



<br>


<br>

## dev setup
**quick:**
```
# start php server, browsersync and app building via..
$ ./work.sh
```

**detailed:**
```
# install node dependencies
$ npm install

# make sure to have mysql server running loaded with a proper bitbaum db

# serve via php server
$ php -S localhost:8010 -t public/

# starts sass compiling and opens browser window with browsersync
$ npm run dev

# install composer dependencies
$ cd public/master
$ composer install
```

## live setup
```
$ npm install
$ npm run build
$ cd public/message
$ composer install
```
- adapt `.example` configuration files in `public/config`
	- `db.ini` is used to connect to the supporters-database
	- `secrets.ini` is used to integrate the twitter feed
	- `auth.ini` is for authenticating the form
- serve `public/`


prozedere
- email nach verifizierung löschen? 2 probleme:
  - benachrichtigung über veröffentlichung
  - widerrufsrecht

