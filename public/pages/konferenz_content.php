<style>
    article .row--forderung {
        justify-content: flex-start;
    }

    article .row--forderung>span {
        flex: 0 0 3em;
        font-weight: bold;
        text-indent: 0.8em;
    }

    article .row--forderung>p {
        flex: 1 1 100%;
        margin-top: 0;
    }



/*source: https://www.w3schools.com/howto/howto_css_dropdown.asp*/


.navbar {
/*   overflow: hidden; */
/*   background-color: #333; */
  display: block;
    max-width: var(--main-width-a);
    margin: 0 auto;
  font-size: 1rem;
    height: 3rem;
}

.tmp {
    box-sizing: border-box;
    position: relative; /* for correct placement of #sticky-sitelogo */

}

.navbar a {
    display: inline-block;
    color: inherit !important;
    text-decoration: none !important;
    line-height: 1rem;
    padding: 0.5rem;
    border-radius: 3px;
    font-weight: bold;
    float: left;
}


.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
 /*same content as navbar a*/

    color: inherit !important;
    text-decoration: none !important;
    line-height: 1rem;
    padding: 0.5rem;
    border-radius: 3px;
    font-weight: bold;

  font-size: 1rem;
  background-color: inherit;
  outline: none;
  font-family: inherit;
  border: none;

  /*padding: 14px 16px;*/
  margin: 0;
  display: inline-block;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background: rgba(0,0,0,0.1);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}




