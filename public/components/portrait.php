<div class="portrait">
    <div class="image" style="background-image: url('<?php echo $human['picture']; ?>')"></div>
    <blockquote><?php echo $human['quote_' . $lang]; ?></blockquote>

    <?php if ($human['name']) {?>
    <p><?php echo $human['name'] . ', ' . $human['orga']; ?></p>
    <?php } else {?>
    <p><?php echo $human['orga']; ?></p>
    <?php }?>

    <?php if (isset($human['vimeo'])) {?>
    <p><a href="<?php echo $human['vimeo']; ?>" target="_blank">Kurzinterview</a> mit <?php echo $human['orga']; ?></p>
    <?php }?>
</div>