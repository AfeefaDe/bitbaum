<div class="people">
    <?php
    $people = array(
        array("name" => "Juliane Krüger", "orga" => "Open Knowledge Foundation Deutschland", "picture" => "/img/juliane-krueger.jpg", "quote_de" => "Unser gemeinsames Ziel: eine friedliche, für alle lebenswerte Welt, in der unsere Menschenrechte gewahrt sind und die wir als mündige Zivilgesellschaft mitgestalten.", "quote_en" => "Our common goal: a peaceful world worth living in, where our human rights are respected and which we shape as a responsible civil society."),
        array("name" => "Maria Bossmann", "orga" => "Deutscher Naturschutzring e.V. (DNR)", "picture" => "/img/maria-bossmann.jpg", "quote_de" => "Die Digitalisierung berührt grundlegende Aspekte unserer Gesellschaft. Es gilt sie so zu gestalten, dass die planetaren Grenzen nicht überschritten und somit unsere Lebensgrundlagen erhalten werden.", "quote_en" => "Digitalization affects fundamental aspects of our society. It must be designed in such a way that the planetary boundaries are not exceeded and thus our livelihoods are preserved.", "vimeo" => "https://vimeo.com/299838147"),
        array("name" => "Sven Hilbig", "orga" => "Brot für die Welt", "picture" => "/img/sven-hilbig.jpg", "quote_de" => "Wir müssen die Digitalisierung fair gestalten, anderenfalls wird sich die Schere zwischen Nord und Süd, Arm und Reich weiter verschärfen.", "quote_en" => "We must make digitalization fair, otherwise the gap between North and South, rich and poor will continue to widen.", "vimeo" => "https://vimeo.com/299232687"),
        array("name" => "Rainer Rehak", "orga" => "Forum InformatikerInnen für Frieden und gesellschaftliche Verantwortung (FIfF)", "picture" => "/img/rainer-rehak.jpg", "quote_de" => "Techies und Ökos müssen miteinander reden, denn der Überwachungskapitalismus bedroht das friedliche Internet, die Demokratie & unsere natürlichen Lebensgrundlagen.", "quote_en" => "Techies and environmentalists need to talk to each other, because surveillance capitalism threatens the peaceful internet, democracy & our natural livelihoods."),
        array("name" => "Anja Höfner", "orga" => "Institut für ökologische Wirtschaftsforschung (IÖW)", "picture" => "/img/anja-hoefner.jpg", "quote_de" => "Die <em>Bits & Bäume</em> bringt zusammen, was noch nicht zusammengehört:Techies auf der einen und Akteure aus der Umweltszene auf der anderen Seite – nur so wird eine nachhaltige digitale Zukunft gestaltbar!", "quote_en" => "<em>Bits & Bäume</em> gathers what does not yet belong together: Techies on the one hand and actors from the environmental scene on the other - this is the only way to shape a sustainable digital future!"),
        array("name" => "Tilman Santarius", "orga" => "Technische Universität Berlin", "picture" => "/img/tilman-santarius.jpg", "quote_de" => "<em>Bits & Bäume</em> möchte die Debatte über den Megatrend der Digitalisierung politisieren. Wir brauchen Ideen und Konzepte, wie wir die Digitalisierung zukunftsfähig gestalten können!", "quote_en" => "<em>Bits & Bäume</em> aims to politicize the debate on the megatrend of digitalization. We need ideas and concepts on how we can make digitalization sustainable!"),
        array("name" => "Rolf Buschmann", "orga" => "BUND", "picture" => "/img/rolf-buschmann.jpg", "quote_de" => "Die Digitalisierung nachhaltig zu gestalten ist eine der größten Herausforderungen für unsere Gesellschaft. Mit der Konferenz <em>Bits & Bäume</em> setzen wir einen ersten wichtigen Meilenstein.", "quote_en" => "Making digitalization sustainable is one of the greatest challenges facing our society. Therefore Bits & Bäume conference is a first and important milestone.", "vimeo" => "https://vimeo.com/299003289"),
        array("name" => "Hendrik Zimmermann", "orga" => "Germanwatch e.V.", "picture" => "/img/hendrik-zimmermann.jpg", "quote_de" => "Für die Ziele von Germanwatch – wie Energie- und Agrarwende oder die Senkung des Ressourcenverbrauchs – bedeutet die Digitalisierung Chance und Risiko zugleich.", "quote_en" => "For Germanwatch's goals - such as the energy and agricultural turnaround or the reduction of resource consumption - digitalization means both opportunity and risk.", "vimeo" => "https://vimeo.com/299633048"),
        array("name" => "Constanze Kurz", "orga" => "Chaos Computer Club (CCC)", "picture" => "/img/constanze-kurz.jpg", "quote_de" => "Die Hacker-Community und die Umweltbewegung haben jede Menge gemeinsame Ziele. Jetzt müssen wir nur noch zusammen eine nachhaltige Revolution planen.", "quote_en" => "The hacker community and the environmental movement have a lot in common. Now all we have to do is to plan a sustainable revolution together."),
        array("name" => "Andrea Vetter", "orga" => "Konzeptwerk Neue Ökonomie", "picture" => "/img/andrea-vetter.jpg", "quote_de" => "Welche Technik braucht eine Postwachstumsgesellschaft? Bits&Bäume sucht nach Antworten jenseits von Digitalisierungs-Hype und Technikphobie.", "quote_en" => "What technology does a degrowth society need? Bits&Bäume looks for answers beyond digitalization hype and technology phobia.", "vimeo" => "https://vimeo.com/299441345")
        // array("name"=>"", "orga"=>"", "picture"=>"/img/.jpg", "quote_de"=>"", "quote_en" => "")
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