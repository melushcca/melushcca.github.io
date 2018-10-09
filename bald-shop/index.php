<?php
require_once '../Autoloader.php';

?>
<head>
	<meta charset="utf-8">
	<link href="../css/reset.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/mobile.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Open+Sans" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
	<header>
    <nav>
      <ul>
        <li><a href="#">Neus</a></li>
        <li><a href="../aktuell-shop">Aktuell im Shop</a></li>
        <li><a href="../bald-shop">Bald im Shop</a></li>
      </ul>
    </nav>
  	</header>
	<main>
    	<div class="item-container">
    	<?php

$api = new FortniteClient;
$api->setKey('5607f17a3f3dc3370103ef407504d53e');

$data = $api->items->upcoming();

/*
 * Alle Item Namen und Bilder werden ausgegeben "Aktuell im Shop"
 */
foreach($data->{'items'} as $nameTEST) {
	$itemName = $nameTEST->{'name'};
    $itemImageUrl = $nameTEST->{'item'}->{'images'}->{'background'};
    /* 
     * echo '<h3>'.$itemName.'</h3><img src="'.$itemImageUrl.'"></br>';
     */
    echo '<div class="item-box">';
    echo '<img src="'.$itemImageUrl.'">';
    echo '<figcaption class="image-caption">'.$itemName.'</figcaption>';
    echo '</div>';
}
?>
		</div>
    </main>
    <footer>
    	<p>Made with _ by Melissa Santos</p>
    </footer>

</body>
