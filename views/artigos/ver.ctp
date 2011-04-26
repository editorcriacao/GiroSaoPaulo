<br>
<div id="materia-texto">
    <h1><?php echo $artigo['Artigo']['titulo'] ?></h1>
    <h4><?php echo $artigo['Artigo']['subTitulo'] ?></h4>
    <i><p class="autor-data">Por: <?php echo $artigo['Colunista']['nomeColunista'] ?> - <?php echo substr($artigo['Artigo']['created'], 10) . ' - ';
$data = explode('-', substr($artigo['Artigo']['created'], 0, 10));
echo $data[2] . '/' . $data[1] . '/' . $data[0] ?></p></i>
    <br /><br />
    <?php if (!empty($artigo['Artigo']['imagemMateria'])) {
 ?>
<?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-materia/' . $artigo['Artigo']['imagemMateria']) ?>
<?php if (!empty($artigo['Artigo']['legendaFotoMateria'])) { ?><span class="legenda-foto"><?php echo $artigo['Artigo']['legendaFotoMateria'] ?></span> <? } ?>
        <?php } ?>
    <br />
    <p>
        <?php if (!empty($artigo['Artigo']['olho'])) { ?>
        <div id="olho-texto">
    <?php echo $artigo['Artigo']['olho'] ?>
            </div>
    <?php } ?>

        <?php if (!empty($artigo['Artigo']['imagemOlho'])) {
 ?>
        <div id="olho-texto">
    <?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-olho/' . $artigo['Artigo']['imagemOlho']) ?>
<?php if (!empty($artigo['Artigo']['legendaOlhoMateria'])) { ?><span class="legenda-foto-olho"><?php echo $artigo['Artigo']['legendaOlhoMateria'] ?></span> <? } ?>
            </div>
<?php } ?>

<?php echo $artigo['Artigo']['texto'] ?>

    </p>
    </div>
    <br><br>
    <div id="fundo-titulo-sombra-2" style="margin-top: 20px;"></div>
    <div id="fundo-titulo-2">Comentários</div>
    <div id="faixa-listrada" style="margin-left: 125px;"></div>
    <br />
    <br />
<?php $comentarios = $this->requestAction('comentarios/ver/' . $artigo['Artigo']['id']) ?>
<?php if (empty($comentarios)) { ?>
            <div id="comentarios">
                <p>Não há comentários.</p>
            </div>
<?php } else { ?>
<?php foreach ($comentarios as $c) { ?>
                <div id="comentarios" style="margin-left: 5px;">
                    <br />
                    <h5>
<?php if (empty($c['Comentario']['sitepessoal'])) { ?>
        <?php echo $c['Comentario']['nome'] ?>
<?php } else { ?>
                    <span><a href="http://<?php echo $c['Comentario']['sitepessoal'] ?>" style="color: #004444; font-weight: bold" target="_blank"><?php echo $c['Comentario']['nome'] ?></a></span>
<?php } ?>
                disse:</h5>
            <p><?php echo $c['Comentario']['comentario'] ?></p>
                </div>
<?php } ?>
<?php } ?>

        <br><br>
        <div id="caixa-cinza" style="height: 110px;">
            <h3>Faça seu comentário</h3>
            <br />
            <div id="colunas-formulario">
                <div id="coluna-um">
            <?php echo $this->Form->create('Comentario', array('action' => 'adicionar', 'id' => 'formulario-vagas')) ?>
<?php echo $this->Form->input('comentario', array('label' => '', 'id' => 'comente', 'type' => 'textarea', 'style' => 'width: 580px; height: 50px', 'value' => 'Deixe seu comentário')) ?>
                <?php echo $this->Form->input('site', array('type' => 'hidden', 'value' => '4')) ?>
                <?php echo $this->Form->input('artigo_id', array('type' => 'hidden', 'value' => $artigo['Artigo']['id'])) ?>
            <div id="resto-elementos" style="display: none">
<?php echo $this->Form->input('nome', array('label' => 'Nome Completo', 'size' => '72')) ?>
                <?php echo $this->Form->input('email', array('label' => 'Seu E-mail', 'size' => '77')) ?>
<?php echo $this->Form->input('sitepessoal', array('label' => 'Seu Site', 'size' => '79')) ?>
                <br />
<?php echo $this->Form->submit('ENVIAR') ?>
            </div>
        </div>
        <div id="coluna-dois">
        </div>

<?php echo $this->Form->end() ?>
    </div>
    <br>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#comente").focus(function(){
            $("#caixa-cinza").css("height", "380px").fadeIn();
            $("#comente").css("height", "200px");
            $("#resto-elementos").fadeIn();
        });
    });
</script>
<br />


