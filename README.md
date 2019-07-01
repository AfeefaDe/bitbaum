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
