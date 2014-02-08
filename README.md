Karhukoplan rekrytöinti sivu.

Pohjana bootstrap ja http://bootswatch.com/flatly/ teema.


Installation:
-------------
# cd ~/www/HakemusLomake
# npm install
# php composer.phar install
# grunt
# php /app/build.php (rakentaa taulut, mutta vaatii tietokannan olemassaolon.)

Hassu paikkaus build.php:ssä not null ja autoingrement eivät toimi :D
todo: Keksi näille jotain...


TODO:
=====
1. Refactroi koodia, menny vähän sekavaksi, kun niin paljon muutoksia
2. Twig -tiedostoissa kuraa, poista/siivoa
3. Korjaa build.php



hmm... mullon ikävä ormia ja Symfonin annotaatioita :(