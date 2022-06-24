<?php
$conexao=mysqli_connect("localhost","root","","series");
$titulo=$_POST['titulo'];
$atrizprincipal=$_POST['atrizprincipal'];
$atorprincipal=$_POST['atorprincipal'];
$totaldeepisodios=$_POST['totaldeepisodios'];
$sinopse=$_POST['sinopse'];
echo "{$titulo}-{$atrizprincipal}-{$atorprincipal}-{$totalepisodios}-{$sinopse}";
$sql_inserir="insert into cadseries(titulo,atrizprincipal,atorprincipal,temporadas,totaldeepisodios,sinopse,) values ('{$titulo}','{$atrizprincipal}','{$atorprincipal}',{$temporadas},{$totaldeepisodios},'{$sinopse}')";
mysqli_query($conexao,$sql_inserir);
mysqli_close($conexao);
?>