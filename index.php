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
                    <li style="visibility: hidden;"><a href="#hero-unit">hero-unit</a></li>
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
        <div class="hero-item">
            <div class="container">
                <h1>Karhukopla - Paras kesätyö ikinä!</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content-wrapper">
            <div class="page-header">
                <h1 id="about">About <small>Työpaikka</small></h1>
            </div>

            <p>Metropolia etsii teknikkan opiskelijoista Leppävaaran toimipisteeseen harjoittelijoita.</p>
            <p>Jos olet halukas tekemään alan töitä koulun ohella ja olet motivoitunut itse opiskelemaan ja kehittämään itsestään ammattitaitoisen ohjelmoijan.</p>
        </div>

        <div class="content-wrapper">
            <h2>Työnkuva</h2>
            <p>Karhukoplassa työskennellessäsi tulet ylläpitämään Metropolian tietotekniikan koulutusohjelman käyttämiä pilvipalveluita, kuten <a href="https://harjoittelu.edu.metropolia.fi/">Harjoittelu</a>, <a href="http://games.metropolia.fi/">Games</a>, <a href="https://webinssi.edu.metropolia.fi/login.php">Webinssi</a> ja monia muita. Osa ylläpidettävistä järjestelmistä on peräisin koululle oppilaiden kehittämien projekti- tai opinnäytetöiden tuloksena, näissä tilanteissa oppilaan valmistuttua kehitystyön jatkaminen on siirtynyt Karhukoplan vastuulle.</p>
            <p>Työtehtäviisi kuuluu myös täysin uusien sovellusten kehittäminen ja suunnittelu, joiden ideat tulevat lähinnä opettajilla tai heidän pyynnöstään.</p>
            <p>Karhukopla tarjoaa sinulle hyvän mahdollisuuden kehittää omaa osaamistasi muun muassa <a href="http://fi.wikipedia.org/wiki/Drupal">Drupal -sisällönhallintajärjestelmän</a>, <a href="http://fi.wikipedia.org/wiki/Wordpress">Wordpress -julkaisualustan</a>, <a href="http://symfony.com/">Symfony -PHP sovelluskehyksen</a> ja monien muiden kanssa ja tarjoaa sinulle modernit työkalut ja kehitysympäristön siihen.</p>
        </div>
        <div class="content-wrapper">
            <h2>Vaativuus ja haasteet</h2>
            <p>Tarvitset työssäsi laajaa osaamista erilaisista sovelluskehitys tekniikoista ja työkaluja.</p>

            <dl class="dl-horizontal">
                <dt>Jira</dt>
                <dd>Käytämme kehityksessä ketteriä kehitysmenetelmiä. Jiran avulla suunnittelemme ja seuraamme sovelluksen kehitystä:
                    Hallitsemme version julkaisuja, bugiraportteja ja viikottaisien Sprinttien sisältöä.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>SVN/Git</dt>
                <dd>Versiohallinta antaa mahdollisuuden keskitettyyn koodinhallintaan ja yhtäaikaiseen työskentelyyn.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Jenkins</dt>
                <dd>Automatisointi pavelu, joka buildaa projektit, ajaa testit ja päivittää testisivut jokaisen päivityksen jälkeen.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Palvelinylläpito</dt>
                <dd>Karhukoplalla on useita palvelimia: CI-pavelin, kehityspavelin, asiakastesti ja eristetty tuotantoympäristö</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Lecacy-koodi</dt>
                <dd>Ylläpitotehtäviä vanhempiin järjestelmiin, jotka ovat pääosin functionaalisista PHP:tä, Yleensä työtehtävät vaativat refactoroimista tai kantapäivityksiä.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Symfony</dt>
                <dd>PHP -ohjelmistokehys, joka antaa rungon sovellukselle ja tarjoaa paljon valmiita komponentteja: PHPUnit, Doctrine, Twig, jne...</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Testivetoinen kehitys</dt>
                <dd>TDD:n idea on kirjoittaa sovellukselle testejä ennen varsinaisen koodin kirjoittamista. <br />
                    Ja testien tulee mennä läpi, kun toiminnallisuus on toteutettu oikein.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Käyttöliittymät</dt>
                <dd>Käyttöliittymä suunnittelu on nykyisin iso osa ohjelmistokehitystä. Web-sovellukset käyttävät paljon eri javascript kirjastoja (jQuery, AngularJS, Bootstrap, Foundation), käyttöliittymäkehyksiä ja kehityksessä on huomioitava myös mobiililaitteet.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Zurb Foundation</dt>
                <dd>Responsiivinen käyttöliittymäkehys.</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Julkaisualustat</dt>
                <dd>Wordpress ja drupal</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>käyttäjäläheisyys</dt>
                <dd>Haluamme luoda tehokkaita järjestelmiä, joita on miellyttävä käyttää ja jotka palvevat meidän asikkaita: eli metropolian opiskelijoita ja henkilökuntaa.</dd>
            </dl>
        </div>

        <div class="content-wrapper">
            <h2 id="workHours">Työaika</h2>
            <p>Kevään aikana, tulet saamaan ohjeistusta ja konsultaatio tukea Ideja Oy:n toimesta.</p>
            <p>Työsuhteesi on osa-aikainen ja kevään aikana työmäärä on 20tuntia viikossa. Kesällä, koulun päätyttyä, jatkat täyspäiväisenä.</p>
        </div>
    </div>
    <div class="container">
        <div class="content-wrapper">

            <div class="page-header">
                <h1 id="form">Form <small>Työhakemuslomake</small></h1>
            </div>

            <form role="form" method="post" action="fill.php">
                <fieldset class="well">
                    <legend>Yhteystiedot</legend>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="fullName">Nimesi:</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="group">Luokkatunnus:</label>
                            <input type="email" class="form-control" id="group" name="group" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="email">Sähköposti:</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                    </div>
                </fieldset>
                <button type="button" id="continue-filling" class="btn-success">Jatka</button>
                <div class="rest-of-the-form">
                    <fieldset class="well">
                        <legend id="first-of-hidden-form-items">Osaaminen</legend>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="studies">Aiemmat opinnot:</label>
                                <textarea class="form-control" rows="3" id="studies" name="studies"></textarea>
                                <span class="help-block">Suoritetut ohjelmointikurssit, muut opinnot ja itseopiskelut</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="experiences">Web-ohjelmointi kokemus:</label>
                                <textarea class="form-control" rows="3" id="experiences" name="experiences"></textarea>
                                <span class="help-block">Lyhyesti, mitä olet tehnyt, millä tekniikoilla ja millaisia kehitystyökalut tunnet entuudestaan.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="alternative-experiences">Muu työkokemus & projektiosaaminen:</label>
                                <textarea class="form-control" rows="3" id="alternative-experiences" name="alternative-experiences"></textarea>
                                <span class="help-block">Missä projekteissa olet ollut mukana, onko sinulla jotain muuta ohjelmistoalan kokemusta?</span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="well">
                        <legend>Muut</legend>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="hobbies">Harrastukset:</label>
                                <textarea class="form-control" rows="3" id="hobbies" name="hobbies"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="skills">Erikoisosaaminen / muut taidot:</label>
                                <textarea class="form-control" rows="3" id="skills" name="skills"></textarea>
                                <span class="help-block">Esim. olet loistava animoija, piirtäjä, hallitset linux-ylläpidon erinomaisesti tai erikoistunut tietoturvaratkaisuihin</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="skills">Miksi haluat Metropolialle töihin?</label>
                                <textarea class="form-control" rows="3" id="skills" name="skills"></textarea>
                                <span class="help-block">Perustele lyhyesti, miksi juuri sinut tulisi palkata Metropolialle töihin Karhukoplaan?</span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="well">
                        <legend>Sosiaalinen media</legend>
                        <p>Voit halutessasi lisätä myös URL-osoitteen profiiliisi. Tieto ei ole pakollinen</p>
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                    <input type="text" class="form-control" id="linkedin" placeholder="https://www.linkedin.com/">
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input type="text" class="form-control" id="facebook" placeholder="https://www.facebook.com/">
                                </div>
                            </div>

                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="text" class="form-control" id="twitter" placeholder="https://twitter.com/">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bitbucket"></i></span>
                                    <input type="text" class="form-control" id="bitbucket" placeholder="https://bitbucket.org/">
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-github"></i></span>
                                    <input type="text" class="form-control" id="github" placeholder="https://github.com/">
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-stack-overflow"></i></span>
                                    <input type="text" class="form-control" id="stack-overflow" placeholder="https://stackoverflow.com/">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row">
                        <div class="col-lg-12">
                            <button type="reset" class="btn btn-danger">Tyhjennä</button>
                            <button type="submit" class="btn btn-success">Lähetä hakemus</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="content-wrapper">
            <div class="page-header">
                <h1 id="contact">Contact <small>Karhukoplan yhteystiedot</small></h1>
            </div>
            <p>
                <a href="mailto:karhukopla@metropolia.fi"><i class="fa fa-envelope-o"></i> karhukopla@metropolia.fi </a><br />
                Vanha maantie 6, 02600 Espoo<br />
                2. kerros<br />
                huone A2130
            </p>
        </div>
    </div>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                Copyright &copy 2014 Tommi Keskitalo
            </div>
        </div>
    </div>
    
    </body>
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#continue-filling').click(function() {
                $(this).hide(200, 'linear', function() {
                    $('.rest-of-the-form').show(600);
                });

            });
        });
    </script>
</html>