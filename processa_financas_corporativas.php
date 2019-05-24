<!-- Processar as informações na tabela -->
<?php 

include('C:\wamp\www\Geral\Financas_Corporativas\conecta_financas_corporativas.php');// string conexão ao banco de dados

$id=0;
$vativo=$_POST['f_ativo'];
$vambiente=$_POST['f_ambiente'];
$vinvestidores=$_POST['f_investidores'];
$vparticipantes=$_POST['f_participantes'];
$vlocal=$_POST['f_local'];
$vlivre=$_POST['f_livre'];
$vcultura=$_POST['f_cultura'];
$vmonopolio=$_POST['f_monopolio'];
$vcustos=str_replace(",",".",$_POST['f_custos']);
$vcenario=$_POST['f_cenario'];
$vjuros=str_replace(",",".",$_POST['f_juros']);#trocar virgula por ponto
$vrendafixa=str_replace(",",".",$_POST['f_rendafixa']);

$sql=$mysqli->prepare("INSERT INTO tab_resultados VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");

$sql->bind_param("issssssssssss",$id,$vativo,$vambiente,$vinvestidores,$vparticipantes,$vlocal,$vlivre,$vcultura,$vmonopolio,$vcustos,$vcenario,$vjuros,$vrendafixa);

$sql->execute();

$result=$sql->affected_rows;

if ($result >0){

echo "Cadastro realizado com sucesso!!";

echo "</br>";

echo "<a href=Index.html target_self> Voltar </a>";#link para voltar ao formulário inicial
		
}
	
?>