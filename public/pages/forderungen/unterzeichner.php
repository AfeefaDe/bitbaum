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
        abstract class SupportState
        {
            const DRAFT = 0;
            const VERIFIED = 1;
            const PUBLISHED = 2;
            //const DELETED = 3;
        }

        $db = Flight::db();
        var_dump($db->select('support', [
            'name',
            'comment'
        ], [
            'type' => SupportState::PUBLISHED
        ]));

        ?>

    <?php } ?>
