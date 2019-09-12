# Bits und Bäume – Conference Website

## TODO
- open graph
- listenansicht kompakter darstellen und unterzeichner durchnummerieren; vetl. nochmal gesamtanzahl oben einblenden
- einleitung auf forderungen-seite kürzen

prozedere
- email nach verifizierung löschen? 2 probleme:
  - benachrichtigung über veröffentlichung
  - widerrufsrecht


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
- serve `public/`
