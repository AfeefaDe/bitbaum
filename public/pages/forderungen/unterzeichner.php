<?php switch ($lang) {
    case "en":
        ?>
        <h1>Supporter</h1>
        <?php
break;
    default:
        ?>
        <h1>Unterzeichner</h1>

        <div class="grid-2">
        <?php
$supports = SupportController::getSupports(5);

        foreach ($supports as $key => $support) {
            require 'components/support_record.php';
        }
        ?>
</div>
        <section>
            <?php
require_once 'components/support_form.php';
        ?>
        </section>

    <?php }?>
