<article>



  <p>
  <strong><?php echo $support['name'] ?></strong>

  <?php if ($support['orga']) {?>
    <?php echo ' von ' . $support['orga'] ?>
  <?php }?>

  <?php
$date = strtotime($support['created_at']);

if (date("Ymd") == date("Ymd", $date)) {
    echo ' | heute um ' . date("H:i", $date);
} else {
    echo ' | am ' . date("d.m.", $date);
}
?>
</p>

<?php if ($support['comment']) {?>
    <blockquote><?php echo $support['comment'] ?></blockquote>
  <?php }?>

</article>