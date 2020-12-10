@extends('layouts.app')
@section('content')
<section class="is-subtitle">
    <div class="subtitle-image-container has-text-right">
        <img src="./assets/images/GEM-Logo-Quer-Links-Print-Weiss.png" />
    </div>
</section>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-7">
                    <h1 class="is-size-2 mb">Kurzanleitung zur kostenlosen Nutzung des Unterföhring Videokonferenz-Systems für Bürger und Unternehmen</h1>
                    <p>
                    Um das Unterföhring Videokonferenz-System zu nutzen, benötigen Sie einen aktuellen Chrome- oder Firefox Browser. Das Starten einer Videokonferenz über die Jitsi-App für iOS oder Android ist nicht möglich. Teilnehmer, die die App verwenden, benötigen den Konferenznamen, der nach dem Login geteilt werden kann.
                    </p>
                    <h2 class="has-text-red is-size-5 mb mt">Konferenz erstellen</h2>
                    <p>
                    Um eine Konferenz zu erstellen, müssen Sie sich im ersten Schritt als echter Nutzer authentifizieren. Geben Sie dafür Ihren Vornamen, Ihren Namen und eine gültige E-Mail-Adresse an. Nach Validierung der eingegeben E-Mail-Adresse können Sie eine Konferenz erstellen.
                    </p>
                    <figure class="image faq">
                        <img src="./assets/images/form.png" >
                    </figure>
                    
                    <h2 class="has-text-red is-size-5 mb mt">Zugriff auf Kamera und Mikrofon</h2>
                    <p>
                    Für die Videokonferenz benötigt der Browser Zugriff auf die Kamera und das Mikrofon des Computers. Sie müssen den Zugriff auf Kamera und Mikrofon für die Domain <strong>videokonferenz-unterfoehring.de</strong> erlauben, wenn Sie dazu aufgefordert werden. Aktivieren Sie das Häkchen "Entscheidung merken" um bei der nächsten Videokonferenz nicht erneut aufgefordert zu werden, den Zugriff auf Kamera und Mikrofon zu erlauben.
                    </p>
                    <figure class="image faq">
                        <img src="./assets/images/allow.png" >
                    </figure>
                    
                    <h2 class="has-text-red is-size-5 mb mt">Einladen von weiteren Teilnehmern</h2>
                    <p>
                    Um weitere Teilnehmer zu der von Ihnen erstellten Videokonferenz einzuladen, klicken Sie nach dem Login oben rechts auf den Button "Einladungslink kopieren". Der Link ist nun in Ihrer Zwischenablage gespeichert und Sie können Ihn per E-Mail oder Messenger an die Teilnehmer weitergeben.
                    </p>
                    <p class="mt">
                    Den Konferenznamen finden Sie außerdem nach dem Erstellen der Konferenz oben auf der Seite.
                    </p>
                    <figure class="image faq">
                        <img src="./assets/images/invite.png" >
                    </figure>
                    
                    <h2 class="has-text-red is-size-5 mb mt">Jitsi-App für iOS und Android</h2>
                    <p>
                    Für die Teilnahme an einer Konferenz über ein Mobilgerät, verwenden Sie am besten die Jitsi-App. Sie finden die App für Ihr Betriebssystem im Google PlayStore oder Apple AppStore:<br /><br />
                    </p>
                    <p>
                    <a href="https://itunes.apple.com/us/app/jitsi-meet/id1165103905" target="_blank">
                        <img class="store-badge" src="./assets/images/de_apple_badge.png" />
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=org.jitsi.meet" target="_blank">
                        <img class="store-badge" src="./assets/images/de_badge_web_generic.png" />
                    </a>
                    </p><br />

                    <p>
                    Das Starten einer Videokonferenz über die Jitsi-App für iOS oder Android ist nicht möglich. Teilnehmer, die die App verwenden, benötigen den Konferenznamen, der nach dem Login geteilt werden kann und oben im Browser steht.
                    </p><br />
                    
                    <p>
                    Für die Konfiguration der App, tippen Sie auf das Symbol oben links um das Menü zu öffnen und wählen dann den Menüpunkt <strong>Einstellungen</strong>
                    </p>

                    <figure class="image faq">
                        <img src="./assets/images/app_1.png" >
                    </figure>
                    <p>
                    In den Einstellungen der App geben Sie als <strong>Server URL</strong> die URL des factsoft Jitsi-Servers <strong>https://meet.videokonferenz-unterfoehring.de</strong> ein.

                    </p>
                    <figure class="image faq">
                        <img src="./assets/images/app_2.png" >
                    </figure>
                    
                    <p>
                    Im Feld <strong>Konferenzname</strong> geben Sie den Konferenznamen ein <i>(Der Konferenzname hVe74xxx ist ein Beispiel)</i>.
                    </p>
                    
                    <figure class="image faq">
                        <img src="./assets/images/app_3.png" >
                    </figure>

                    {{-- <p>
                    Der <strong>Konferenzname</strong> wird oben im Browser angezeigt, nachdem der Konferenzraum erstellt wurde.
                    </p>
                    <figure class="image faq">
                        <img src="./assets/images/name.png" >
                    </figure> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection