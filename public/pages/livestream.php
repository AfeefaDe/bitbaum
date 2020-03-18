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

            <h1>TBD</h1>

            <div class="row">

                <section>
                    <p class="bold">TBD</p>
                    <p>TBD</p>
                </section>

                <section>
                    <p class="bold">Time & Date</p>
                    <ul>
                        <li>22.04.2020</li>
                        <li>16:30</li>
                        <li>(Link to live stream will appear here soon!)</li>
                    </ul>
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
                        <li>22.04.2020</li>
                        <li>16:30</li>
                        <li>(Link zum Livestream erscheint bald hier!)</li>
                    </ul>
                </section>
            </div>


        </article>
<?php } ?>
