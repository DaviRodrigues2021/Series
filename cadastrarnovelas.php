<?php
$conexao=mysqli_connect("localhost","root","","series");
$titulo=$_POST['titulo'];
$atrizprincipal=$_POST['atrizprincipal'];
$atorprincipal=$_POST['atorprincipal'];
$totaldeepisodios=$_POST['totalepisodios'];
$sinopse=$_POST['sinopse'];
echo "{$titulo}-{$atrizprotagonista}-{$atorprotagonista}-{$totalepisodios}-{$sinopse}";
$sql_inserir="insert into cadseries(titulo,atrizprotagonista,atorprotagonista,totalepisodios,sinopse,) values ('{$titulo}','{$atrizprincipal}','{$atorprincipal}',{$temporadas},{$totaldeepisodios},'{$sinopse}')";
mysqli_query($conexao,$sql_inserir);
mysqli_close($conexao);
?>