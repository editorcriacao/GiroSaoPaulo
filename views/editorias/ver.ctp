
<div id="box-sombra-editorias"></div>
<div id="caixa-h1-editorias"><?php echo Inflector::stringToUpper($editoria['Editoria']['nomeEditoria']) ?></div>
<div id="faixa-listrada"></div>
<br />
<?php if (empty($artigos)) {?>
    <p style="text-align: center;">Não há matérias nessa editoria</p>
<?php } else {?>
<?php foreach ($artigos as $artigo) { ?>
        <ul id="noticias-por-secao">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'artigos', 'action' => 'ver', $artigo['Artigo']['id'], Inflector::slug($artigo['Artigo']['titulo']))) ?>"><?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/fotos_artigos/' . $artigo['Artigo']['foto']) ?></a>
                <a href="<?php echo $this->Html->url(array('controller' => 'artigos', 'action' => 'ver', $artigo['Artigo']['id'], Inflector::slug($artigo['Artigo']['titulo']))) ?>"><h4><?php echo $artigo['Artigo']['titulo'] ?></h4></a>
            </li>
        </ul>
<?php } ?>
<?php } ?>

