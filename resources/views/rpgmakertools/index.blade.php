@extends('layouts.app')

@section('content')

    <td class="inhalt" width="432">
        <div width="412" align="center"><h2>RPG-Maker Tools</h2>
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
                                        <nobr>Letztes Update dieser Sektion: 03.04.2004</nobr>
                                    </div>
                                </td>
                                <td>
                                    <div align="right">
                                        <form method="get"
                                              action="/rpgmakertools">
                                            @csrf
                                            Ordnen nach:
                                            <select size="1" name="orderby" class="input">
                                                <option value="filename" @if($orderby == "filename") selected="selected" @endif>Name</option>
                                                <option value="filesize" @if($orderby == "filesize") selected="selected" @endif>Größe</option>
                                                <option value="created_at" @if($orderby == "created_at") selected="selected" @endif>Datum</option>
                                            </select>
                                            <select size="1" name="direction" class="input">
                                                <option value="DESC" @if($direction == "desc") selected="selected" @endif>Absteigend</option>
                                                <option value="ASC" @if($direction == "asc") selected="selected" @endif>Aufsteigend</option>
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
            <table width="412">
                <tbody>
                <tr>
                    <td class="element" width="25%">
                        <div align="center"><a href="{{ $item->filepath }}" class="home"><b>Download</b></a></div>
                    </td>
                    <td class="element" width="50%">
                        <div align="center">{{ $item->filename }}
                        </div>
                    </td>
                    <td class="element" width="25%">
                        <div align="center">
                            {{ $item->fileversion }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="element">
                        <div align="justify">{{ $item->filedescription }}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            @endforeach

            <table width="412" cellspacing="0" cellpadding="0">
                <tbody>
                <tr valign="bottom">
                    <td><img src="/images/aqua/box_anz.png" alt="" width="60" height="10" border="0"></td>
                    <td><img src="/images/aqua/bg_box.png" alt="" width="346" height="10" border="0"></td>
                    <td><img src="/images/aqua/box_ecke_o_r.png" alt="" width="6" height="5" border="0"></td>
                </tr>
                <tr>
                    <td colspan="3" class="navigation_innen">
                        <font class="seite_bef"><b>1 </b></font>

                    </td>
                </tr>
                </tbody>
            </table>
            <p align="center"><a href="#oben" class="home"><b>Top</b></a></p></div>
    </td>

@endsection
