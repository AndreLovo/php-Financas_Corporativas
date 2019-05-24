<?php







?>







<!DOCTYPE HTML>

<html lang="pt-br" >

<head> 

<title> Formulário Finanças Corporativas html</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Comando para acertar a acentuação-->

<link rel="stylesheet" href="Calculo.css"> <!--Comando para ligar HTML e CSS-->

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
	
	<section id="cx7"> <!-- Criando section no centro -->
	
	<form name='titulo2' method='POST' action='Finacas_Corporativas1.php'>
	
	<fieldset>
	
	<legend><h2>Cálculos de Projetos</h2></legend>
	
<label>TIR(Taxa Interna de Retorno) ou IRR(Internal Rate of Return): Taxa que remunera o valor investido no projeto.
<input type="text" name="f_tir" value="" size="4" maxlength="5" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>%
</label>
<br/><br/>

<label>K (Custo de Capital de Projetos) ou TAM:(Taxa Atrativa de Mercado).
<input type="text" name="f_k" value="" size="4" maxlength="5" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>%
</label>
<br/><br/>

<label>VPL (Valor Presente Líquido) ou NPV (Net Present Value): É a soma dos Fluxos de caixa no período zero. R$
<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
</label>
<br/><br/>

<label>Payback Descontado(Representa o período, em anos, de recuperação do investimento inicial).
<input type="text" name="f_payback" value="" size="4" maxlength="5"  onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/> Anos.
</label>
<br/><br/>

<label>ILL(Índice de Lucratividade Líquida) - É uma medida relativa. Ela mede a relação entre o valor recebido e o custo do investimento.
<input type="text" name="f_vpl" value="" size="4" maxlength="5" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
</label>
<br/><br/>

	</section>

</fieldset>

</form>
	
<br/>



<form name='titulo3' method='POST' action='Finacas_Corporativas2.php'>

<fieldset>

	<legend><h2>Validação dos Dados</h2></legend>

<input type="submit" value="Calcular" name="button"/>
			
<input type="button" value="Atualizar" onClick="history.go(0)"> 

</fieldset>

<br/>

</form>

<footer> <!-- Rodapé -->

		<ul><!-- Lista não ordenada -->
			
				<li><a href="https://br.linkedin.com/in/andrelovo" target="_self">Contato LinkedIn: André Lovo </a></li>
				
		</ul>


</footer>

</body>

</html>