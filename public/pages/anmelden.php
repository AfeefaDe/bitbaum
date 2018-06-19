<article>
    <h1>Anmeldung</h1>

    <div class="form">
        <p>Du möchtest mit einem Beitrag die Konferenz <em>Bits & Bäume</em> mitgestalten? <a href="/call">Hier findest du
                den Call for Participation.</a> Wenn du als Besucher*in teilnehmen willst, kannst du deine Kontaktdaten
            hinterlassen und wir melden uns rechtzeitig bei dir, sobald die offizielle Anmeldung startet.</p>
        <form>
            <input id="form-name" placeholder="Ihr Name"/>
            <input id="form-orga" placeholder="Ihre Organisation"/>
            <input id="form-email" placeholder="Ihre E-Mail Adresse" required/>
            <textarea id="form-comment" placeholder="Anmerkungen oder Fragen" maxlength="500"></textarea>
            <p class="smaller">Wir verwenden deine Daten ausschließlich um deine Anmeldung zu bearbeiten. Mehr dazu
                findest du in unserer <a href="/datenschutz#anmeldefunktion">Datenschutzerklärung</a>.</p>
            <button type="submit">Jetzt unverbindlich anmelden</button>
        </form>
    </div>

    <div class="message">
        <p>Danke. Wir haben deine Nachricht erhalten und werden uns schnellstmöglich bei dir zurückmelden.</p>
        <button class="redo">Weitere Anmeldung</button>
    </div>
</article>

<script>
    // catch form
    $('form').submit(function (e) {
        e.preventDefault();

        $('form').addClass("sending");
        $('form button').attr("disabled", true);

        var data = {
            "name": $('#form-name').val(),
            "orga": $('#form-orga').val(),
            "email": $('#form-email').val(),
            "comment": $('#form-comment').val()
        };

        data.reply_to = data.email;
        send('register', data, true);

        data.to = data.email;
        data.reply_to = null;
        send('register-copy', data);
    });

    // send form data
    function send(path, data, callback) {
        $.ajax({
            url: "/message/" + path,
            type: 'POST',
            data: JSON.stringify(data),
            cache: false,
            dataType: 'json',
            processData: true,
            contentType: 'application/json; charset=UTF-8'
        })
            .always(function (response) {
                if (!callback) return;
                if (response.status == 200 || response.status == 201) cb(true);
                else cb(false);
            });
    }

    // feedback to user
    function cb(success) {
        $('form').removeClass("sending");

        if (success) {
            $('.form').hide();
            $('.message').fadeIn();
        }
        else {
            alert('Das hat leider nicht geklappt. Bitte versuche es noch einmal.');
        }
    }

    // let user do it again
    $('.redo').click(function () {
        $('.message').hide();
        $('.form').fadeIn();
        $('form button').attr("disabled", false);
    });
</script>