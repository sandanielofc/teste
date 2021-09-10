<?php



//URL DO SITE
$url = 'https://mbasic.facebook.com/profile.php?id=100004088300636';

//PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('<div class="br bs">',$dadosSite);
$var2 = explode("</div>",$var1[1]);

print $var2[0];


?>