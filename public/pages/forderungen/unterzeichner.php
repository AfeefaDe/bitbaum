<?php switch ($lang) {
    case "en":
        ?>
        <h1>Supporter</h1>
        <?php
        break;
    default:
        ?>
        <h1>Unterzeichner</h1>

        <?php
        $db = Flight::db();
        var_dump($db->select('support', [
            'name',
            'comment'
        ], [
            'type' => SupportState::PUBLISHED
        ]));
        ?>

        <section>
            <?php
            require_once 'components/support_form.php';
            ?>
        </section>

    <?php } ?>
