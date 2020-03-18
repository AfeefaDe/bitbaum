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

            <h1>Livestream about collaborative video and text editing tools</h1>

            <div class="row">

                <section>
                    <p class="bold">Sorry, this event will be in German only</p>
                    <p><a href="/livestream/de">Link event description in German</a></p>
                </section>

            </div>


        </article>

    <?php
        break;
    default:
    ?>
        <article>

            <h1>Livestream zu kollaborativen Videocall- und Schreib-Tools</h1>

            <div class="row">

                <section>
                    <p class="bold">Du machst Homeoffice und möchtest mit Kollegen kollaborativ Notizen aufschreiben? Du kannst deine Oma nicht besuchen, würdest sie aber gern sehen?</p>
                    <p>Dafür suchst du ein gutes Open-Source-Videotool, kennst aber nur Skype, Google und WhatsApp, und hast Bauchschmerzen beim Thema Privatsphäre und Sicherheit?</p>
                    <p>Dann komm zu unserem Livestream! Wir als Bits & Bäume empfehlen freie Software für soziale Interaktionen in Zeiten von Corona (und auch generell ;) ). In dem Livestream evaluieren wir für euch freie Video- und Schreib-Tools anhand der Kriterien Privatsphäre, Sicherheit und OpenSource und geben eine Übersicht und Empfehlungen. Wir freuen uns auf euch!</p>
                </section>

                <section>
                    <p class="bold">Wann geht's los?</p>
                    <ul>
                        <li>22. März 2020</li>
                        <li>16:30 - 18:00</li>
                        <li>(Link zum Livestream erscheint bald hier!)</li>
                    </ul>
                </section>
            </div>


        </article>
<?php } ?>
