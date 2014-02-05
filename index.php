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
                    <li><a href="#about"><i class="fa fa-home"></i> Tietoa meistä</a></li>
                    <li><a href="#form"><i class="fa fa-pencil-square-o"></i> Lomake</a></li>
                    <li><a href="#contact"><i class="fa fa-envelope-o"></i> Yhteystiedot</a></li>
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
                <h1 id="about">Tietoa meistä <small>avoimet työpaikat</small></h1>
            </div>

            <p class="lead">Metropolia etsii kolmea teknikkan toisenvuoden opiskelijaa Leppävaaran toimipisteeseen harjoittelijoiksi.</p>
            <p>Toimisto sijaitsee A puolen toisessa kerroksessa Metropolian leppävaaran toimitiloissa. Työnkuva on Web-sovellusten kehittäminen oppimisen tueksi. Pääset mahdollisuuden toteuttamaan itseäsi ja saat laajan kokemuksen eri ohjelmistotekniikoista. Työskentely on monipuolista ja voit itse vaikuttaa siihen, mitä ja miten teet.</p>
            <p>Pääset alottamaan työt heti ja kesällä sinulle tarjotaan mahdollisuutta työskennellä myös täyspäiväisesti.</p>
            <p>Miksi hakea?</p>
            <ul>
                <li>Saat ohjelmistoalan työkokemusta</li>
                <li>Joustava työaika</li>
                <li>Itseohjautuvaa ryhmätyöskentelyä</li>
                <li>Etätyömahdollisuudet</li>
                <li>Voit kontrolloida omaa työtaakkaa jaksoittain</li>
                <li>Kuukausipalkka ei vaikuta Kelan opintotuen saantiin (vuositasolla alle tukirajan)</li>
                <li>Työ tukee opintoja, koska pääset soveltamaan oppimaasi heti oikeassa työympäristössä</li>
                <li>20 tuntia viikossa, eli 4tuntia päivässä</li>
            </ul>
        </div>

        <div class="content-wrapper">
            <h2>Työnkuva</h2>
            <p>Karhukoplassa työskennellessäsi tulet ylläpitämään Metropolian tietotekniikan koulutusohjelman käyttämiä pilvipalveluita, kuten <a href="https://harjoittelu.edu.metropolia.fi/">Harjoittelu</a>, <a href="http://games.metropolia.fi/">Games</a>, <a href="https://webinssi.edu.metropolia.fi/login.php">Webinssi</a>. Osa ylläpidettävistä järjestelmistä on peräisin koululle oppilaiden kehittämien projekti- tai opinnäytetöiden tuloksena, näissä tilanteissa oppilaan valmistuttua kehitystyön jatkaminen on siirtynyt Karhukoplan vastuulle.</p>
            <p>Työtehtäviisi kuuluu myös täysin uusien sovellusten kehittäminen ja suunnittelu, joiden ideat tulevat lähinnä opettajilla tai heidän pyynnöstään.</p>
            <p>Karhukopla tarjoaa sinulle hyvän mahdollisuuden kehittää omaa osaamistasi muun muassa <a href="http://fi.wikipedia.org/wiki/Drupal">Drupal -sisällönhallintajärjestelmän</a>, <a href="http://fi.wikipedia.org/wiki/Wordpress">Wordpress -julkaisualustan</a>, <a href="http://symfony.com/">Symfony -PHP sovelluskehyksen</a> ja tarjoaa sinulle modernit työkalut ja kehitysympäristön siihen.</p>
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
    </div>
    <div class="container">
        <div class="content-wrapper">

            <div class="page-header">
                <h1 id="form">Lomake</h1>
            </div>

            <form role="form" method="post" action="fill.php">
                <div class="well">
                    <fieldset>
                    <legend>Yhteystiedot</legend>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="fullName">Nimesi:</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Kimmo Koodari"/>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="group">Luokkatunnus:</label>
                            <input type="email" class="form-control" id="group" name="group" placeholder="TT12S1E"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="userid">käyttäjätunnus:</label>
                            <input type="text" class="form-control" id="userid" name="userid" placeholder="kimmokood" />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Sähköposti:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="kimmo.koodari@metropolia.fi" />
                        </div>
                    </div>
                </fieldset>
                </div>
                <button type="button" id="continue-filling" class="btn-success">Jatka</button>
                <div class="rest-of-the-form">
                    <div class="well">
                        <fieldset>
                            <legend id="first-of-hidden-form-items">Osaaminen</legend>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="studies">Aiemmat opinnot:</label>
                                    <textarea class="form-control" rows="3" id="studies" name="studies" placeholder="
