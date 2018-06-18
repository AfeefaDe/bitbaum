<div class="people">
    <?php
    $people = array(
        array("name" => "Juliane Krüger", "orga" => "Open Knowledge Foundation Deutschland", "picture" => "/img/juliane-krueger.jpg", "quote" => "Unser gemeinsames Ziel: eine friedliche, für alle lebenswerte Welt, in der unsere Menschenrechte gewahrt sind und die wir als mündige Zivilgesellschaft mitgestalten."),
        array("name" => "Maria Bossmann", "orga" => "Deutscher Naturschutzring e.V. (DNR)", "picture" => "/img/maria-bossmann.jpg", "quote" => "Die Digitalisierung berührt grundlegende Aspekte unserer Gesellschaft. Es gilt sie so zu gestalten, dass die planetaren Grenzen nicht überschritten und somit unsere Lebensgrundlagen erhalten werden."),
        array("name" => "Sven Hilbig", "orga" => "Brot für die Welt", "picture" => "/img/sven-hilbig.jpg", "quote" => "Wir müssen die Digitalisierung fair gestalten, anderenfalls wird sich die Schere zwischen Nord und Süd, Arm und Reich weiter verschärfen."),
        array("name" => "Rainer Rehak", "orga" => "Forum InformatikerInnen für Frieden und gesellschaftliche Verantwortung (FIfF)", "picture" => "/img/rainer-rehak.jpg", "quote" => "Techies und Ökos müssen miteinander reden, denn der Überwachungskapitalismus bedroht das friedliche Internet, die Demokratie & unsere natürlichen Lebensgrundlagen."),
        array("name" => "Anja Höfner", "orga" => "Institut für ökologische Wirtschaftsforschung (IÖW)", "picture" => "/img/anja-hoefner.jpg", "quote" => "Die Bits & Bäume bringt zusammen, was noch nicht zusammengehört:Techies auf der einen und Akteure aus der Umweltszene auf der anderen Seite – nur so wird eine nachhaltige digitale Zukunft gestaltbar!"),
        array("name" => "Tilman Santarius", "orga" => "Technische Universität Berlin", "picture" => "/img/tilman-santarius.jpg", "quote" => "Bits & Bäume möchte die Debatte über den Megatrend der Digitalisierung politisieren. Wir brauchen Ideen und Konzepte, wie wir die Digitalisierung zukunftsfähig gestalten können!"),
        array("name" => "Rolf Buschmann", "orga" => "BUND", "picture" => "/img/rolf-buschmann.jpg", "quote" => "Die Digitalisierung nachhaltig zu gestalten ist eine der größten Herausforderungen für unsere Gesellschaft. Mit der Konferenz Bits & Bäume setzen wir einen ersten wichtigen Meilenstein."),
        array("name" => "Hendrik Zimmermann", "orga" => "Germanwatch e.V.", "picture" => "/img/hendrik-zimmermann.jpg", "quote" => "Für die Ziele von Germanwatch – wie Energie- und Agrarwende oder die Senkung des Ressourcenverbrauchs – bedeutet die Digitalisierung Chance und Risiko zugleich."),
        array("name" => "Constanze Kurz", "orga" => "netzpolitik.org", "picture" => "/img/constanze-kurz.jpg", "quote" => "Die Hacker-Community und die Umweltbewegung haben jede Menge gemeinsame Ziele. Jetzt müssen wir nur noch zusammen eine nachhaltige Revolution planen."),
        array("name" => "Andrea Vetter", "orga" => "Konzeptwerk Neue Ökonomie", "picture" => "/img/andrea-vetter.jpg", "quote" => "Welche Technik braucht eine Postwachstumsgesellschaft? Bits&Bäume sucht nach Antworten jenseits von Digitalisierungs-Hype und Technikphobie.")
        // array("name"=>"", "orga"=>"", "picture"=>"/img/.jpg", "quote"=>"")
    );

    shuffle($people);

    foreach ($people as $key => $human) {
        require('components/portrait.php');
    }
    ?>
</div>

<script>
    $portraits = $('.portrait');

    function switcher(i) {
        $($portraits[i]).hide();
        if (i === ($portraits.length - 1)) {
            i = 0;
            $($portraits[0]).fadeIn();
        }
        else {
            $($portraits[i + 1]).fadeIn();
            i++;
        }
        return i;
    }

    var index = 0;
    $('.people').click(function () {
        index = switcher(index);
    });

    setInterval(function () {
        index = switcher(index);
    }, 10000)
</script>