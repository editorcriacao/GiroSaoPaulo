   
<div id="box-sombra-editorias"></div>
<div id="caixa-h1-editorias">Contato</div>
<div id="faixa-listrada"></div>
<br />
<div id="contato"> 
    <p>Preencha os campos abaixo para em contato com o site Giro São Paulo.</p>
    <br>
    <div id="colunas-formulario">
        <div id="coluna-um">
            <?php echo $this->Form->create('Sac', array('action' => 'contato', 'id' => 'faleConosco')) ?>
            <?php echo $this->Form->input('nomeCompleto', array('label' => 'Nome:', 'size' => '38')) ?>
            <?php echo $this->Form->input('email', array('label' => 'E-mail:', 'size' => '38')) ?>
            <?php echo $this->Form->input('endereço', array('label' => 'Endereço:', 'size' => '34')) ?>
            <?php echo $this->Form->input('estado', array('label' => 'Estado:', 'size' => '37')) ?>
            <?php echo $this->Form->input('cidade', array('label' => 'Cidade:', 'size' => '37')) ?>
            <ul id="telefone-vagas">
                <li style="margin-right: 16px; *margin-right: 3px; ">
                    <?php echo $this->Form->input('ddd', array('label' => 'DDD:', 'size' => '2')) ?>
                </li>
                <li>
                    <?php echo $this->Form->input('telefone', array('label' => 'Telefone:', 'size' => '16')) ?>
                </li>
            </ul>
        </div>
        <div id="coluna-dois">
            <p style="width: 200px; float: left; padding-left: 2px; margin-bottom: 0; padding-left: 10px\9; *padding-left: 2px;">Sua mensagem:</p>
            <?php echo $this->Form->input('mensagem', array('label' => ' ', 'type' => 'textarea', 'style' => ' margin-right: 70px; margin-top: 5px;')) ?>
            <?php echo $this->Form->submit('ENVIAR', array('style' => 'float:right; margin-right: 82px; margin-top: 10px;')) ?>
                </div>

        <?php echo $this->Form->end() ?>
    </div>
    <br>

</div>