<?php
/*
Plugin Name:Jay Access Flickr
Plugin URI: http://www.jaylee.cn/jay_access_flickr/
Description: Access Flickr with other known IPs pointing to these same hosts! 
Author: @jayleecn
Version: 1.6
Author URI: http://weibo.com/jayleecn

*/ 

function jay_access_flickr($text) {
  $exchangeSource = array(
		"/<img(.+?)src=\"http:\/\/static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm1\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm2\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm3\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm4\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm5\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm6\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm7\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm8\.static\.flickr\.com\/(.*?)\"(.*?)>/i",		
		"/<img(.+?)src=\"http:\/\/farm9\.static\.flickr\.com\/(.*?)\"(.*?)>/i"
		);
	$exchangeDest = array(
		"<img$1src=\"http://68.142.214.43/$2\"$3>",
		"<img$1src=\"http://68.142.214.43/$2\"$3>",
		"<img$1src=\"http://69.147.90.159/$2\"$3>",
		"<img$1src=\"http://69.147.90.215/$2\"$3>",
		"<img$1src=\"http://67.195.19.66/$2\"$3>",
		"<img$1src=\"http://67.195.19.74/$2\"$3>",
		"<img$1src=\"http://98.136.170.121/$2\"$3>",
		"<img$1src=\"http://98.138.8.116/$2\"$3>",
		"<img$1src=\"http://98.136.240.40/$2\"$3>",
		"<img$1src=\"http://98.137.205.126/$2\"$3>"
	);
	$text = preg_replace($exchangeSource,$exchangeDest,$text);
	return $text;
}

add_filter('the_content', 'jay_access_flickr');
add_filter('the_excerpt', 'jay_access_flickr');

?>