</style>
<?php switch ($lang) {
    case "en":
?>

        <article>
            <h1>Bits & Bäume Conference 2022 goes into the second round - your help is needed</h1>

            <section>

                <p>
	After the successful first Bits & Bäume Conference in 2018, the topics of digitalization and sustainability are more present 
			in our society today than ever before. We are facing major societal and global challenges for a just and sustainable 
			shaping of our (surrounding) world.
			Therefore, we would like to broaden and consolidate the networking of environmental and justice activists, 
			technology experts and human rights activists with the <b>Bits & Bäume 2022</b> conference from <b>October 1st to 2nd, 2022</b>. 
			A <b>kick-off event</b> will be held on the evening of <b>September 30</b>.
			This also includes networking our communities with representatives of social-ecological small digital businesses and 
			founders as well as politicians in order to find concrete solutions for the pressing issues of our time. 
			We want to discuss major political strategies and governance proposals, but also learn from each other through best practice 
			examples how we can realise climate and environmental protection, social justice, democracy and fundamental rights in the digital age. 

    
                </p>

                <p>


		   Together we want to discuss on panels, in workshops and open spaces:   
                </p>

                
                
                
            
            <section>
                    <ul>
						
						
						<li>How can digitalisation be designed to contribute to a sustainable transformation of society?</li>
                       </ul>
                       <ul>
					    <li>What does a globally, economically, socially and ecologically just future look like in the digitised world?
                        </li>
                       
                    </ul>
                    <ul>
                        <li>What can the tech community (bits) and the justice and environmental movement (trees) learn from each other? And how can we become politically active, also together with progressive and alternative-economic actors?
                        </li>
                       
                    </ul>

            </section>

               
            </section>
            <section>
                <h2>We need your help!</h2>
                <p>In a Call for Action we will motivate people to get involved in the organisation of the conference. Helping hands and heads are needed. It will be colorful, exciting and transformative!
</p>    <ul>
		 <li>	
		<a target="_blank" href="/downloads/Call_for_Action_neu.pdf">Call for Action</a>
			 </li>
		    </ul>
          
            </section>
            <section>
                <h2>Your contributions are wanted!
</h2>
                <p> With the Call for Participation, we call on people from civil society organisations, 
			progressive actors from science, the world of work, business and politics to help shape the conference with their own contributions. We are looking forward to diverse and creative topics and formats!
</p>
             
            </section>
		<section>
		    <h2>Bits & Bäume 2022 is organised by:</h2>
		    <p>Bund für Umwelt und Naturschutz Deutschland (BUND), Brot für die Welt, Chaos Computer Club (CCC), 
			    Deutscher Naturschutz Ring (DNR), Einstein Center Digital Future / Technische Universität Berlin, 
			    Forum InformatikerInnen für Frieden und gesellschaftliche Verantwortung e. V. (FIfF), 
			    Free Software Foundation Europe (FSFE), Germanwatch e.V., Institut für ökologische Wirtschaftsforschung (IÖW), 
			    Konzeptwerk Neue Ökonomie, Open Knowledge Foundation Deutschland e. V. (OKF), Weizenbaum Institut e.V., 
			    Vereinte Dienstleistungsgewerkschaft (ver.di)</p>
		    <p><i>The event is sponsored by the Deutsche Bundesstiftung Umwelt (DBU) and co-financed by the Bundesministerium für Umwelt, 
			    Naturschutz, nukleare Sicherheit und Verbraucherschutz (BMUV). The work of Germanwatch and the 
			    Forum InformatikerInnen für Frieden und gesellschaftliche Verantwortung (FIfF) within the framework of the 
			    Bits & Trees Conference 2022 is mainly funded by Stiftung Mercator.</i></p>





		</section>

            
        </article>
    <?php
        break;



// case "de"
    default:
    ?>
        <article>



           <h1>Die Bits &amp; Bäume Konferenz: 30.09.-02.10.2022 </h1>



    <!-- ############### Menü Anfang ###################################         -->

<!-- Basiert auf dem Pad: "Konferenzwebsite – Struktur"      -->


<!--










    etc.

    Blog? (extrem viel Aufwand)

    Datenschutz / Impressum



-->

           <div class="navbar">
            <a href="/">Startseite</a>
            <!--  Start Hauptmenüeintrag           -->
            <div class="dropdown">
                <div class="dropbtn">Programm ▾</div>
                <div class="dropdown-content">

                  <a href="#cfp">Call for Participation</a>
                  <a href="#buehnenprogramm">Bühnenprogramm</a>
                  <a href="#bbforum">B&amp;B-Forum</a>
                  <a href="#pitch">Pitch &amp; Thrive for Sustainability</a>
                  <a href="#kultur">Kulturprogramm</a>
                  <a href="#party">Abschlussparty</a>
                </div>
            </div>  <!-- Ende  Hauptmenüeintrag           -->

            <!--  Start Hauptmenüeintrag           -->
            <div class="dropdown">
                <div class="dropbtn">Tickets ▾</div>
                <div class="dropdown-content">
                  <a href="#pretix">Pretix</a>
                  <a href="#preiskategorien">Preiskategorien</a>
                </div>

            </div>  <!-- Ende  Hauptmenüeintrag           -->

            <!--  Start Hauptmenüeintrag           -->
            <div class="dropdown">
                <div class="dropbtn">Presse ▾</div>
                <div class="dropdown-content">
                  <a href="#presseverteiler">Presseverteiler</a>
                  <a href="#pressemitteilungen">Pressemitteilungen</a>
                  <a href="#pressekit">Pressekit</a>
                  <a href="#pressespiegel">Pressespiegel</a>
                  <a href="#pressekontakt">Pressekontakt</a>
                </div>

            </div>  <!-- Ende  Hauptmenüeintrag           -->

           <a href="#forderungen">Forderungen</a>

            <!--  Start Hauptmenüeintrag           -->
            <div class="dropdown">
                <div class="dropbtn">Über uns ▾</div>
                <div class="dropdown-content">
                  <a href="#ueberuns">Über uns</a>
                  <a href="#mitmachen">Mitmachen</a>
                  <a href="#tk">Trägerkreis</a>
                  <a href="#kb">Konferenzbüro</a>
                  <a href="#newsletter">Newsletter</a>
                  <a href="#kontakt">kontakt</a>
                </div>

            </div>  <!-- Ende  Hauptmenüeintrag           -->

            <!--  Start Hauptmenüeintrag           -->
            <div class="dropdown">
                <div class="dropbtn">FAQs ▾</div>
                <div class="dropdown-content">
                  <a href="#verpflegung">Verpflegung</a>
                  <a href="#barrierearmut">Barrierearmut/-freiheit</a>
                  <a href="#transparenz">Transparenz</a>
                </div>

            </div>  <!-- Ende  Hauptmenüeintrag           -->


            <a href="#forderungen">Blog</a>
            <a href="#impressum">Impressum/Datenschutz</a>



        </div> <!-- Ende Menü -->
<!-- ############### Menü Ende ###################################         -->




        <section id="cfp">

            <h2>cfp</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="buehnenprogramm">

            <h2>Bühnenprogramm</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="bbforum">

            <h2>bbforum</h2>

            <p>...
            </p>

            <hr>
        </section>
        <section id="pitch">

            <h2>pitch</h2>

            <p>...
            </p>

            <hr>
        </section>
        <section id="kultur">

            <h2>kultur</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="party">

            <h2>party</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="pretix">

            <h2>pretix</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="preiskategorien">

            <h2>preiskategorien</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="presseverteiler">

            <h2>presseverteiler</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="pressemitteilungen">

            <h2>pressemitteilungen</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="pressekit">

            <h2>pressekit</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="pressespiegel">

            <h2>pressespiegel</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="pressekontakt">

            <h2>pressekontakt</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="ueberuns">

            <h2>ueberuns</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="mitmachen">

            <h2>mitmachen</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="tk">

            <h2>Trägerkreis</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="kb">

            <h2>Konferenzbüro</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="newsletter">

            <h2>newsletter</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="kontakt">

            <h2>kontakt</h2>

            <p>...
            </p>

            <hr>
        </section>

        <section id="verpflegung">

            <h2>verpflegung</h2>

            <p>...
            </p>

            <hr>
        </section>


        <section id="barrierearmut">

            <h2>barrierearmut</h2>

            <p>...
            </p>

            <hr>
        </section>


        <section id="transparenz">

            <h2>transparenz</h2>

            <p>...
            </p>

            <hr>
        </section>



        <section id="forderungen">

            <h2>forderungen</h2>

            <p>...
            </p>

            <hr>
        </section>

                    
        </article>
<?php } ?>