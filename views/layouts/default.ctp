<?php echo $this->Html->docType() ?>
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Giro São Paulo - <?php echo $title_for_layout?></title>
        <?php echo $this->Html->charset() ?>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia', 'icon')) ?>
        <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
        <?php echo $this->Html->script(array('jquery')) ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login-senha").mouseover(function(){
                    $("#box-login").show();
                });
                $("#login-senha").mouseleave(function(){
                    $("#box-login").hide();
  
                });

                $('input[type=text], textarea, input[type=password]').focus(function(){
                    if($(this).val() == $(this).attr('defaultValue'))
                    {
                        $(this).val('');
                    }
                });

                $('input[type=text], textarea, input[type=password]').blur(function(){
                    if($(this).val() == '')
                    {
                        $(this).val($(this).attr('defaultValue'));
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="todo">
            <div id="header">
                <div id="topo">
                    <?php echo $this->Html->image('logo.png', array('alt' => 'Giro São Paulo')) ?>
                    <p><?php
                    $dia = date('d');
                    $mes = date('n');
                    $ano = date('Y');
                    switch ($mes) {
                        case 1:
                            echo '<span class="data-topo">' . $dia . '</span> DE JANEIRO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 2:
                            echo '<span class="data-topo">' . $dia . '</span> DE FEVEREIRO <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 3:
                            echo '<span class="data-topo">' . $dia . '</span> DE MARÇO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 4:
                            echo '<span class="data-topo">' . $dia . '</span> DE ABRIL DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 5:
                            echo '<span class="data-topo">' . $dia . '</span> DE MAIO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 6:
                            echo '<span class="data-topo">' . $dia . '</span> DE JUNHO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 7:
                            echo '<span class="data-topo">' . $dia . '</span> DE JULHO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 8:
                            echo '<span class="data-topo">' . $dia . '</span> DE AGOSTO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 9:
                            echo '<span class="data-topo">' . $dia . '</span> DE SETEMBRO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 10:
                            echo '<span class="data-topo">' . $dia . '</span> DE OUTUBRO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 11:
                            echo '<span class="data-topo">' . $dia . '</span> DE NOVEMBRO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                        case 12:
                            echo '<span class="data-topo">' . $dia . '</span> DE DEZEMBRO DE <span class="data-topo">' . $ano . '</span>';
                            break;
                    }
                    ?></p>

                    <div id="banner">

                    </div>

                    <div id="login-senha">
                        <div id="chave">
                            <div id="box-login">
                                <?php echo $this->Form->create('Usuario', array('action' => 'login')) ?>
                                <?php echo $this->Form->input('login', array('label' => false, 'value' => 'Login')) ?>
                                <?php echo $this->Form->input('senha', array('label' => false, 'value' => 'Senha', 'type' => 'password')) ?>
                                <?php echo $this->Form->submit('Entrar') ?>
                                <?php echo $this->Form->end() ?>
                            </div>
                            <p>FAÇA SEU LOGIN</p>
                        </div>
                    </div>

                    <div id="icon-menu">
                        <ul>
                            <li><span class="mail"></span></li>
                            <li><span class="linkendin"></span></li>
                            <li><span class="twitter"></span></li>
                            <li><span class="facebook"></span></li>
                        </ul>
                    </div>

                    <div id="busca">
                        <?php echo $this->Form->create('Usuario', array('action' => 'busca')) ?>
                        <?php echo $this->Form->input('q', array('label' => false, 'value' => 'O que procura?')) ?><?php echo $this->Form->submit(' ', array('class' => 'lupa-busca')) ?>
                        <?php echo $this->Form->end() ?>
                            </div>
                        </div>
                        <div id="menu-img-esquerda">
                        </div>
                        <div id="menu-superior">
                            <ul>
                                <li><a href="<?php echo $this->Html->url('/') ?>"><span class="menu-topo">H</span>OME</a> </li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 39, 'panorama')) ?>"><span class="menu-topo">P</span>ANORAMA</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 40, 'cultura')) ?>"><span class="menu-topo">C</span>ULTURA</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 41, 'sustentabilidade')) ?>"><span class="menu-topo">S</span>USTENTABILIDADE</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 42, 'tecnologia')) ?>"><span class="menu-topo">T</span>ECNOLOGIA</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url('/destaques') ?>"><span class="menu-topo">L</span>OJA <span class="menu-topo">V</span>IRTUAL</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url('/revista-digital') ?>"><span class="menu-topo">R</span>EVISTA <span class="menu-topo">D</span>IGITAL</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url('/destaques') ?>"><span class="menu-topo">C</span>ADASTRO</a></li> &nbsp;&nbsp;<?php echo $this->Html->image('barra-menu.png') ?> &nbsp;&nbsp;
                                <li><a href="<?php echo $this->Html->url('/destaques') ?>"><span class="menu-topo">C</span>ONTATO</a></li>
                            </ul>
                        </div>
                        <div id="menu-img-direita">
                        </div>
                        <!--                <div id="infografico">
                <?php //echo $this->Html->image('infografico-icon.png')?>
                                                                                    <a href="<?php //echo $this->Html->url()     ?>">Infográfico</a>
                                                                                </div>-->
                            </div> <!--#header -->

                            <div id="content">
                <?php echo $session->flash(); ?>
                <?php echo $content_for_layout ?>
                            </div><!--#content -->

                            <div id="banner-lateral">
                <?php echo $this->element('banner') ?>
                            </div><!--#banner-lateral -->

                        </div><!--#todo -->

                        <div id="rodape">
                            <div id="rodape-caixa">
                                <ul id="copy">
                                    <li>&copy; Copyrights - 2011 - Editor Criação Marketing e Comunicação Ltda.</li>
                                </ul>

                                <ul id="rodape-conteudo">
                                    <li><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/assinaturas/check/1/mais-revista-mulher') ?>" style="color:#550000">ASSINE</a> |</li>
                                    <li><a href="">CENTRAL DO ASSINANTE</a> |</li>
                                    <li><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/publicidade') ?>">ANUNCIE</a> |</li>
                                    <li><a href="<?php echo $this->Html->url('/contato') ?>">CONTATO</a></li>
                                </ul>
                            </div>

        </div><!--#rodape -->

    </body>
</html>