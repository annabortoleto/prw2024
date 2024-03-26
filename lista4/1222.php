<?php
$in = array_map('intaval', explode(" ",readline()));
$n = $in[0];
$l = $in[1];
$c = $in[2];
$palavras = explode(" ", readline());
$tamlinha = 0;
$linhas = 0;
print_r($palavras);
for ($i=0, $i < $n, $i++){
    $tamlinha += strlen($palavras[$i])+1;
    if($itamlinha > $c){
        $linhas++;
        $tamlinha = strlen($palavras($i))+1;
    }
}
echo "linhas: ".$linhas."\n";
$pag = ceil($linhas/$l);
echo $pag."\n";
?>