<header id="topo">
	<h1><a href="<?= $this->Url->build(['controller'=>'GeekStop', 'action'=>'index']); ?>" class="logoAncora">Geek Stop</a></h1>

	<div id="barraDePesquisa" class = "barraDePesquisa">
    	<input type="text" placeholder="Busque seu produto aqui" class="campoDePesquisa">
		<button class="botaoParaPesquisar"><span class="material-icons">search</span></button>
	</div>
	<nav id="navSecundaria">
		<ul id="ulNavSecundaria">
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'perfil']); ?>" class="itemDecoration2">Login</a></li>
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'cadastro']); ?>" class="itemDecoration2">Cadastre-se</a></li>
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'logout']); ?>" class="itemDecoration2">Sair</span></a></li>
		</ul>
	</nav>
</header>