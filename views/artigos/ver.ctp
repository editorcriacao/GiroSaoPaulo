<div id="materia-texto">
    
    <?php if (!empty($artigo['Artigo']['imagemMateria'])) { ?>
    <div style="border: 1px solid #ccc; width: 615px; padding: 1px; height: 300px;"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-materia/' . $artigo['Artigo']['imagemMateria']) ?></div>
    <?php if (!empty($artigo['Artigo']['legendaFotoMateria']))  { ?>
    <span class="legenda-foto"><?php echo $artigo['Artigo']['legendaFotoMateria'] ?></span> <?php } ?>
    <?php } ?>

    <br />    <br />
    
    <h1><?php echo $artigo['Artigo']['titulo'] ?></h1>
    <h4><?php echo $artigo['Artigo']['subTitulo'] ?></h4>
    <i><p class="autor-data">Por: <?php echo $artigo['Colunista']['nomeColunista'] ?> - <?php
echo substr($artigo['Artigo']['created'], 10) . ' - ';
$data = explode('-', substr($artigo['Artigo']['created'], 0, 10));
echo $data[2] . '/' . $data[1] . '/' . $data[0]
?></p></i>
    
    <br />
    
    
<?php if (!empty($artigo['Artigo']['olho'])) { ?>
            <div id="olho-texto">
<?php echo $artigo['Artigo']['olho'] ?>
        </div>
<?php } ?>

    <?php if (!empty($artigo['Artigo']['imagemOlho'])) { ?>
            <div id="olho-texto">
        <?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-olho/' . $artigo['Artigo']['imagemOlho']) ?>
        <?php if (!empty($artigo['Artigo']['legendaOlhoMateria'])) { ?>
                <span class="legenda-foto-olho"><?php echo $artigo['Artigo']['legendaOlhoMateria'] ?></span>
                <?php } ?>
        </div>
    <?php } ?>

    <?php echo $artigo['Artigo']['texto'] ?>


    </div>
    <br><br>

    <div id="fundo-titulo-sombra" style="margin-left: 12px;"></div>
    <div id="fundo-titulo" style="margin-left: 9px;">Comentários</div>
    <div id="faixa-listrada" style="margin-left: 125px; width: 630px; margin-bottom: -20px;"></div>
    <br />
    <br />
<?php $comentarios = $this->requestAction('comentarios/ver/' . $artigo['Artigo']['id']) ?>
<?php if (empty($comentarios)) {?>
            <div id="comentarios">
                <p>Não há comentários.</p>
            </div>
<?php } else {
?>
<?php foreach ($comentarios as $c) { ?>
                <div id="comentarios">
                    <br />
                    <h5>
        <?php if (empty($c['Comentario']['sitepessoal'])) { ?>
                    <span style="font-weight:bold;"> <?php echo $c['Comentario']['nome'] ?></span>
        <?php } else {?>
                    <span><a href="http://<?php echo $c['Comentario']['sitepessoal'] ?>" style="color: #004444; font-weight: bold" target="_blank"><?php echo $c['Comentario']['nome'] ?></a></span>
<?php } ?>
                disse:</h5>
            <p><?php echo $c['Comentario']['comentario'] ?></p>
        </div>
<?php } ?>
<?php } ?>

        <br><br>
        <div id="caixa-cinza" style="height: 95px; margin-left: 10px; margin-top: -10px;">
            <h3 style="margin-left:5px;">Faça seu comentário</h3>
            <br />
            <div id="colunas-formulario-2">

        <?php echo $this->Form->create('Comentario', array('action' => 'adicionar', 'id' => 'formulario-vagas')) ?>
        <?php echo $this->Form->input('comentario', array('label' => '', 'id' => 'comente', 'type' => 'textarea', 'style' => 'width: 670px; height: 50px; margin-left:-5px;', 'value' => 'Deixe seu comentário')) ?>
        <?php echo $this->Form->input('site', array('type' => 'hidden', 'value' => '4')) ?>
<?php echo $this->Form->input('artigo_id', array('type' => 'hidden', 'value' => $artigo['Artigo']['id'])) ?>
        <div id="resto-elementos" style="display: none; margin-top: 10px;">
            <?php echo $this->Form->input('nome', array('label' => 'Seu nome:', 'size' => '55')) ?>
            <?php echo $this->Form->input('email', array('label' => 'Seu E-mail:', 'size' => '54')) ?>
            <?php echo $this->Form->input('sitepessoal', array('label' => 'Seu Site:', 'size' => '57')) ?>
<?php echo $this->Form->submit('ENVIAR', array('style' => 'margin-top:10px; margin-left:10px;')) ?>

        </div>

<?php echo $this->Form->end() ?>
    </div>
    <br>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#comente").focus(function(){
            $("#caixa-cinza").css("height", "345px").fadeIn();
            $("#comente").css("height", "140px");
            $("#resto-elementos").fadeIn();
        });
    });</script>

