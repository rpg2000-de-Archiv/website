@if(Route::current()->uri() == '/')
    <a href="javascript:einblenden('potm');" class="home">PotM zeigen</a></p>
    <div align="center" id="potm">
        <table cellspacing="0" cellpadding="0">
            <tr valign="bottom">
                <td><img src="/images/aqua/box_potm.png" width="105" height="10" border="0" alt="">
                </td>
                <td><img src="/images/aqua/bg_box.png" width="51" height="10" border="0" alt=""></td>
                <td><img src="/images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="navigation_innen">
                    <a href="indexdcbe-2.html?inhalt=potm&amp;nummer=24&amp;modus=1">
                        <p align="center"><img src="gallerie/potm/Vorschau/24.png" height="80" border="0">
                        </p>
                    </a>
                </td>
            </tr>
        </table>
        <p>
        <div class="element" align="center"><a href="javascript:ausblenden('potm');" class="home">PotM
                verstecken</a></div>
    </div>
    <br>
    <div class="element" align="center"><a class="home" href="javascript:einblenden('sn');">Communitynews
            zeigen</a></div>
    </p>
    <div id="sn">
        <p align="right"><a href="rss_sn.xml" class="home"><img src="/images/aqua/xml.png" width="36"
                                                                height="14" border="0"
                                                                alt="RSS Newsfeeds (Szenennews)"></a></p>
        <table cellspacing="0" cellpadding="0">
            <tr valign="bottom">
                <td><img src="/images/aqua/box_szenennews.png" width="75" height="10" border="0"
                         alt=""></td>
                <td><img src="/images/aqua/bg_box.png" width="135" height="10" border="0" alt=""></td>
                <td><img src="/images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="navigation_innen">
                    <hr>
                    <b><a name="sn1">Rpg-Maker-Artikel</a>, 22.10.2006</b>
                    <hr>
                    Auf oldschool-gaming.de gibt es zur Zeit einen netten Artikel zur Rpg-Maker-Reihe zu
                    lesen. Dieser richtet sich zwar hauptsächlich an Leute, die den Maker nicht kennen, ist
                    aber nett geschrieben und vergleicht die Vorzüge von 2000, 2003 und XP.<br/>
                    <br/>
                    <a href="http://wishkah.beeven.de/index.php?type=special&amp;area=1&amp;p=articles&amp;id=12"
                       class="home" target="ZIEL"><b>Zum Artikel</b></a>!
                    <hr>
                    <i>Posted by: Ratti</i>
                </td>
            </tr>
        </table>
        <br>
        <table cellspacing="0" cellpadding="0">
            <tr valign="bottom">
                <td><img src="/images/aqua/box_szenennews.png" width="75" height="10" border="0"
                         alt=""></td>
                <td><img src="/images/aqua/bg_box.png" width="135" height="10" border="0" alt=""></td>
                <td><img src="/images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="navigation_innen">
                    <hr>
                    <b><a name="sn2">Neues von Heinsen Hill</a>, 04.08.2006</b>
                    <hr>
                    Endlich Frischfleisch! Steve, der Macher des von RPG2000.de betreuten Spiels <a
                        href="http://www.heinsenhill.de.vu/" class="home"
                        target="http://www.heinsenhill.de.vu"><b>Heinsen Hill</b></a> hat uns mal wieder mit
                    neuen Screenshots, einer kleinen Kolumne zur Entstehung des Heinsen Hills, Artworks und
                    einem Entwicklertagebuch verwöhnt.<br/>
                    Fans des düsteren Knüllers werden sich freuen.<br/>
                    <br/>
                    <a href="http://forum.rpg2000.4players.de/viewtopic.php?p=1183729#1183729" class="home"
                       target="http://forum.rpg2000.4players.de/viewtopic.php?p=1183729#1183729"><b>Zum
                            Thread!</b></a>
                    <hr>
                    <i>Posted by: Stööö</i>
                </td>
            </tr>
        </table>
        <br>
        <table cellspacing="0" cellpadding="0">
            <tr valign="bottom">
                <td><img src="/images/aqua/box_szenennews.png" width="75" height="10" border="0"
                         alt=""></td>
                <td><img src="/images/aqua/bg_box.png" width="135" height="10" border="0" alt=""></td>
                <td><img src="/images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="navigation_innen">
                    <hr>
                    <b><a name="sn3">PotM Mai online!</a>, 04.05.2006</b>
                    <hr>
                    Nachdem das April-PotM leider geschlampt wurde, gibt es dafür diesen Monat wieder einen
                    Leckerbissen.
                    <hr>
                    <i>Posted by: Brainstormer</i>
                </td>
            </tr>
        </table>
        <br>
        <div class="element"><a href="siteadmin/adminbereich.html" class="home" target="admin">Adminzone</a>
        </div>
        <p align="center"><a class="home" href="javascript:ausblenden('sn');">Communitynews verstecken</a>
        </p>
    </div>
    <script type="text/javascript">
        ausblenden('sn');
    </script><!--Skyscraper TAG-->
    <div id="5930610"></div>
@else
    Debug: <br>
    {{ Request::getPathInfo() }}
    <table width="156" cellspacing="0" cellpadding="0">
        <tbody>
        <tr valign="bottom">
            <td><img src="/images/aqua/box_hinweis.png" alt="" width="60" height="10" border="0"></td>
            <td><img src="/images/aqua/bg_box.png" alt="" width="96" height="10" border="0"></td>
            <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
        </tr>
        <tr>
            <td colspan="3" class="navigation_innen">
                <div align="center"><a href="javascript:einblenden('rand');" class="home">Zeige Beschreibung</a></div>
                <div id="rand" style="display: block;">
                    <hr>
                    {{-- Anfang des Inhalts --}}

                    {!! @\App\Models\Rightnav::whereRoute(Request::getPathInfo())->first()->content !!}

                    {{-- Ende des Inhalts --}}
                    <hr>
                    <div align="center"><a class="home" href="javascript:ausblenden('rand');">Verstecke Beschreibung</a>
                    </div>
                    <script type="text/javascript">
                        ausblenden('rand');
                    </script>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endif
