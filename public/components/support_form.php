<div class="">

  <form class="form">

    <div class="group">
      <h3 class="bolder">Dein vollständiger Name:</h3>
      <div class="input">
        <input type="text" id="form-name" placeholder="Vor- und Nachname" required/>
        <span class="readmore">Ich möchte im Namen einer Organisation unterzeichnen</span>
        <input class="moreContent" type="text" id="form-orga" placeholder="Name der Organisation"/>
        <input class="moreContent" type="website" id="form-website" placeholder="Organization Website"/>
      </div>
    </div>

    <div class="group">
      <h3>Kommentar</h3>
      <div class="input">
        <textarea id="form-comment" placeholder="Optional kannst du deiner Unterzeichnung einen Kommentar hinzufügen" maxlength="500"></textarea>
      </div>
    </div>

    <div class="group">
      <h3>Kontakt</h3>
      <div class="input">
        <input type="email" id="form-email" placeholder="E-Mail Adresse" required/>
        <span class="smaller">Deine E-Mail Adresse benötigen wir zur Verifizierung. Nachdem du deine Unterzeichnung per E-Mail bestätigt hast, löschen wir deine E-Mail Adresse aus unserer Datenbank.</span>
      </div>
    </div>

    <h3>Datenschutz</h3>
    <div class="group group--checkbox">
      <input type="checkbox" id="form-data_agreement">
      <label>
        <span>Ich willige ein, dass meine Daten zur Verarbeitung übermittelt und auf dieser Website veröffentlicht werden.</span>
        <br><span class="smaller">Mehr dazu lesen Sie in unserer <a href="/datenschutz/<?php echo $lang; ?>#anmeldefunktion">Datenschutzerklärung</a>.</span>
      </label>
    </div>

    <div class="group group--checkbox">
      <input type="checkbox" id="form-contact_agreement">
      <label>
        <span>Ich möchte über den weiteren Verlauf informiert werden.</span>
        <br><span class="smaller">In diesem Fall speichern wir deine E-Mail Adresse auch nach der Verifizierung deiner Unterzeichnung.</span>
      </label>
    </div>

    <div class="group">
      <input style="width: 50%" type="submit" value="Jetzt unterzeichnen!"/>
    </div>
  </form>

</div>

<div class="message" style="display: none">Vielen Dank für deine Unterstützung! Bitte schau in dein Postfach.
    <br>
    <button class="redo">Weitere Unterzeichnung.</button>
</div>

<script>
    // catch form
    $('form').submit(function (e) {
        e.preventDefault();

        $('form').addClass("sending");
        $('form button').attr("disabled", true);

        var data = {
            "to": $('#form-email').val(),
            "name": $('#form-name').val(),
            "orga": $('#form-orga').val(),
            "comment": $('#form-comment').val(),
            "contact_agreement": $('#form-contact_agreement').prop('checked'),
            "key": "<?php echo parse_ini_file('config/auth.ini')['key']; ?>"
        };

        send(data, true);
    });

    // send form data
    function send(data, callback) {
        $.ajax({
            url: "/forderungen/unterzeichnen",
            type: 'POST',
            data: JSON.stringify(data),
            cache: false,
            dataType: 'json',
            processData: true,
            contentType: 'application/json; charset=UTF-8'
        }).always(function (response) {
            if (!callback) return;
            if (response.status === 200 || response.status === 201) cb(true);
            else cb(false);
        });
    }

    // feedback to user
    function cb(success) {
        $('form').removeClass("sending");

        if (success) {
            $('.form').hide();
            $('.message').fadeIn();
        } else {
            alert('Das hat leider nicht geklappt. Bitte versuche es noch einmal.');
        }
    }

    // let user do it again
    $('.redo').click(function () {
        $('.message').hide();
        $('.form').fadeIn();
        $('form button').attr("disabled", false);
        $('form input[type=text]').val('');
        $('form input[type=email]').val('');
        $('form textarea').val('');
    });
</script>