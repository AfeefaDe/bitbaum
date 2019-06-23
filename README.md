# Bits und Bäume – Conference Website

## TODO
prozedere
- email nach verifizierung löschen? 2 probleme:
  - benachrichtigung über veröffentlichung
  - widerrufsrecht

allgemein
- open graph
- orga website link setzen
- einleitung auf forderungen-seite kürzen

englisch übersetzen
- startseite

deployment
- config files anlegen: auth.ini / db.ini / smtpconf.ini / template_vars.php
- template vars durchgehen
  - "Deine kontaktaufnahme" ?? wird das gebraucht?

mobile
- ...

## dev setup
```
# install node dependencies
$ npm install
# starts sass compiling and browsersync tasks
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
