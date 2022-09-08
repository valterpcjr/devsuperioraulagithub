<?php 
	include_once 'includes/config.php';
	$pages = 'users.php';
?>
	
<main>
	<!-- Modal Edição de Dados -->
	<div class="modal" style="display:none">
		<div class="modal_container radius">
			<p class="text-right">
				<br><a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i class="fa fa-times-circle"></i></a>
			</p>
			
			<h1 class="text-center font-text-min">Editar Dados do Usuário</h1>
			
			<form method="post" enctype="multipart/form-data" id="form_editUser">
				<div class="divisor2">
					<label for="file">Foto</label>
					<input type="file" name="file" id="file">
				</div>
				
				<div class="divisor2">
					<label for="username">Nome Completo*</label>
					<input type="text" name="username" id="username" required>
				</div>
				
				<div class="divisor2">
					<label for="useremail">E-mail*</label>
					<input type="email" name="useremail" id="useremail" required>
				</div>
				
				<div class="divisor2">
					<label for="userpass">Senha*</label>
					<input type="password" name="userpass" id="userpass" required>
				</div>
				
				<div class="divisor2">
					<label for="userlevel">Nível de Acesso*</label><br>
					<select name="userlevel" id="userlevel" required>
						<option value="1">Usuário Administrativo</option>
						<option value="2">Usuário Estoquista</option>
						<option value="9">Administrador</option>
						<option value="10">Super Administrador</option>
					</select>
				</div>
				
				<div class="divisor2">
					<br><button name="btn_user" id="btn_user" class="btn_edit radius"><i class="fa fa-pen"></i> Atualizar Dados</button>
				</div>
				
			</form>
			
			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>
	
	<!-- Modal Novo Usuário -->
	<div class="new" style="display:none">
		<div class="modal_container radius">
			<p class="text-right">
				<br><a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i class="fa fa-times-circle"></i></a>
			</p>
			
			<h1 class="text-center font-text-min">Dados do Novo Usuário</h1>
			
			<form method="post" enctype="multipart/form-data" id="form_newUser">
				<div class="divisor2">
					<label for="file">Foto</label>
					<input type="file" name="file" id="file">
				</div>
				
				<div class="divisor2">
					<label for="username">Nome Completo*</label>
					<input type="text" name="username" id="username" required>
				</div>
				
				<div class="divisor2">
					<label for="useremail">E-mail*</label>
					<input type="email" name="useremail" id="useremail" required>
				</div>
				
				<div class="divisor2">
					<label for="userpass">Senha*</label>
					<input type="password" name="userpass" id="userpass" required>
				</div>
				
				<div class="divisor2">
					<label for="userlevel">Nível de Acesso*</label><br>
					<select name="userlevel" id="userlevel" required>
						<option value="1">Usuário Administrativo</option>
						<option value="2">Usuário Estoquista</option>
						<option value="9">Administrador</option>
						<option value="10">Super Administrador</option>
					</select>
				</div>
				
				<div class="divisor2">
					<br><button name="btn_userNew" id="btn_userNew" class="btn_new radius"><i class="fa fa-pen"></i> Cadastrar Dados</button>
				</div>
				
			</form>
			
			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>
	
	<!-- Modal Deletar Usuário -->
	<div class="delete" style="display:none">
		<div class="modal_container radius">
			<div class="espaco-medium"></div>
			<h1 class="text-center font-text-min">Você Deseja Remover Este Usuário?</h1>
			<p class="text-center"><br>
				<a href="#" title="Remover este usuário" class="btn_edit radius removeUser"><i class="fa fa-check"></i> SIM </a>&nbsp;&nbsp;
				<a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i class="fa fa-times-circle"></i> NÃO</a>
			</p>
			
			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>
	
	<section class="content_left">
		<!-- Chama o menu da página-->
		<?php require 'includes/left.php';?>
	</section>
	
	<section class="content_right">
		<!-- Chama o cabeçalho da página-->
		<?php require 'includes/header.php';?>
		
		<article class="bgcolor-white">
			
			<div class="searching">
				<form method="post" id="form_search">
					<div class="espaco-min"></div>
					<h2 class="text-margin text-center">Digite o termo abaixo e selecione uma opção para sua consulta.</h2>
					<div class="divisor2">
						<label for="searching">Digite o nome:</label>
						<input type="text" name="searching" id="searching" placeholder="Ex. josé da silva" required>
					</div>

                    <br>
					<div class="divisor2" style="display: flex; justify-content: center; align-items: center;">
						<button name="btn_search" id="btn_search" class="btn_edit radius" style="float: left"><i class="fa fa-search"></i> Pesquisar</button>
						
						<a href="#" class="btn_new radius font-text-sub newUser"><i class="fa fa-plus-circle"></i> NOVO</a>
					</div>
					
					<div class="clear"></div>
					<div class="espaco-min"></div>
				</form>
				
				<table>
					<tr>
						<td>
							<p class="font-text-sub"><b>Usuário:</b></p>
							<p>José da Silva</p>
						</td>
						
						<td>
							<p class="font-text-sub"><b>Perfil:</b></p>
							<p>Administrativo</p>
						</td>
						
						<td>
							<p class="font-text-sub"><b>E-mail:</b></p>
							<p>jose@gmail.com</p>
						</td>
						
						<td>
							<p class="font-text-sub"><b>Status:</b></p>
							<p class="font-text-sub">
								<span class="active radius"> ATIVO </span>
							</p>
						</td>
						
						<td>
							<p class="text-center">
								<a href="#" title="Visualizar e editar informações" class="radius btn_edit editUser"><i class="fa fa-pen"></i></a>
								<a href="#" title="Remover este registro" class="radius btn_delete deleteUser"><i class="fa fa-trash-alt"></i></a>
							</p>
						</td>
					</tr>
				</table>
				
			</div>
			<div class="espaco-min"></div>
		</article>
		<div class="espaco-min"></div>
	</section>
	<div class="clear"></div>
</main>
