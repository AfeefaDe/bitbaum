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
  <p>130 inputs</p>
  <!-- <p><?php #echo $numberOfSlots ?> Slots</p> -->
  <p>2000+ participants</p>
</div>

<?php
break;
    default:
        ?>
<div>
  <p>130 Beiträge</p>
  <!-- <p><?php #echo $numberOfSlots ?> Slots</p> -->
  <p>2000+ Teilnehmende</p>
</div>

<?php }?>
