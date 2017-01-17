<?php

$r_numb = rand(1,3);
$ads_link_r;
if ($r_numb == 1){$ads_link_r = "http://www.prada.com/"; }
else if ($r_numb == 2){$ads_link_r = "https://www.gucci.com/"; }
else if ($r_numb == 3){$ads_link_r = "http://www.chanel.com/"; };


	return array(
	'bg'=>'media/img/ads'.$r_numb.'.png',
	'ads_url'=> $ads_link_r
	);

?>	