<?php switch ($lang) {
    case "en":
        ?>
        <h1>Full list of supporters</h1>
        <p><strong>In addition to the initial <a href="#orgsen">B&B-organisers</a> the following people and organisations support our <a href="/forderungen/<?php echo $lang; ?>">demands</a> and signed them.</strong></p>
        <hr>
        <?php
break;
    default:
        ?>
        <h1>Unterstützer*innenliste</h1>
        <p><strong>Zusätzlich zu den initialen <a href="#orgsde">B&B-Organisationen</a> unterstützen die folgenden Personen und Organisationen unsere <a href="/forderungen/<?php echo $lang; ?>">Forderungen</a> und haben diese unterzeichnet.</strong></p>
        <hr>

    <?php }?>

    <div class="support-records">
        <?php
$supports = SupportController::getSupports(null, "ASC");

$index = 1;
foreach ($supports as $key => $support) {
    require 'components/support_record.php';
    $index++;
}
?>
</div>
