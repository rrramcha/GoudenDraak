@extends('layout.layout')

@section('content')
    <html>
    <head>
        <title>The Golden Dragon</title>
        <style>
            body {background-color: darkred; margin: 15px; margin-left: 50px; margin-right: 50px}
            td {padding: 0px;}

            @font-face {
                font-family: 'chinese_takeawayregular';
                src: url('resources/fonts/chinesetakeaway-webfont.woff2') format('woff2'),
                url('resources/fonts/chinesetakeaway-webfont.woff') format('woff');
                font-weight: normal;
                font-style: normal;
            }

            a {text-decoration: none;
                color: yellow;}
        </style>
    </head>

    <body>
    <table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
        <tr style="height:50px;background-color:red">
            <td style="text-align:center;width:30%;color:yellow;font-size:30px">
                <img style="vertical-align: middle;" src="{{ asset('storage/pictures/dragon-small.png')}}" alt="Golden Dragon" height="50px">
                <span style="font-family:'chinese_takeawayregular'">De Gouden Draak</span>
                <img style="vertical-align: middle;" src="{{ asset('storage/pictures/dragon-small-flipped.png')}}" alt="Golden Dragon" height="50px">
            </td>
            <td>
                <a href="{{route('menu')}}" style="color:yellow;font-weight:bold;text-decoration: none;">
                    <marquee behavior="scroll" direction="left">
                        Welkom bij de Gouden Draak
                    </marquee>
                </a>
            </td>
            <td style="text-align:center;width:30%;color:yellow;font-size:30px">
                <img style="vertical-align: middle;" src="{{ asset('storage/pictures/dragon-small.png')}}" alt="Golden Dragon" height="50px">
                <span style="font-family:'chinese_takeawayregular'">De Gouden Draak</span>
                <img style="vertical-align: middle;" src="{{ asset('storage/pictures/dragon-small-flipped.png')}}" alt="Golden Dragon" height="50px">
            </td>
        </tr>
    </table>
    <table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
        <tr style="height:7px;background-color:red">
            <td colspan="9">
            </td>
        <tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            </td>
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px"></td>
            <td></td>
            <td style="width:25px"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:50px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
            <td style="width:25px;"></td>
            <td style="width:25px;"></td>
            <td style="text-align:center">
                <!-- CONTENT HERE! -->
                <table width=100%>
                    <tr>
                        <td colspan='5' style="text-align: center">
                            <p>
                                <span style="font-size:40px;font-weight:bold;color:yellow">Chinees Indische Specialiteiten</span><br>
                                <span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>
                            </p>
                        </td>
                    </tr>
                    <tr style="padding-top:50px">
                        <td colspan="3" height="50px">
                        </td>
                    </tr>
                    <tr style="padding-top:50px">
                        <td width="50px">
                        </td>
                        <td align="center" style='font-size:5;border:1px solid black;background:floralwhite'> <br>
                            <h3>Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.<br>
                                Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.</h3>
                            <br>
                            <h2><u>Speciale Studentenaanbieding</h2></u>
                            <h1>Chinese Rijsttafel (2 personen)</h1>
                            <h3>
                                Maak een keuze uit 3 van onderstaande keuzegerechten:<br><br>
                                <table width="60%">
                                    <tr>
                                        <td width="40%" style="text-align:right">
                                            Koe Loe Yuk
                                        </td>
                                        <td width="20%">
                                        </td>
                                        <td width="40%">
                                            Foe Yong Hai
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right">
                                            Tjap Tjoy
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            Garnalen met Gebakken Knoflook
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right">
                                            Babi Pangang
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            Kipfilet in Zwarte Bonen saus
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                Met witte rijst. (Nasi of bami voor meerprijs mogelijk.)
                            </h3>
                            <h1>Prijs: €21,00</h1>
                        </td>
                        <td width="50px">
                        </td>
                    </tr>
                </table>
                <br>
                <div text-align="center"><a href="paginas/contact_new.html">Naar Contact</a></div>
            </td>
            <td style="width:25px;"></td>
            <td style="width:25px;"></td>
            <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px"></td>
            <td></td>
            <td style="width:25px"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            </td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow"></td>
            <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;"></td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:7px;background-color:red">
            <td colspan="9">
            </td>
        <tr>
    </table>
    </body>
    </html>

@endsection
