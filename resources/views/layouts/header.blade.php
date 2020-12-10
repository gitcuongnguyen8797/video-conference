<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Unterföhring Videokonferenz-System</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="{{URL('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL('assets/js/clipboard.min.js')}}"></script>
    <script src='https://meet.ismaning-videokonferenz.de/external_api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL('assets/css/bulma.min.css')}}" />
    <link rel="stylesheet" href="{{URL('assets/font-awesome/css/all.css')}}" />
    <link rel="stylesheet" href="{{URL('assets/css/meet.css')}}" />
    <style>
    iframe { position: absolute; }
    </style>
</head>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="{{('assets/images/watermark.png')}}" height="28">
        </a>
    </div>
    
    <div class="navbar-menu is-active">
        <div class="navbar-start">
            <div class="navbar-item is-size-4 item-logged-out">Unterföhring Videokonferenz-System</div>
            <div class="navbar-item is-size-4 item-logged-in">Unterföhring-Videokonferenz:&nbsp;<strong></strong></div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <button id="hangup" class="button is-danger">
                        <span class="icon">
                            <i class="fas fa-phone-slash"></i>
                        </span>
                        <span data-completetext="Konversation beendet!">Konversation beenden</span>
                    </button>
                    <button id="invite" class="invite-button button is-success" data-invite="">
                        <span class="icon">
                            <i class="fas fa-copy"></i>
                        </span>
                        <span data-completetext="Einladungslink kopiert!">Einladungslink kopieren</span>
                    </button>
                <a id="faq" href="{{route('faq')}}" target="_blank" class="button is-grey">
                        <span class="icon">
                            <i class="fas fa-question-circle"></i>
                        </span>
                        <span data-completetext="Konversation beendet!">Anleitung / FAQ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
