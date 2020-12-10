@extends('layouts.app')
@section('content')
    <body class="antialiased">
        <section class="is-subtitle">
            <div class="subtitle-image-container has-text-right">
                <img src="{{('assets/images/watermark.png')}}" />
            </div>
        </section>
        <section class="hero is-fullheight-with-navbar-subtitle">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-centered">
                        <div class="column is-6-tablet is-6-desktop is-5-widescreen">
                            <h1 class="is-size-3 mb">Unterföhring Videokonferenz-System</h1>
                            <div id="notification" class="notification is-danger is-light" data-internalerror="Es ist ein internes Problem aufgetreten, bitte versuchen Sie es später noch einmal.">
                                <button class="delete"></button>
                                <span></span>
                            </div>
                            <form id="loginform" action="" class="box" method="POST">
                                @csrf
                                <input type="hidden" name="login" value="1" />
                                <div class="field">
                                    <label for="" class="label">Vorname *</label>
                                    <div class="control has-icons-left">
                                        <input type="text" name="first_name" placeholder="z.B. Peter" class="input" required>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Nachname *</label>
                                    <div class="control has-icons-left">
                                        <input type="text" name="last_name" placeholder="z.B. Mustermann" class="input" required>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">E-Mail-Adresse *</label>
                                    <div class="control has-icons-left">
                                        <input type="email" name="email" placeholder="z.B. peter.mustermann@web.de" class="input" required>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-at"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field mt">
                                    <button class="button is-red is-fullwidth">Videokonferenz starten</button>
                                </div>
                                <p class="mt">
                                * Pflichtfelder
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="jitsi"></div>
@endsection
    

