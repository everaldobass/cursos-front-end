<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Consulta Funcionario no Banco</title>
</head>
<body>
<div>
   <h1> Dados do Funcionário Cadastrado</h1>
</div>

<table border="1">
   <tr>
      <td>Codigo</td><td>Matricula</td><td>Nome</td><td>Endereço</td><td>Cidade</td><td>Estado</td><td>Email</td><td>Telefone</td><td>Sexo</td>
   </tr>

<?php
include"conexao.inc";

$vcod=$_POST["Cod"];

$sql="SELECT * FROM tb_funcionario WHERE cod=$vcod <= cod=$vcod";

$res=mysqli_query($conexao,$sql);

while($reg=mysqli_fetch_row($res)){

$vcod=$reg[0];
$vmat=$reg[1];
$vnome=$reg[2];
$vend=$reg[3];
$vcid=$reg[4];
$vest=$reg[5];
$vemail=$reg[6];
$vtel=$reg[7];
$vsexo=$reg[8];




echo "<tr>";
echo "<td>$vcod</td><td>$vmat</td><td>$vnome</td><td>$vend</td><td>$vcid</td><td>$vest</td><td>$vemail</td><td>$vtel</td><td>$vsexo</td>";
echo "</tr>";

}

mysqli_close($conexao);

?>
</table>

<a href="formConsultaFunc.html"/>Consulta<a/>
<a href="formCad.html"/>Cadastrar<a/>
</body>
</html>
