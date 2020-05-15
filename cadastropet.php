<?php
include 'header.php';
?>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="form.php" method="POST">
				<span class="contact100-form-title">
					Entre em Contato
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Por Favor Coloque seu Nome">
					<span class="label-input100">Nome Completo *</span>
					<input class="input100" type="text" name="nome" placeholder="Coloque seu Nome">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Coloque seu Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Coloque seu Email">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Telefone</span>
					<input class="input100" type="text" name="telefone" placeholder="Coloque seu Telefone">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Serviço Selecionado *</span>
					<div>
						<select class="js-select2" name="serviços">
							<option>Escolha ...</option>
							<option>Ecommerce</option>
							<option>Serviços Online</option>
							<option>ERP</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Que Tipo de Produto Você Vende?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="tipoproduto" value="Fisico" checked="checked">
							<label class="label-radio100" for="radio1">
								Produtos Fisicos
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="tipoproduto" value="Digital">
							<label class="label-radio100" for="radio2">
								Produtos Digitais
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="tipoproduto" value="Serviços">
							<label class="label-radio100" for="radio3">
								Serviços de Consultoria
							</label>
						</div>
						<br>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Por favor Escreva sua Mensagem">
					<span class="label-input100">Mensagem</span>
					<textarea class="input100" name="mensagem" placeholder="Digite sua Mensagem Aqui..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Enviar
							<i class="fa fa-paper-plane m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
<form class="form" name="cadastrar" method="post">
    <label for="petid">ID pet</label>
    <input type="text" id="idcpf" name="cpf"/><br>
    <label for="nome">Nome</label>
    <input type="text" id="idnome" name="nome"/><br>
    <label for="sexo">Sexo</label>
    <input type="text" id="idsexo" name="sexo"/><br>
    <label for="cor">Cor</label>
    <input type="text" id="idcor" name="cor"/><br>
    <label for="especie">Especie</label>
    <input type="text" id="idespecie" name="especie"/><br>
    <label for="porte">Porte</label>
    <input type="text" id="idporte" name="porte"/><br>
    <label for="nascimento">Nascimento aprox.</label>
    <input type="text" id="idnascimento" name="nascimento"/><br>
    <label for="resgate">Data do resgate</label>
    <input type="date" id="idresgate" name="resgate"/><br>
    <input type="submit" onclick="return Enviar();" value="Cadastrar" />
</form>    
<?php
include 'footer.php';
?>