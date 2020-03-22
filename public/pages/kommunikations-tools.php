<style>
    ul {
        list-style-type: "➤ ";
    }

    .event {
        margin-bottom: 5rem;
    }

    .event h2 {
        margin-top: 0.5em;
    }

    .heading {
        border-bottom: 0.5px solid gray;
        font-weight: bold;
        padding-bottom: 0.5em;
        margin-top: 2em;
    }

    .forum-logos {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .forum-logos img {
        height: 5rem;
        max-width: unset !important;
    }
</style>

<?php switch ($lang) {
    case "en":
?>

        <article>

            <h1>Talk session about collaborative video and text editing tools</h1>

            <div class="row">

                <section>
                    <p class="bold">Sorry, this event will be in German only</p>
                    <p><a href="/kommunikations-tools/de">Link event description in German</a></p>
                </section>

            </div>


        </article>

    <?php
        break;
    default:
    ?>
        <article>

            <h1>Vortragsgespräch zu kollaborativen Videocall- und Schreib-Tools</h1>

            <div class="row">

                <section>
                    <p class="bold">Du machst Homeoffice und möchtest mit Kollegen kollaborativ Notizen aufschreiben? Du kannst deine Oma nicht besuchen, würdest sie aber gern sehen?</p>
                    <p>Dafür suchst du ein gutes Open-Source-Videotool, kennst aber nur Skype, Google und WhatsApp, und hast Bauchschmerzen beim Thema Privatsphäre und Sicherheit?</p>
                    <p>Dann komm zu unserem Vortragsgespräch! Wir als Bits & Bäume empfehlen freie Software für soziale Interaktionen in Zeiten von Corona (und auch generell ;) ). In dem Vortragsgespräch evaluieren wir für euch freie Video- und Schreib-Tools anhand der Kriterien Privatsphäre, Sicherheit und OpenSource und geben eine Übersicht und Empfehlungen. Wir freuen uns auf euch!</p>
                </section>

                <section>
                    <p class="bold">Inhalte & Materialien</p>
                    <ul>
                        <li><a href="https://tube.tchncs.de/videos/watch/6addc421-31f0-4126-be68-fe53e540d6a8" target="_blank">Vortragsgespräch als Video</a></li>
                  			<li><a href="https://mathias-renner.com/dl/2020-03-22-Vortragsgespraech-Video-Text-Tools.mp3" target="_blank">Vortragsgespräch als Audio / Podcast</a></li>
                        <li><a href="https://www.bits-und-baeume.org/downloads/2020-03-22-Vortragsgespraech-Video-Text-Tools.pdf" target="_blank">Folien / Präsentation</a></li>
                  			<li><a href="https://cryptpad.fr/sheet/#/2/sheet/view/yc3J+xAsidHP+QeyiAf3DdD9HUG+ytM3Ek65X5WKfnk/embed/" target="_blank">Tabelle mit Detail-Informationen zu Video- und Text-Tools</a></li>
                    </ul>
                    Alle Materialien unterliegen der <a href="https://creativecommons.org/licenses/by/2.0/de/">CC-BY</a> Lizenz.
                </section>
            </div>


        </article>
<?php } ?>
