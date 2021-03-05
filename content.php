<?php
echo "<html>";
echo " <head>";
echo " <meta charset=\"utf-8\">";
echo " <title>Домашка</title>";
echo " </head>";
echo " <body>";
echo "<link rel= \"stylesheet\" href=\"style.css\">";
echo "</head>"; 
echo "<body>";
echo "<div id=\"content\"><p><strong>Контент</strong></p>";
echo "<div class=\"menu\">"; 
 echo "<ul style=\"list-style:none\">
  <li><a href=\"#block1\">Раздел 1</a></li>
<li><a href=\"#block2\">Раздел 2</a></li>
<li><a href=\"#block3\">Раздел 3</a></li>
<li><a href=\"#block4\">Раздел 4</a></li>";
echo "</ul>";
echo "</div>";
echo "<div id=\"block1\">"; 
	echo "<p><span class=\"b1\">Раздел 1</span><br>"; 
	echo "<ul style="list-style:outside"> 
			<li>1.1 "Хочешь жить - умей вертеться"</li>
			<li>1.2 "Lorem ipsum dolor sit amet"</li> 
			<li>1.3 "Tincidunt ut lacreet dolore magna aliguam erat volutpat"</li></p>";
		echo "</ul>";
echo "</div>";  
echo "<div id=\"block2\">"; 
	echo "<p><span class=\"b2\"><strong>Раздел 2</strong></span><br>
		<ul style=\"list-style:outside\"> 
		<li>1.1 "Хочешь жить - умей вертеться"</li>
			<li>1.1 "Хочешь жить - умей вертеться"</li>
			<li>1.2 "Lorem ipsum dolor sit amet"</li> 
			<li>1.3 "Tincidunt ut lacreet dolore magna aliguam erat volutpat"</li></p>";
		echo"</ul>";
echo "</div>"
echo "<div id=\"block3\">"; 
	echo "<p><span class=\"b3\"> Раздел 3</span><br>
		<ul style=\"list-style:outside\"> 
		<li>1.1 "Хочешь жить - умей вертеться"</li>
			<li>1.1 "Хочешь жить - умей вертеться"</li>
			<li>1.2 "Lorem ipsum dolor sit amet"</li> 
			<li>1.3 "Tincidunt ut lacreet dolore magna aliguam erat volutpat"</li>
	</p>";
		echo "</ul>";
echo "</div>";
echo "<div id=\"block4\">"; 
	echo "<p><span class=\"b4\"> Раздел 4</span><br>
		<ul style=\"list-style:outside\">
		<li>1.1 "Хочешь жить - умей вертеться"</li>	
		<li>1.1 "Хочешь жить - умей вертеться"</li>
		<li>1.2 "Lorem ipsum dolor sit amet"</li> 
		<li>1.3 "Tincidunt ut lacreet dolore magna aliguam erat volutpat"</li>
	</p>";
		echo "</ul>";
		echo"</body>";
	echo "</html>";
	?>