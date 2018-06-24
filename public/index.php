<?php
  $route = $_SERVER['REQUEST_URI'];
  $page;
  $page_type = 'sub-page';
  $page_title = 'Bits & Bäume Konferenz 17./18. Nov 2018 in Berlin';
  $page_description = 'Die Konferenz „Bits & Bäume“ bringt alle wichtigen Themen der Digitalisierung und der ökologischen und sozialen Nachhaltigkeit zusammen.';
  switch ($route) {
    case '/call':
    $page = 'call';
    break;
    case '/ziele':
    $page = 'kreis';
    break;
    case '/info':
    $page = 'info';
    break;
    case '/anmelden':
    $page = 'anmelden';
    break;
    case '/impressum':
    $page = 'impressum';
    break;
    case '/datenschutz':
    $page = 'datenschutz';
    break;
    default:
      $page = 'start';
      $page_type = 'root-page';
  }
?>

<!DOCTYPE html>
<html lang="de"> 
<head> 
  <title><?php echo $page_title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  <meta name="viewport" content="initial-scale=1">
  <meta name="referrer" content="same-origin">
  <?php require('components/meta_descriptions.php'); ?>
  <?php require('components/embeds.php'); ?>
</head> 
<body class="<?php echo 'page-' . $page . ' ' . $page_type; ?>">
  
<?php if ( $page == 'start' ) { ?>
  <div id="grid">
    <?php require('pages/' . $page . '.php'); ?>
  </div>
<?php } else { ?>
  <?php require('components/header.php'); ?>
  <section>
    <a class="button back-button" href="/">zur Übersicht</a>
    <?php require('pages/' . $page . '.php'); ?>
  </section>
<?php } ?>

  <aside>
    <?php require('components/sidebar.php'); ?>
  </aside>

  <footer>
    <?php require('components/footer.php'); ?>
  </footer>

<script>
  var isIE = function () { return navigator.userAgent.match(/MSIE|Trident/i); };
  if( isIE() ) $('body').addClass('ie-browser');
</script>
</body>
</html>