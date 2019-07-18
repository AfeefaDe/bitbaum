<?php

$page_title = [
    'de' => 'Bits & Bäume - die Bewegung für Digitalisierung und Nachhaltigkeit',
    'en' => 'Bits & Bäume - The Movement for Digitalization and Sustainability'
];

$page_description = [
    'de' => 'Die „Bits & Bäume“ wird dezentralisiert fortgeführt, auf dass sie weiter wächst und gedeiht.',
    'en' => 'The “Bits & Bäume“ continues in a decentralized manner to grow and prosper.'
];

$og_title = $page_title;
$og_description = $page_description;

$og_image = [
    'de' => '/bits-baeume.png',
    'en' => '/bits-baeume.png'
];

if (strpos($page, 'forderungen') !== false) {

    $page_title = [
        'de' => 'Wir fordern eine nachhaltige Digitalisierung! Bits & Bäume Bewegung',
        'en' => 'We demand a sustainable digitalization! Bits & Bäume Movement'
    ];
    $og_title = $page_title;

    $page_description = [
        'de' => 'Unterzeichne und bekräftige diese gemeinsamen Forderungen wichtiger Organisationen.',
        'en' => 'Sign and support these common demands released by important organizations'
    ];
    $og_description = $page_description;

    $og_image = [
        'de' => '/img/BuB-Forderungen-medium.jpg',
        'en' => '/img/BuB-Forderungen-medium.jpg'
    ];

}

?>

<title><?php echo $page_title[$lang] ?></title>
<meta name="description" content="<?php echo $page_description[$lang] ?>">

<meta name="viewport" content="initial-scale=1">
<meta name="viewport" content="initial-scale=1">
<meta name="referrer" content="same-origin">
<meta http-equiv="expires" content="Mon, 26 Jul 1997 05:00:00 GMT"/>
<meta http-equiv="Pragma" content="no-cache">

<meta property="og:url" content="https://bits-und-baeume.org">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $og_title[$lang] ?>">
<meta property="og:description" content="<?php echo $og_description[$lang] ?>">
<meta property="og:image" content="<?php echo $og_image[$lang] ?>">