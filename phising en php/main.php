<?php


$str = 	file_get_contents("http://www.elmundo.es/");
$str2 = $str;
$i = 0;
while($str['1'] != ""){
	
	if($i == 0){
		$str=(explode('src="', $str, 2));          //genera un $str['0'] y un $str['1']
	}
	else{
		$str=(explode('src="', $str['1'], 2));
	}
	
	$str=(explode('"', $str['1'], 2));
	
	$pic[] = $str['0'];
	
	$i++;

}



$num = count($pic);
$num = $num -1;   //quitamos el error generado por el while

/*
for ($i = 0; $i < $num ; $i++){
echo $i . $pic[$i] . "</p>";
}
*/

for ($i = 0; $i < $num ; $i++){

	if($i == 0){$replaced = str_replace($pic[$i], $_GET['pic'], $str2);}
	else{$replaced = str_replace($pic[$i], $_GET['pic'], $replaced);}
	
}


echo $replaced;







?>
