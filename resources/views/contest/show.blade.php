@extends('layouts.app')

@section('content')

    <td class="inhalt" width="432">
        <div width="412" align="center"><h2>{{ $content->title }}</h2>
            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_regeln.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td width="50%" valign="top">
                                    {!! $content->rules !!}
                                </td>
                                <td width="50%">
                                    <div align="center">
                                        <a href="/images/contests/{{ $content->id }}/{{ $content->rules_image }}" target="BILD" class="home"><img
                                                src="/images/contests/{{ $content->id }}/{{ $content->rules_image }}" name="art" alt="[Klick zum Vergrößern]"
                                                border="0" width="180px"></a>
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
            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_hinweis.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        <div align="justify">{!! $content->notes !!}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_abgabe.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        <p align="justify">{!! $content->submission_notes !!}</p>
                        <div align="center">
                            <table width="100%">
                                <tbody>
                                <tr>
                                    <td class="element" width="10%">
                                        <div align="center">Platz</div>
                                    </td>
                                    <td class="element" width="35%">
                                        <div align="center">Name</div>
                                    </td>
                                    <td class="element" width="35%">
                                        <div align="center">Einsendung</div>
                                    </td>
                                    <td class="element" width="20%">
                                        <div align="center">Punkte</div>
                                    </td>
                                </tr>
                                @foreach($content->submissions() as $item)
                                <tr>
                                    <td class="element" width="10%">
                                        <div align="center">{{ $item->place }}</div>
                                    </td>
                                    <td class="element" width="35%">
                                        <div align="center">{{ $item->username }}</div>
                                    </td>
                                    <td class="element" width="35%">
                                        <div align="center">
                                            <a href="/images/contests/{{ $content->id }}/{{ $item->submission1url }}" class="home"><b>{{ $item->submission1title }}</b></a>
                                        </div>
                                    </td>
                                    <td class="element" width="20%">
                                        <div align="center">{{ $item->points }}/10</div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_preise.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        {!! $content->reward !!}
                    </td>
                </tr>
                </tbody>
            </table>
            <p align="center"><a href="#oben" class="home"><b>Top</b></a></p></div>
    </td>
@endsection
