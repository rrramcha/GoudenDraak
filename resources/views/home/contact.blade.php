@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row mt-5 pt-5 ">
        <div class="col-md-8 google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.432987711052!2d5.284448915590253!3d51.68852110526529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6ee8855f3c5d1%3A0x4c4797f27d227e73!2sOnderwijsboulevard%20215%2C%205223%20DE%20&#39;s-Hertogenbosch!5e0!3m2!1sen!2snl!4v1585055473064!5m2!1sen!2snl" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-4">
            <b>Contactgegevens: </b> <br />
            Telefoonnummer: 047 854 78 85<br />
            <br />

            <b>Adres:</b><br />
            Onderwijsboulevard 215, kamer OG112<br />
            5223DE, 's-Hertogenbosch<br />

            <br /><br />
            <b>Openingstijden:</b><br />
            Maandag alleen afhalen van 16:00 tot 20:00 <br />
            Dinsdag t/m zondag geopend van 14:00 tot 22:00<br />


        </div>
    </div>
</div>
    @endsection
