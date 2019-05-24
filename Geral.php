<?php

//Declaração das variáveis enviadas 

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




//Cálculo para situação favoravel ou desfavoravel
/*
$vsoma=$_POST['f_soma'];
$vfavoravel=$_POST['f_favoravel'];
$vdesfavoravel=$_POST['f_desfavoravel'];
$vNA=$_POST['f_NA'];


$vsoma=$vambiente+$vinvestidores+$vparticipantes+$vlivre+$vcultura+$vmonopolio+$vcenario;



*/

?>



<!DOCTYPE HTML>

<html lang="pt-br" >

<head> 

<title> Formulário Finanças Corporativas html</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Comando para acertar a acentuação-->

<link rel="stylesheet" href="Geral.css"> <!--Comando para ligar HTML e CSS-->

</head>

<body> <!--Corpo Centralizado -->

		<header> <!--Cabeçalho -->

			<h1><center> Análise de Finanças Corporativas </center></h1>

		</header>
		
	<nav id="menu"><!-- Criação de Menu Principal via lista ordenada-->

			<ul><!-- Lista não ordenada -->
			
				<li><a href="Index.html" target="_self">Home</a></li>
				<li><a href="Geral.html" target="_self">Visão Geral</a></li>
				<li><a href="Analise.html" target="_self">Análise das Variáveis do Projeto</a></li>
				<li><a href="Calculo.html" target="_self">Cálculos de Projetos</a></li>
				<li><a href="Decisao.html" target="_self">Decisões de Investimentos</a></li>
				
			</ul>
			
	</nav>
	
	</br>

<section id="cx1"> <!-- Seção objetivos-->
			
<section id="cx3"> <!-- Criando  section 3 lado direito -->	

<form name='titulo1' method='POST' action='Finacas_Corporativas1.php'>

<fieldset>
	
	<legend><h2>Visão Geral</h2></legend>
	
<p>

	Segue abaixo um questionário que irão nos auxiliar em nossa decisão quanto a <b>Identificação do Ambiente</b> quanto aos investimentos. 

</p>

<p>

<h2>Questionário</h2>

</p>	
	
<label>1- Qual o ativo? (Projeto ?)
<input type="text" name="f_ativo" size="70" maxlength="70" value="<?php echo $vativo; ?>" readonly />
</label>
<br/><br/>

<label>2- Qual o ambiente do mercado para o investimento neste ativo?

<input type="text" name="f_ambiente" value="<?php echo $vambiente; ?>" readonly /><label>
</label>
<br/><br/>

<label>3- Qual o comportamento dos investidores, neste momento, quanto a este ativo?

<input type="text" name="f_investidores" value="<?php echo $vinvestidores; ?>"readonly /><label>
</label>
<br/><br/>

<label>4- Qual o comportamento dos participantes ("stakholders") deste mercado?

<input type="text" name="f_participantes" value="<?php echo $vparticipantes; ?>"readonly /><label>
</label>
<br/><br/>

<label>5- Qual o local, departamento ou setor do ativo? (Projeto ?)
<input type="text" name="f_local" size="60" maxlength="60" value=" <?php echo $vlocal; ?>" readonly />
</label>
<br/><br/>

<label>6- O local onde será implantado o projeto tem livre competição?
<input type="text" name="f_livre" value="<?php echo $vlivre; ?>"readonly /><label>
</label>
<br/><br/>

<label>7- Qual a cultura local para a implantação do projeto?
<input type="text" name="f_cultura" value="<?php echo $vcultura; ?>"readonly /><label>
</label>
<br/><br/>

<label>8- Existe monopólio ou *reserva de mercado?
<input type="text" name="f_monopolio" value="<?php echo $vmonopolio; ?>"readonly /><label>
</label>
<br/>

<p>
*Política Governamental que impede legalmente o acesso e a importação de uma determinada classe de produtos e bens de consumo com vistas a uma proteção e desenvolvimento da indústria nacional. 
</p>

<label>9- Quais são os custos da transação? R$
<input type="text" name="f_custos" size="18" maxlength="18" value="<?php echo $vcustos; ?>"readonly /><label>
</label>
<br/><br/>

<label>10- Quais são os cenários para a macro e microeconomia?
<input type="text" name="f_cenario" value="<?php echo $vcenario; ?>"readonly /><label>
</label>
<br/><br/>

<label>11- Qual é a taxa de juros básica da economia?
<input type="text" name="f_juros" size="18" maxlength="18" value="<?php echo $vjuros; ?>"readonly /><label>
</label>
<br/><br/>

<label>12- Qual é a taxa de aplicação em renda fixa?
<input type="text" name="f_rendafixa" size="18" maxlength="18" value="<?php echo $vrendafixa; ?>"readonly /><label>
</label>
<br/><br/>

</fieldset>

</section> <!-- Fechando section 3 -->

</section> <!-- Fechando seção 1 -->


<fieldset>
	
	<legend><h2>Resultados</h2></legend>
	
<label>1- Qual o ativo? (Projeto ?)
<input type="text" name="f_ativo" size="70" maxlength="70" value="<?php echo $vativo; ?>" readonly />
</label>
<br/><br/>

<label>5- Qual o local, departamento ou setor do ativo? (Projeto ?)
<input type="text" name="f_local" size="60" maxlength="60" value=" <?php echo $vlocal; ?>" readonly />
</label>
<br/><br/>	

<label>9- Quais são os custos da transação? R$
<input type="text" name="f_custos" size="18" maxlength="18" value="<?php echo $vcustos; ?>"readonly /><label>
</label>
<br/><br/>

<label>11- Qual é a taxa de juros básica da economia?
<input type="text" name="f_juros" size="18" maxlength="18" value="<?php echo $vjuros; ?>"readonly /><label>
</label>
<br/><br/>

<label>12- Qual é a taxa de aplicação em renda fixa?
<input type="text" name="f_rendafixa" size="18" maxlength="18" value="<?php echo $vrendafixa; ?>"readonly /><label>
</label>
<br/><br/>


</fieldset>

<br/>

<!-- Validação Dados -->

<form name='titulo3' method='POST' action='Finacas_Corporativas2.php'>

<fieldset>

	<legend><h2>Validação dos Dados</h2></legend>

<input type="submit" value="Calcular" name="button"/>
			
<input type="button" value="Atualizar" onClick="history.go(0)"> 

</fieldset>

<br/>

</form>

<footer>

	<ul><!-- Lista não ordenada -->
			
		<li><a href="https://br.linkedin.com/in/andrelovo" target="_self">Contato LinkedIn: André Lovo </a></li>
				
	</ul>

</footer>

</body>

</html>