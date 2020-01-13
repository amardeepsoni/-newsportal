
<style type="text/css">

	img{
		width: 100%;
		height: inherit;
	}
	ul
	{
		list-style: none;
		width: auto;
		position: relative;
		float: left;


	}

	ul li
	{
		position: relative;
		width: 30vw;
		overflow: hidden;
		height: auto;
		background-color:  white;
		margin-bottom: 10px;

	}
	.newscontainer
	{
		width: 80%;
		height: auto;
		background: #ddd;
		padding: 5px;
		margin: auto;
		display: flex;
		align-items: center;
		justify-content: center;




	}
	.header
	{
		position: absolute;
		bottom: 10px;

	}
	.intro
	{
		display: none;
	}
</style>

<div class='newscontainer'>
	<ul>
<?php
// Create DOM from URL

require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$doms = new Dom;

$domss = new Dom;
$domsss = new Dom;

/*$dom->load('https://www.ndtv.com/search?searchtext=road-accident');

# code...
$html = "<div style='width:400px;height:300px;float:left;'>";
$endhtml = "</div>";
for ($i = 2; $i < 100; $i++) {

$a = $dom->find('div #newslist')[$i];

echo $a;

}*/

$dom->load('https://www.ndtv.com/search?searchtext=road-accident-vehicle');

$element = $dom->getElementById('news_list')->find('ul')->find('li');

foreach ($element as $key) {

	$link = $key->find('a')->getAttribute('href');

	$doms->load($link);

	$get = $doms->find('article')->find('img')->getAttribute('data-src');
	$key->find('img')->setAttribute('src', $get);
	echo $key;
}

?>
</ul>
<ul>
<?php

$domss->load('https://www.ndtv.com/search?searchtext=road-safety');

$element2 = $domss->getElementById('news_list')->find('ul')->find('li');
foreach ($element2 as $key2) {

	$link2 = $key2->find('a')->getAttribute('href');

	$domsss->load($link2);

	$get2 = $domsss->find('article')->find('img')->getAttribute('data-src');
	$key2->find('img')->setAttribute('src', $get2);
	echo $key2;
}
?>

</ul>
</div>