@extends('layouts.app')

@section('content')
    <td width="432" class="inhalt">
        <div align="center" width="412" style="float:right"><h2>News/Updates</h2>
            <div align="right"><a href="rss.xml" class="home"><img src="images/aqua/xml.png" width="36"
                                                                   height="14" border="0"
                                                                   alt="RSS Newsfeeds (Updates)"></a></div>
            <table width="412" cellspacing="0" cellpadding="0">
                <tr valign="bottom">
                    <td><img src="./images/aqua/box_content.png" width="60" height="10" border="0" alt="">
                    </td>
                    <td><img src="./images/aqua/bg_box.png" width="346" height="10" border="0" alt=""></td>
                    <td><img src="./images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        <p align="justify">Hier dreht sich alles um den RPG-Maker 2000 von Yoji Ojima. Der
                            RPG-Maker 2000 ist ein Tool, mit dem du dir dein eigenes kleines Rollenspiel
                            erstellen kannst. Du findest hier alles, was du dazu brauchst! Eine gr&ouml;&szlig;ere
                            Beschreibung findest du <a href="/page/rpgmaker" class="home"><b>hier</b></a>.<br>
                            Du hast den Maker, wei&szlig;t aber nicht weiter? F&uuml;r alle die neu sind gibts
                            den <a href="indexf888.html?inhalt=kurs2" class="home"><b>Rpg-Maker Kurs</b></a>, zu
                            weiteren Fragen wendet euch doch bitte ans <a href="http://rpg2k.foren.4players.de/"
                                                                          class="home"><b>Forum</b></a>!<br/>
                            Diese Webseite verwendet Piwik, um deine Besuche anonym in einer Userstatistik zu
                            erfassen. <a
                                href="javascript:anz('http://forum.rpg2000.4players.de/piwik/index.php?module=CoreAdminHome&amp;action=optOut','Index',500,280)"
                                class="home">Weitere Informationen</a>.</p>
                    </td>
                </tr>
            </table>
            <br>

            @foreach($content as $t)
                <table width="412" cellspacing="0" cellpadding="0">
                    <tr valign="bottom">
                        <td><img src="images/aqua/box_news.png" width="60" height="10" border="0" alt=""></td>
                        <td><img src="images/aqua/bg_box.png" width="346" height="10" border="0" alt=""></td>
                        <td><img src="images/aqua/box_ecke_o_r.png" width="6" height="5" border="0" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="navigation_innen">
                            <p>
                                <b>{{ \Carbon\Carbon::parse($t->date)->format('d.m.Y') }}, <a name="n1">{{ $t->titel }}</a> - <a
                                        href="mailto:{{ $t->email }}" class="home">{{ $t->autor }}</a></b>
                            </p>
                            {!! $t->inhalt !!}
                        </td>
                    </tr>
                </table>
                <br>
            @endforeach
    </td><!-- nagios:ohdeeH2b -->
@endsection
