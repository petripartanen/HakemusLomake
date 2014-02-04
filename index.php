<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Työhakemus">
        <meta name="author" content="Tommi Keskitalo">

        <title>työpaikka hakemus</title>

        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 
        <!-- Add custom CSS here -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".main-navbar">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hakemus</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right main-navbar">
                <ul class="nav navbar-nav">
                    <li style="visibility: hidden"><a href="#hero-unit"></a></li>
                    <li><a href="#about"><i class="fa fa-home"></i> About</a></li>
                    <li><a href="#form"><i class="fa fa-pencil-square-o"></i> Form</a></li>
                    <li><a href="#contact"><i class="fa fa-envelope-o"></i> Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="hero-unit" id="hero-unit">
        <div class="container">
            <h1>Karhukopla - Paras kesätyö</h1>
        </div>
    </div>
    <div class="container">
        <div class="page-header">
            <h1 id="about">About <small>Työnkuva</small></h1>
        </div>

        <p>Karhukoplassa työskennellessäsi tulet ylläpitämään Metropolian tietotekniikan koulutusohjelman käyttämiä pilvipalveluita, kuten <a href="https://harjoittelu.edu.metropolia.fi/">Harjoittelu</a>, <a href="http://games.metropolia.fi/">Games</a>, <a href="https://webinssi.edu.metropolia.fi/login.php">Webinssi</a> ja monia muita. Osa ylläpidettävistä järjestelmistä on peräisin koululle oppilaiden kehittämien projekti- tai opinnäytetöiden tuloksena, näissä tilanteissa oppilaan valmistuttua kehitystyön jatkaminen on siirtynyt Karhukoplan vastuulle.</p>
        <p>Työtehtäviisi kuuluu myös täysin uusien sovellusten kehittäminen ja suunnittelu, joiden ideat tulevat lähinnä opettajilla tai heidän pyynnöstään. Karhukopla tarjoaa sinulle laajan mahdollisuuden kehittää omaa osaamistasi muun muassa <a href="http://fi.wikipedia.org/wiki/Drupal">Drupal -sisällönhallintajärjestelmän</a>, <a href="http://fi.wikipedia.org/wiki/Wordpress">Wordpress -julkaisualustan</a>, <a href="http://symfony.com/">Symfony -PHP sovelluskehyksen</a> parissa ja tarjoaa sinulle modernit työkalut ja kehitysympäristön.</p>

        <h3>Etsimme:</h3>
        <p>Henkilöä joka on motivoitunut itse opiskelemaan ja kehittämään itsestään ammattitaitoisen ohjelmoijan. Oletamme kuitenkin hakijan osaavan ohjelmoinnin perusteet ja peruskäsitteet.</p>

        <h3>Vaativuus ja haasteet</h3>
        <p>Tarvitset työssäsi laajaa osaamista erilaisista sovelluskehitys tekniikoista.</p>

        <dl class="dl-horizontal">
            <dt>Jira</dt>
            <dd>Ketterät kehitysmenetelmät, Koodin katselmointi, suunnittelu <br/>... ja dokumentointi</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>SVN/Git</dt>
            <dd>Keskitetty koodinhallinta, Continuous Integration / SVN /Git <br />
                CI-palvelimen käyttö & versionhallinta. Buildien hallinta ja raportointi (ja niiden ymmärtäminen)</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Palvelinylläpito</dt>
            <dd>Karhukoplalla on omia palvelimia: CI-pavelin, kehityspavelin ja eristetty tuotantoympäristö</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Symfony2</dt>
            <dd>Uusien projektien kanssa olemme käyttäneet hyvien ohjelmistotapojen mukaisia käytäntöjä. <br />
                Testausympäristö (Symfony2 ja Zend -projektit): PHPunit, testien kirjoittaminen ja ajaminen</dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Lecacy-koodi</dt>
            <dd>Lecacy järjestelmien ylläpito vaatii MySQL-osaamista ja perus funktionaalista PHP:tä</dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Käyttöliittymät</dt>
            <dd>Javascript, grafiikka, layout-suunnitelu</dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Julkaisualustat</dt>
            <dd>Wordpress, drupal ja Joomla</dd>
        </dl>

        <div class="page-header">
            <h1 id="form">Form <small>Työhakemuslomake</small></h1>
        </div>

        <form role="form">
            <h3>Yhteystiedot</h3>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="fullName">Nimesi:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Anna Nimi">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="group">Luokkatunnus:</label>
                    <input type="email" class="form-control" id="group" name="group" placeholder="Anna luokkatunnus">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="email">Sähköposti:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Anna sähköposti">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="studentId">Opiskelijanumerosi:</label>
                    <input type="email" class="form-control" id="studentId" placeholder="Anna opiskelijanumero">
                </div>
            </div>

            <h3>Yleistä</h3>
            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="hobbies">Harrastukset:</label>
                    <textarea class="form-control" rows="3" id="hobbies" name="hobbies"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="studies">Aiemmat opinnot:</label>
                    <textarea class="form-control" rows="3" id="studies" name="studies"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="skills">Erikoisosaaminen:</label>
                    <textarea class="form-control" rows="3" id="skills" name="skills"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Varmistan, että antamani tiedot pitävät paikkansa.
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-right">
                    <button type="submit" class="btn btn-default">Lähetä hakemus</button>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4 id="contact">Karhukopla</h4>
                    <p>
                        <a href="mailto:karhukopla@metropolia.fi"><i class="fa fa-envelope-o"></i></a> karhukopla@metropolia.fi <br />
                        Vanha maantie 6, 02600 Espoo<br />
                        2. kerros<br />
                        huone A2130
                    </p>
                </div>
                <div class="col-sm-6 text-right">
                    copyright &copy Tommi Keskitalo, 2014
                </div>
            </div>
        </div>
    </footer>
    </body>
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>