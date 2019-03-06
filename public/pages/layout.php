<?php
switch ($lang) {
    case "en":
        $page_title = 'Bits & Bäume Conference 17th - 18th Nov 2018 in Berlin';
        $page_description = 'The conference „Bits & Bäume“ covers all important topics of digitalization and ecological and social sustainability.';
        break;
    default:
        $page_title = 'Bits & Bäume Konferenz 17. - 18. Nov 2018 in Berlin';
        $page_description = 'Die Konferenz „Bits & Bäume“ bringt alle wichtigen Themen der Digitalisierung und der ökologischen und sozialen Nachhaltigkeit zusammen.';
        break;
} ?>

<!DOCTYPE html>
<?php switch ($lang) {
case "en": ?>
<html lang="en">
<?php break;
default: ?>
<html lang="de">
<?php break;
} ?>
<head>
    <title><?php echo $page_title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <meta name="viewport" content="initial-scale=1">
    <meta name="referrer" content="same-origin">
    <meta http-equiv="expires" content="Mon, 26 Jul 1997 05:00:00 GMT"/>
    <meta http-equiv="Pragma" content="no-cache">
    <?php require 'components/meta_descriptions.php'; ?>
    <?php require 'components/embeds.php'; ?>
</head>
<body class="<?php echo 'page-' . $page . ' ' . $page_type; ?>">

<?php if ($page == 'start') { ?>
    <div id="grid">
        <?php echo $page_content; ?>
    </div>
<?php } else { ?>
    <?php require 'components/header.php'; ?>
    <section>
        <?php
        switch ($lang) {
            case "en":
                echo "<a href='/en' class='button back-button'>Overview</a>";
                break;
            default:
                echo "<a href='/de' class='button back-button'>zur Übersicht</a>";
        }
        echo $page_content;
        ?>
    </section>
<?php } ?>

<aside>
    <?php require 'components/sidebar.php'; ?>
</aside>

<footer>
    <?php require 'components/footer.php'; ?>
</footer>

<script>
    var isIE = function () {
        return navigator.userAgent.match(/MSIE|Trident/i);
    };
    if (isIE()) $('body').addClass('ie-browser');
</script>
</body>
</html>