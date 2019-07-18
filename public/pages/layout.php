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
    <meta charset="utf-8">
    <?php require 'components/meta_descriptions.php';?>
    <?php require 'components/embeds.php';?>
</head>
<body class="<?php echo 'page-' . $page . ' ' . $page_type; ?>">

<?php if ($page == 'start') {?>
    <div id="grid">
        <?php echo $page_content; ?>
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
    echo $page_content;
    ?>
    </section>
<?php }?>

    <?php
if (strpos($page, 'forderungen') !== false) {
    require 'components/sidebar_forderungen.php';
} else {
    require 'components/sidebar.php';
}
?>

<footer>
    <?php require 'components/footer.php';?>
</footer>

<script>

  $(document).ready(function() {

    $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var $footer = $('footer');
    var $sidebar = $('aside');

    $(document).on('resize scroll', function(){
      var scrollPos = document.scrollingElement.scrollTop;

      if ( ($footer.length && $footer.isInViewport()) ) {
        $sidebar.removeClass('fixed');
        $sidebar.css('top', ($footer.offset().top - $sidebar.height()) );
      }
      else {
        $sidebar.addClass('fixed');
        $sidebar.css('top', 0);
      }
    });

  });




    var isIE = function () {
        return navigator.userAgent.match(/MSIE|Trident/i);
    };
    if (isIE()) $('body').addClass('ie-browser');

    $('.readmore, .readless').click(function(){
      $(this).parent().find('.lessContent').toggle();
      $(this).parent().find('.moreContent').toggle();

      $(this).parent().find('.readmore').toggle();
      $(this).parent().find('.readless').toggle();
    });

</script>
</body>
</html>