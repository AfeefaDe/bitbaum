<?php switch ($lang) {
    case "en":
        ?>
        <h1>Supporter</h1>
        <?php
break;
    default:
        ?>
        <h1>Unterstützer*innenliste</h1>
        <p><strong>Die folgenden Personen unterstützen unserer <a href="/forderungen/<?php echo $lang; ?>">Forderungen</a> und haben diese unterzeichnet.</strong></p>
        <hr>
        <div class="support-records">
        <?php
$supports = SupportController::getSupports(5);

        foreach ($supports as $key => $support) {
            require 'components/support_record.php';
        }
        ?>
</div>
        <section>
            <?php
// require_once 'components/support_form.php';
        ?>
        </section>

    <?php }?>
