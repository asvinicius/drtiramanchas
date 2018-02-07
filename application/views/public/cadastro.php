
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Cadastro de Usuário</h2>   
                        <h5>Bem vindo, efetue Cadastro preenchendo o formulário abaixo.</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 
				 <?php
				 if (isset($_GET['erro'])) {
					 
					 if ($_GET['erro'] == 1) {
						echo '<strong><span style="color:#ff0000;">Atenção:</span> todos os campos devem ser preenchidos.</strong>';
					 }
					 
					 elseif ($_GET['erro'] == 2) {
						echo '<strong><span style="color:#ff0000;">Atenção:</span> usuário ou senha inválidos.</strong>';						 
					 }
				 }
				 ?>
				 
				    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
								<form enctype="multipart/form-data" method="post" action="processaCadastro.php">
									<label for="email">E-mail</label>
									<input name="email" type="text" id="email" class="form-control" placeholder="nome@exemplo.com.br" required>
									<label for="senha">Senha</label>
									<input name="senha" type="password" id="senha" class="form-control" required>
									<label for="secreta">Qual seu animal de estimação preferido</label>
									<input name="secreta" type="text" id="secreta" class="form-control" required>
									<label for="foto">Foto:</label>
					                <input type="file" name="foto" id="foto">
									<input type="submit" class="btn btn-success" value="Cadastrar" style="margin-top: 10px;">
								</form>
								
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=<?= base_url('assets/js/jquery-1.10.2.js'); ?>></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src=<?= base_url('assets/js/bootstrap.min.js'); ?>></script>
    <!-- METISMENU SCRIPTS -->
    <script src=<?= base_url('assets/js/jquery.metisMenu.js'); ?>></script>
      <!-- CUSTOM SCRIPTS -->
    <script src=<?= base_url('assets/js/custom.js'); ?>></script>
    
   
</body>
</html>
