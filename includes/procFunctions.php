<?php
/*
CSS of Percentaje Bar 
Date: 2015-05-08
By: Engineer, Web Developer Gregory Hidalgo Ramírez
Websites:
- www.gregoryhidalgo.com
- www.valoresweb.com

GitHub:  @ghidalgor | Twitter: @websoundcr
Please refer me :-);
*/

function coloBar($percentage, $cssRule)
{
	$htmlUnidadHeader = "<div class=\"coloBar border-all-round\">";
	$htmlEndUnit = "</div>";

	#Save html code
	$html = ""; #It's all HTML code
	$htmlUnit = ""; #HTML code of the Bar. The WIDTH depend of $percentage

	if(is_numeric($percentage) && $percentage>=0 && $percentage<=100)
	{
		#Create a DIV thet represents the "color bar".
		$htmlUnit = $htmlUnit."<div style=\"width:".$percentage."%;\" class=\"".$cssRule."\">".$percentage."%&nbsp;</div>";

		$htmlUnit = $htmlUnit."<div class=\"clear\"></div>"; #Clear both

		#Complete HTML / All Structure
		$html = $htmlUnidadHeader.$htmlUnit.$htmlEndUnit;
	}
	else
	{
		$html = $htmlUnidadHeader."&nbsp;".$htmlEndUnit; #Empty, not color bar
	}

	echo $html;
}
?>