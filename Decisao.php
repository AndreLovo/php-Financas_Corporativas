<?php









?>




<!DOCTYPE HTML>

<html lang="pt-br" >

<head> 

<title> Formulário Finanças Corporativas html</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Comando para acertar a acentuação-->

<link rel="stylesheet" href="Decisao.css"> <!--Comando para ligar HTML e CSS-->

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
	
	<br/>
	
	<form name='titulo2' method='POST' action='Finacas_Corporativas1.php'>
	
	<fieldset>
	
	<legend><h2>Decisões de Investimentos</h2></legend>
	
	<br/>
	
	<section id="cx5"> <!-- Criando section lado esquerdo -->	
		
		<article>
		
		<p><center><b>
		
		Ponto de Equilibrio Oper. "Break Even"
		
		</p></center></b>
		
		</article>
			
		<article>
		
		<label>Preço de Venda do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Quantidade Produzida:
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>Un.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Variável:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Fixo do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
	</section>
	
	<section id="cx6"> <!-- Criando section lado direito -->		
		
		<article>
		
		<p><center><b>
		
		Ponto de Equilibrio Contábil
		
		</p></center></b>
		
		</article>
			
		<article>
		
		<label>Preço de Venda do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Quantidade Produzida:
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>Un.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Variável:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Fixo do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Depreciação:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Ir (Alíquota Imp Renda):
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>%.
		</label>
		<br/><br/>
		
		</article>
			

	</section>
	
	<section id="cx7"> <!-- Criando section no centro -->
		
		<article>
		
		<p><center><b>
		
		Ponto de Equilibrio Econômico
		
		</p></center></b>
		
		</article>
			
		<article>
		
		<label>Preço de Venda do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Quantidade Produzida:
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>Un.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Variável:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Custo Fixo do Produto:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Depreciação:R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>Ir (Alíquota Imp. Renda):
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>%.
		</label>
		<br/><br/>
		
		</article>
		
		<article>
		
		<label>C cap (Custo de Capital):R$
		<input type="text" name="f_vpl" value="" size="9" maxlength="10" onFocus="mudaCor(this,1)" onBlur="mudaCor(this,2)"/>.
		</label>
		<br/><br/>
		
		</article>
	
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