Karhukoplan rekrytöinti sivu.

Pohjana bootstrap ja http://bootswatch.com/flatly/ teema.


Asennus:
-------------
1. cd ~/www/HakemusLomake
2. npm install
3. php composer.phar install
4. grunt
5. bower install
6. php /app/build.php (rakentaa taulut, mutta vaatii tietokannan olemassaolon.)

Hassu paikkaus build.php:ssä not null ja autoingrement eivät toimi :D Keksi näille jotain...


Kantatunnukset:
app/config.php :
    'dbname' => 'hakemus',
    'user' => 'hakemus',
    'password' => 'hakemus',

TODO:
=====
1. Refactroi koodia, menny vähän sekavaksi, kun niin paljon muutoksia
2. Twig -tiedostoissa kuraa, poista/siivoa
3. Korjaa build.php
4. Vie tuotantoon ja korjaa sisältö about-kohtaan oikeaksi.



hmm... mullon ikävä ormia ja Symfonin annotaatioita :(