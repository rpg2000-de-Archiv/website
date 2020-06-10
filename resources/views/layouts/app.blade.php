<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="padding:0px; margin:0px;">
<a name="oben"></a>
<br>
<div align="center">
    <!-- Oben -->
    <table cellspacing="0" cellpadding="0" width="800">
        <tr valign="top">
            <td colspan="5" class="oben" height="6" width="100%">
                <div align="right" style="font-size:4px">&nbsp;</div>
            </td>
            <td class="rechts" width="6"><img src="/images/aqua/ecke_o_r.png" width="6" height="6" border="0" alt="">
            </td>
        </tr>
        <tr>
            <td class="head" colspan="6">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div style="float:left; width:400px;">
                                <table cellspacing="0" cellpadding="0">
                                    <tr valign="bottom">
                                        <td><img src="/images/aqua/box_rpg2000.png" width="60" height="10" border="0"
                                                 alt=""></td>
                                        <td><img src="/images/aqua/bg_box.png" width="236" height="10" border="0" alt="">
                                        </td>
                                        <td><img src="/images/aqua/box_ecke_o_r.png" width="6" height="5" border="0"
                                                 alt=""></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="komplett"><img src="/images/aqua/logo.png" width="300"
                                                                              height="60" border="0" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                            <a href="http://forum.rpg2000.4players.de/viewtopic.php?t=72262" class="home"><span
                                    style="font-family:Tahoma;font-style:italic;font-size:large;">Headercontest reloaded!</span><br>Contest
                                abgeschlossen. Der neue Header bald hier!</a>
                        </td>
                        <td width="9">&nbsp;</td>
                        <td>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div align="center" style="padding:3px"><!--Superbanner TAG-->
                    <div id="5930611"></div>
                </div>
            </td>
        </tr>
        <!-- /Oben -->

        @include('layouts._partials.nav_top')

        <tr>
            <td colspan="6">
                <div align="right" style="font-size:3px">&nbsp;</div>
            </td>
        </tr>
        <!-- Mitte -->
        <tr valign="top">
            @include('layouts._partials.nav_left')
            <td width="9">&nbsp;</td>
            @yield('content')
            <td width="9">&nbsp;</td>
            <td width="196" class="rand_r"><p class="element" align="center">
                    @include('layouts._partials.nav_right')
            </td>
            <td width="6" class="rand_r_r">&nbsp;</td>
        </tr>
        <!-- /Mitte -->
        <tr>
            <td colspan="6">
                <div align="right" style="font-size:3px">&nbsp;</div>
            </td>
        </tr>
        <!-- Bottom -->
        <tr>
            <td class="bottom_o" colspan="6" height="35">Diese Seite ist optimiert f&uuml;r den IE ab 5.x & Mozilla 1.4
                (c) by Brainstormer und dem RPG-Maker Quartier Staff<br>
                Design (c) by Eiskender & coded by Brainstormer - Best View: 1024*768+
            </td>
        </tr>
        <tr valign="top">
            <td class="bottom_u" colspan="5" height="6">
                <div align="right" style="font-size:4px">&nbsp;</div>
            </td>
            <td><img src="designs/Blau/pics/ecke_u_r.png" width="6" height="6" border="0" alt=""></td>
        </tr>
        <!-- /Bottom -->
    </table>
    <br>
</div>

<!--Layer TAG-->
<div id="5930609"></div>

<script>
    ADTECH.enqueueAd(5930614);
    ADTECH.enqueueAd(5930609);
    ADTECH.enqueueAd(5930611);
    ADTECH.enqueueAd(5930612);
    ADTECH.enqueueAd(5930613);
    ADTECH.enqueueAd(5930610);
    ADTECH.executeQueue();
</script>
</body>

</html>
