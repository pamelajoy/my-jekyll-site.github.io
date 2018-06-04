<?php
/**
 * Display the content for a link component
 *
 * @package Wordpress
 */

$text = $button['link_text'];
$linkArray = $button['link_url'];
$url = $linkArray['url'];
$target = $linkArray['target'];
?>

<a href="<?php echo $url; ?>" class="btn py-2"><?php echo $text; ?></a>