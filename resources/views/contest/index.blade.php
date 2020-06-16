@extends('layouts.app')

@section('content')

    <td class="inhalt" width="432">
        <div width="412" align="center"><h2>Contests</h2>
            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_anz.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">

                        <table width="95%">
                            <tbody>
                            <tr>
                                <td width="50%">
                                    <div align="left">
                                        Seite: <font class="seite_bef"><b>1 </b></font>
                                        <br>
                                        <nobr>Letztes Update dieser Sektion: 14.03.2005</nobr>
                                    </div>
                                </td>
                                <td>
                                    <div align="right">
                                        <form method="post"
                                              action="http://rpg2000.4players.de/index.php?inhalt=contest&amp;seite=&amp;limit1=0&amp;seite=1">
                                            <select size="1" name="order" class="input">
                                                <option value="name">Name</option>
                                                <option value="date" selected="">Datum</option>
                                            </select>
                                            <select size="1" name="direction" class="input">
                                                <option value="DESC" selected="">Absteigend</option>
                                                <option value="ASC">Aufsteigend</option>
                                            </select>
                                            <input type="submit" value="Ok" class="input">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            @foreach($content as $item)
            <table width="416">
                <tbody>
                <tr>
                    <td class="element">
                        <div align="justify">
                            <span style="float:left;"><b>{{ $item->title }} - {{ $item->status }}</b></span><b>
                            </b>
                            <div align="right"><b><a href="#oben" class="home">Top</a></b></div>
                            <br>
                            {{ $item->shortdescription }}<br>
                            <a href="{{ action('ContestController@show', [$item->id]) }}" class="home"><b>Mehr
                                    Infos...</b></a><br>
                            <br>
                            Teilnehmer: {{ $item->usercount }}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            @endforeach

            <p align="center"><a href="#oben" class="home"><b>Top</b></a></p></div>
    </td>

@endsection
