<div id="header-pagina-menu">
    <h2>Contato</h2>
</div>
<div id="traco-vinho"></div>
<div id="branco-tela">
    <br />
    <p>
        Este é o portal virtual da revista Giro <b>São Paulo</b>, uma publicação bimestral da <b>Editor Criação</b>.
    </p>
    <p>
        Endereço: Praça Silvio Romero, 55 sala 45 Tatuape - São Paulo - SP
    </p>
    <p>
        Telefone: 55 11 2679 4420
    </p>
    <p>
        Site: <a href="http://www.editorcriacao.com.br" target="_blank">http://www.editorcriacao.com.br/</a>
    </p>
    <br />
    <?php echo $this->Form->create('Usuario', array('action'=>'contato'))?>
    <h3>Nome Completo</h3>
    <?php echo $this->Form->input('nome_usuario', array('label'=>''))?>
    <h3>E-mail</h3>
    <?php echo $this->Form->input('email_usuario', array('label'=>''))?>
    <h3>Sua Mensagem</h3>
    <?php echo $this->Form->input('login_usuario', array('label'=>'', 'type'=>'textarea', 'cols'=>'50'))?>
    <?php echo $this->Form->submit('Enviar')?>
    <?php echo $this->Form->end()?>
    <br />
    <br />
</div>
