<?php

function vd($arr){
  echo '<pre>';
  var_dump($arr);
}

$lista = array('1','2','3','4','5');
$lista[] = 6;
$lista['vilao'] = 'coringa';
$lista[] = 7;

vd($lista); 
echo $lista['vilao'];


//$curso = array();
$curso['InfoInter'] = array('DES'=>'Jeferson','OSA'=>'Paulo','CEI','RC','DDW');
$curso['medio'] = array('matematica'=>'Sonic','portugues','geografia','fisica');
$curso['logistica'] = [];
$curso['administracao'] = []; 
vd($curso);
//echo $curso['InfoInter'][0];
//echo $curso['InfoInter'][2];

foreach($curso['medio'] as $valor){
  echo $valor.'<br>';
}
echo '<hr>';
foreach($curso['InfoInter'] as $valor){
  echo $valor.'<br>';
}

$curso['medio'][0] = 'Artes';
unset($curso['medio']['matematica']);
$curso['medio'][11] = 'informatica';
$curso['medio'][] = 'finanças';
vd($curso);



/*for($i=0;$i<5;$i++){
  echo $curso['medio'][$i].'<br>';
}*/

/*para tirar um vetor se usa o UNSET que irá tirá-lo*/
/*$curso é uma variável*/
/*o indice é utilizado para acessar o conteúdo da indição*/
?>

