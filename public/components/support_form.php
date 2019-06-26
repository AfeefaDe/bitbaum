<?php
$wording = [
    'nameLabel' => [
        'de' => 'Dein vollständiger Name',
        'en' => 'Your full name'
    ],
    'namePlaceholder' => [
        'de' => 'Vor- und Nachname',
        'en' => 'Forename and surname'
    ],
    'asOrga' => [
        'de' => 'Ich möchte im Namen einer Organisation unterzeichnen',
        'en' => 'I would like to sign as an organization'
    ],
    'orgaPlaceholder' => [
        'de' => 'Name der Organisation',
        'en' => 'Name of the organization'
    ],
    'websitePlaceholder' => [
        'de' => 'Website der Organisation',
        'en' => 'Website of the organization'
    ],
    'commentLabel' => [
        'de' => 'Kommentar',
        'en' => 'Comment'
    ],
    'commentPlaceholder' => [
        'de' => 'Optional kannst du deiner Unterzeichnung einen Kommentar hinzufügen',
        'en' => 'Feel free to leave an additional comment to your signing.'
    ],
    'contactLabel' => [
        'de' => 'Kontakt',
        'en' => 'Contact'
    ],
    'emailPlaceholder' => [
        'de' => 'E-Mail Adresse',
        'en' => 'E-mail address'
    ],
    'emailInfo' => [
        'de' => 'Deine E-Mail Adresse benötigen wir zur Verifizierung. Nachdem du deine Unterzeichnung per E-Mail bestätigt hast, löschen wir deine E-Mail Adresse aus unserer Datenbank.',
        'en' => 'Your E-mail address is required only for verification of your signing. After you verified it, we are removing your E-mail address data.'
    ],
    'privacyLabel' => [
        'de' => 'Datenschutz',
        'en' => 'Privacy'
    ],
    'privacyPlaceholder' => [
        'de' => 'Ich willige ein, dass meine Daten zur Verarbeitung übermittelt und auf dieser Website veröffentlicht werden.',
        'en' => 'I agree that my personal data get transfered and published on this website.'
    ],
    'privacyInfo' => [
        'de' => 'Mehr dazu lesen Sie in unserer <a href="/datenschutz/<?php echo $lang; ?>#anmeldefunktion">Datenschutzerklärung</a>.',
        'en' => 'Read more about privacy in our <a href="/datenschutz/<?php echo $lang; ?>#anmeldefunktion">Datenschutzerklärung</a>.'
    ],
    'subscribePlaceholder' => [
        'de' => 'Ich möchte über den weiteren Verlauf der Forderungen informiert werden.',
        'en' => 'Please keep me informed about the further process of the project.'
    ],
    'subscribeInfo' => [
        'de' => 'In diesem Fall speichern wir deine E-Mail Adresse auch nach der Verifizierung deiner Unterzeichnung.',
        'en' => 'In this case we keep your e-mail address data beyond the verification process.'
    ],
    'sendLabel' => [
        'de' => 'Jetzt unterzeichnen!',
        'en' => 'Sign now!'
    ],
    'message' => [
        'de' => 'Vielen Dank für deine Unterstützung! Bitte schau in dein Postfach.',
        'en' => 'Thank you for signing. We appreciate your support. Please check your e-mail inbox for further steps to get your signment activated and published.'
    ],
    'againLabel' => [
        'de' => 'Weitere Unterzeichnung.',
        'en' => 'Sign again'
    ]
];
?>

<div>

  <form class="form">

    <div class="group">
      <h3 class="bolder"><?php echo $wording['nameLabel'][$lang] ?>:</h3>
      <div class="input">
        <input type="text" id="form-name" placeholder="<?php echo $wording['namePlaceholder'][$lang] ?>" required/>
        <span class="readmore"><?php echo $wording['asOrga'][$lang] ?></span>
        <input class="moreContent" type="text" id="form-orga" placeholder="<?php echo $wording['orgaPlaceholder'][$lang] ?>"/>
        <input class="moreContent" type="url" id="form-website" placeholder="<?php echo $wording['websitePlaceholder'][$lang] ?>"/>
      </div>
    </div>

    <div class="group">
      <h3><?php echo $wording['commentLabel'][$lang] ?></h3>
      <div class="input">
        <textarea id="form-comment" placeholder="<?php echo $wording['commentPlaceholder'][$lang] ?>" maxlength="500"></textarea>
      </div>
    </div>

    <div class="group">
      <h3><?php echo $wording['contactLabel'][$lang] ?></h3>
      <div class="input">
        <input type="email" id="form-email" placeholder="<?php echo $wording['emailPlaceholder'][$lang] ?>" required/>
        <span class="smaller"><?php echo $wording['emailInfo'][$lang] ?></span>
      </div>
    </div>

    <h3><?php echo $wording['privacyLabel'][$lang] ?></h3>
    <div class="group group--checkbox">
      <input type="checkbox" id="form-data_agreement" required>
      <label>
        <span><?php echo $wording['privacyPlaceholder'][$lang] ?></span>
        <br><span class="smaller"><?php echo $wording['privacyInfo'][$lang] ?></span>
      </label>
    </div>

    <div class="group group--checkbox">
      <input type="checkbox" id="form-contact_agreement">
      <label>
        <span><?php echo $wording['subscribePlaceholder'][$lang] ?></span>
        <br><span class="smaller"><?php echo $wording['subscribeInfo'][$lang] ?></span>
      </label>
    </div>

    <div class="group">
      <input style="width: 50%" type="submit" value="<?php echo $wording['sendLabel'][$lang] ?>"/>
    </div>
  </form>

</div>

<div class="message" style="display: none"><?php echo $wording['message'][$lang] ?>
    <br>
    <button class="redo"><?php echo $wording['againLabel'][$lang] ?></button>
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
            "website": $('#form-website').val(),
            "orga": $('#form-orga').val(),
            "comment": $('#form-comment').val(),
            "data_agreement": $('#form-data_agreement').prop('checked'),
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
        $('form input[type=url]').val('');
        $('form textarea').val('');
    });
</script>