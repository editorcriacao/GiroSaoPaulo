<div id="header-pagina-menu">
    <h2>Cadastro</h2>
</div>
<div id="traco-vinho"></div>
<div id="branco-tela">
    <br />
    <p>
        Preencha o formulário abaixo para efetuar o cadastro <br />
        no Giro São Paulo e ter acesso total ao conteúdo do site.
    </p>
    <br />
    <br />
    <?php echo $this->Form->create('Usuario', array('action'=>'adicionarUsuario'))?>
    <h3>Nome Completo</h3>
    <?php echo $this->Form->input('nome_usuario', array('label'=>''))?>
    <h3>E-mail</h3>
    <?php echo $this->Form->input('email_usuario', array('label'=>''))?>
    <h3>Login</h3>
    <?php echo $this->Form->input('login_usuario', array('label'=>''))?>
    <h3>Senha</h3>
    <?php echo $this->Form->input('senha_usuario', array('label'=>'', 'type'=>'password'))?>
    <h3>Confirmar Senha</h3>
    <?php echo $this->Form->input('confirmar_senha_usuario', array('label'=>'', 'type'=>'password'))?>
    <?php echo $this->Form->submit('Cadastrar')?>
    <?php echo $this->Form->end()?>
    <br />
    <br />
</div>
