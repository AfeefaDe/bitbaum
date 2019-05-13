<?php
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header("Content-Security-Policy: default-src 'self' bits-und-baeume.org 'unsafe-inline'");

$route = explode("/", $_SERVER['REQUEST_URI']);
$pages_permitted = ["datenschutz", "programm", "programm-frab", "impressum", "info", "ziele", "presse", "unterstuetzen", "forderungen", "infrastruktur", "waechst"];
$langs_permitted = ["de", "en"];
$lang = $langs_permitted[0]; // default language: de

$lang_uri = strtolower($route[sizeof($route) - 1]);
if (in_array($lang_uri, $langs_permitted)) {
    $lang = $lang_uri;
} else {
    $lang_ua = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
    if (in_array($lang_ua, $langs_permitted)) {
        $lang = $lang_ua;
    }

}

$page_type = 'sub-page';
$page = $route[1];
if (!in_array($page, $pages_permitted)) {
    $page = 'start';
    $page_type = 'root-page';
}

// clean URL
if ($lang_uri != $lang || sizeof($route) > 3 || ($page == 'start' && sizeof($route) > 2)) {
    if ($_SERVER['SERVER_NAME'] == "127.0.0.1") {
        $rediect_url = 'Location: http://localhost:3020';
    } else {
        $rediect_url = 'Location: https://' . $_SERVER['SERVER_NAME'];
    }

    if ($page != "start") {
        $rediect_url .= '/' . $page;
    }

    $rediect_url .= '/' . $lang;
    header($rediect_url, true, 301);
    die();
}

switch ($lang) {
    case "en":
        $page_title = 'Bits & Bäume Conference (was 17th - 18th Nov 2018) grows to become a movement!';
        $page_description = 'The “Bits & Bäume – Conference on digitalisation and sustainability“ continues in a decentralized manner to grow and prosper.';
        break;
    default:
        $page_title = 'Bits & Bäume Konferenz (war 17. - 18. Nov 2018) wächst zur Bewegung!';
        $page_description = 'Die „Bits & Bäume – Konferenz für Digitalisierung und Nachhaltigkeit“ wird dezentralisiert fortgeführt, auf dass sie weiter wächst und gedeiht.';
        break;
}?>

<!DOCTYPE html>
<?php switch ($lang) {
    case "en": ?>
<html lang="en">
<?php break;
    default: ?>
<html lang="de">
<?php break;
}?>
<head>
    <title><?php echo $page_title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <meta name="viewport" content="initial-scale=1">
    <meta name="referrer" content="same-origin">
    <meta http-equiv="expires" content="Mon, 26 Jul 1997 05:00:00 GMT"/>
    <meta http-equiv="Pragma" content="no-cache">
    <?php require 'components/meta_descriptions.php';?>
    <?php require 'components/embeds.php';?>
</head>
<body class="<?php echo 'page-' . $page . ' ' . $page_type; ?>">

<?php if ($page == 'start') {?>
    <div id="grid">
        <?php require 'pages/' . $page . '.php';?>
    </div>
<?php } else {?>
    <?php require 'components/header.php';?>
    <section>
        <?php
switch ($lang) {
    case "en":
        echo "<a href='/en' class='button back-button'>Overview</a>";
        break;
    default:
        echo "<a href='/de' class='button back-button'>zur Übersicht</a>";
}
    require 'pages/' . $page . '.php';
    ?>
    </section>
<?php }?>

<aside>
    <?php require 'components/sidebar.php';?>
</aside>

<footer>
    <?php require 'components/footer.php';?>
</footer>

<script>
    var isIE = function () {
        return navigator.userAgent.match(/MSIE|Trident/i);
    };
    if (isIE()) $('body').addClass('ie-browser');
</script>
</body>
</html>
