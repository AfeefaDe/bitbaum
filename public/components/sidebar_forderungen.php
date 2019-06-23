<aside class="fixed">
<?php switch ($lang) {
    case "en":
        ?>


        <?php
break;
    default:
        ?>

<section class="switch support">

    <h2>
      <span><?php echo SupportController::getTotalNumberOfSupports(); ?> Unterstützer*innen</span>
      <a href="/forderungen/unterzeichner/<?php echo $lang; ?>">
        <span class="smaller">Liste einsehen</span>
      </a>
    </h2>
  <p class="bold" style="margin-top: 0">haben unsere Forderungen bereits unterzeichnet.</p>

<div class="records">
<?php
$supports = SupportController::getSupports(5);

        foreach ($supports as $key => $support) {
            require 'components/support_record.php';
        }
        ?>

</div>
<?php
$url = (strpos($page, 'forderungen/info') !== false) ? '' : '/forderungen/' . $lang;
        ?>
<a href="<?php echo $url; ?>#unterzeichnen" class="button important" style="text-align: center"><span class="icon sign">Forderungen unterzeichnen</span></a>
<p class="smaller">Die Unterschriften geben den Forderungen mehr Gewicht, denn alle Beteiligten verweisen regelmäßig auf sie, bei Hintergrundgesprächen über öffentliche Auftritte bis hin zu Gesprächen mit Entscheidungsträger*innen aus allen möglichen Bereichen.</p>

</section>

<?php }?>
</aside>