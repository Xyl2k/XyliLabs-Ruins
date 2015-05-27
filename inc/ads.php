<?php
if (!defined('AUTHED') || !AUTHED)
	die('No direct script access allowed');

	function get_random_ad($ads) {
		return $ads[rand(0, count($ads) - 1)];
	}
	
	function display_ad($ad) {
		list($width, $height) = getimagesize($ad['img_url']);
?>
<a href="<?php echo($ad['url']); ?>">
	<img src="<?php echo($ad['img_url']); ?>" width="<?php echo($width); ?>" height="<?php echo($height); ?>" alt="<?php echo($ad['alt']) . "\" border=\"0\" />" ; ?></a>
<?php
	}
	
	$ads = array(
    array(
        'url' => 'http://www.google.com/',
        'alt' => 'Google',
        'img_url' => 'ressources/ads_1.png'
    ),
    array(
        'url' => 'http://www.yahoo.com/',
        'alt' => 'Yahoo!',
        'img_url' => 'ressources/ads_2.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'ressources/ads_3.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'ressources/ads_4.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'ressources/ads_5.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'ressources/ads_6.png'
    )
);

	display_ad(get_random_ad($ads));
?>