Suoritin ICT-asentajan ammattitutkinnon, jonka aikana opiskelin ohjelmoinnin perusteet. Metropoliassa olen suorittanut Javan ja web-ohjelmoinnin kursseja.
                                    "></textarea>
                                    <span class="help-block">Suoritetut ohjelmointikurssit, muut opinnot ja itseopiskelut</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="experiences">Web-ohjelmointi kokemus:</label>
                                    <textarea class="form-control" rows="3" id="experiences" name="experiences" placeholder="
Web-ohjelmointi kurssilla tein projektityönä HTML5-sivun, jonka suunnittelussa keskityin mobiililaitteiden yhteensopivuuteen. Sivusto löytyy nykyisin osoitteesta: http://users.metropolia.fi/~kimmokood/projekti
                                    "></textarea>
                                    <span class="help-block">Lyhyesti, mitä olet tehnyt, millä tekniikoilla ja millaisia kehitystyökalut tunnet entuudestaan.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="alternative-experiences">Muu työkokemus & projektiosaaminen:</label>
                                    <textarea class="form-control" rows="3" id="alternative-experiences" name="alternative-experiences" placeholder="
Olen työskennellyt osa-aikaisena puhelinmyyjänä kaksi vuotta. Lisäksi Kävin Innovaatiokurssilla Belgiassa, jonka aikana selvitimme ympäristön vaikutusta oppimiseen.
                                    "></textarea>
                                    <span class="help-block">Missä projekteissa olet ollut mukana, onko sinulla jotain muuta ohjelmistoalan kokemusta?</span>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="well">
                        <fieldset>
                        <legend>Muut</legend>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="hobbies">Harrastukset:</label>
                                <textarea class="form-control" rows="3" id="hobbies" name="hobbies" placeholder="
Olen harrastanut 7-vuotta piirtämistä ja viime vuonna aloitin opettelemaan korttitemppuja.
                                "></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="skills">Erikoisosaaminen / muut taidot:</label>
                                <textarea class="form-control" rows="3" id="skills" name="skills" placeholder="
Olen sosiaalinen ja avoin ihminen. Tulen toimeen hyvin eri persoonien kanssa ja olen hyvä tuottamaan moninaista grafiikkaa.
                                "></textarea>
                                <span class="help-block">Esim. olet loistava animoija, hallitset linux-ylläpidon erinomaisesti tai erikoistunut tietoturvaratkaisuihin</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="skills">Miksi haluat Metropolialle töihin?</label>
                                <textarea class="form-control" rows="3" id="skills" name="skills" placeholder="
Olen ahkera ja korkeasti motivoitunut oppimaan. Haluan työskennellä web-graafikokkona ja minulla on aina ollut korkea työmoraali. Uskon että kykenen kirjoittamaan laadukasta koodia.
                                "></textarea>
                                <span class="help-block">Perustele lyhyesti, miksi juuri sinut tulisi palkata Metropolialle töihin Karhukoplaan?</span>
                            </div>
                        </div>
                    </fieldset>
                    </div>

                    <div class="well">
                        <fieldset>
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
                    </div>

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
                <h1 id="contact">Yhteystiedot <small>Karhukopla</small></h1>
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