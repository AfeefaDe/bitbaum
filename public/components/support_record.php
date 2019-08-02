<article>

  <p>
  <strong class="index smaller"><?php echo $index ?? '' ?></strong>
  <!-- <strong class="index smaller">999</strong> -->
  <strong><?php echo $support['name'] ?></strong>

  <?php
if ($support['orga']) {
    if ($support['website']) {
        echo ' von <a href="' . $support['website'] . '" target="_blank">' . $support['orga'] . '</a>';
    } else {
        echo ' von ' . $support['orga'];
    }
}?>

  <?php
$date = strtotime($support['created_at']);

if (date("Ymd") == date("Ymd", $date)) {
    echo ' heute um ' . date("H:i", $date);
} else {
    echo ' am ' . date("d.m.", $date);
}
?>
</p>

<?php if ($support['comment']) {?>
    <blockquote class="smaller"><?php echo $support['comment'] ?></blockquote>
  <?php }?>

</article>