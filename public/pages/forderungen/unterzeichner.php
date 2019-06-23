<?php switch ($lang) {
    case "en":
        ?>
        <h1>Full list of supporters</h1>
        <p><strong>The following people support our <a href="/forderungen/<?php echo $lang; ?>">demands</a> and signed them.</strong></p>
        <hr>
        <?php
break;
    default:
        ?>
        <h1>Unterstützer*innenliste</h1>
        <p><strong>Die folgenden Personen unterstützen unserer <a href="/forderungen/<?php echo $lang; ?>">Forderungen</a> und haben diese unterzeichnet.</strong></p>
        <hr>

    <?php }?>

    <div class="support-records">
        <?php
$supports = SupportController::getSupports(5);

foreach ($supports as $key => $support) {
    require 'components/support_record.php';
}
?>
</div>
