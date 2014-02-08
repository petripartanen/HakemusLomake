Karhukoplan rekrytöinti sivu.

Pohjana bootstrap ja http://bootswatch.com/flatly/ teema.


Asennus:
-------------
# cd ~/www/HakemusLomake
# npm install
# php composer.phar install
# grunt
# php /app/build.php (rakentaa taulut, mutta vaatii tietokannan olemassaolon.)

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
4. formin validaattorien translatiot eivät toimi
5. Vie tuotantoon ja korjaa sisältö about-kohtaan oikeaksi.



hmm... mullon ikävä ormia ja Symfonin annotaatioita :(