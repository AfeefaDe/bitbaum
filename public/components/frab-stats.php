<?php
// require_once('FrabFeed.php');

// $feed = new FrabFeed();
// $feed->fetch();

// $numberOfSlots = count($feed->getSlots());
?>

<?php switch ($lang) {
    case "en":
        ?>

<div>
  <p>130 Inputs</p>
  <!-- <p><?php #echo $numberOfSlots ?> Slots</p> -->
  <p>4321 Visitors</p>
</div>

<?php
break;
    default:
        ?>
<div>
  <p>130 Beiträge</p>
  <!-- <p><?php #echo $numberOfSlots ?> Slots</p> -->
  <p>4321 Teilnehmer</p>
</div>

<?php }?>
