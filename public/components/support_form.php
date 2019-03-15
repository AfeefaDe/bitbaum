<h2>Forderungen unterzeichnen</h2>

<form class="form">
    <input type="text" id="form-name" placeholder="Your name" required/>
    <input type="text" id="form-orga" placeholder="Your organisation"/>
    <input type="email" id="form-email" placeholder="Your e-mail address" required/>
    <textarea id="form-comment" placeholder="Your comment to the demands" maxlength="500"></textarea>
    <p class="smaller">
        TODO: data protection stuff...
        You can find out more about this in our
        <a href="/datenschutz/<?php echo $lang; ?>#anmeldefunktion">privacy policy</a>.
    </p>
    <input type="submit" value="Jetzt unterzeichnen!"/>
</form>

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