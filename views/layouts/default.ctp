<?php echo $this->Html->docType() ?>
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Giro São Paulo - www.girosaopaulo.com.br</title>
        <?php echo $this->Html->charset() ?>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login-senha").mouseover(function(){
                    $("#box-login").show();
                });
                $("#login-senha").mouseleave(function(){
                    $("#box-login").hide();
  
                });

                $('input[type=text], textarea').focus(function(){
                    if($(this).val() == $(this).attr('defaultValue'))
                    {
                        $(this).val('');
                    }
                });

                $('input[type=text], textarea').blur(function(){
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
                            echo $dia . ' DE JANEIRO DE ' . $ano;
                            break;
                        case 2:
                            echo $dia . ' DE FEVEREIRO ' . $ano;
                            break;
                        case 3:
                            echo $dia . ' DE MARÇO DE ' . $ano;
                            break;
                        case 4:
                            echo $dia . ' DE ABRIL DE ' . $ano;
                            break;
                        case 5:
                            echo $dia . ' DE MAIO DE ' . $ano;
                            break;
                        case 6:
                            echo $dia . ' DE JUNHO DE ' . $ano;
                            break;
                        case 7:
                            echo $dia . ' DE JULHO DE ' . $ano;
                            break;
                        case 8:
                            echo $dia . ' DE AGOSTO DE ' . $ano;
                            break;
                        case 9:
                            echo $dia . ' DE SETEMBRO DE ' . $ano;
                            break;
                        case 10:
                            echo $dia . ' DE OUTUBRO DE ' . $ano;
                            break;
                        case 11:
                            echo $dia . ' DE NOVEMBRO DE ' . $ano;
                            break;
                        case 12:
                            echo $dia . ' DE DEZEMBRO DE ' . $ano;
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
                                <?php echo $this->Form->input('senha', array('label' => false, 'value' => 'Senha', 'type'=>'password')) ?>
                                <?php echo $this->Form->submit('Entrar') ?>
                                <?php echo $this->Form->end() ?>
                            </div>
                            <p>Faça seu login</p>
                        </div>
                    </div>

                    <div id="busca">
                        <?php echo $this->Form->create('Usuario', array('action' => 'busca')) ?>
                        <?php echo $this->Form->input('q', array('label' => false, 'value' => 'O que procura?')) ?><?php echo $this->Form->submit(' ', array('class' => 'lupa-busca')) ?>
                        <?php echo $this->Form->end() ?>
                            </div>
                        </div>
                        <div id="menu-superior">
                            <ul>
                                <li><a href="<?php echo $this->Html->url('/') ?>">Home</a></li>
                                <li><a href="<?php echo $this->Html->url('/loja-virtual') ?>">Loja Virtual</a></li>
                                <li><a href="<?php echo $this->Html->url('/revista-digital') ?>">Revista Digital</a></li>
                                <li><a href="<?php echo $this->Html->url('/cadastro') ?>">Cadastro</a></li>
                                <li><a href="<?php echo $this->Html->url('/contato') ?>">Contato</a></li>
                            </ul>
                        </div>
                        <div id="menu-inferior">
                            <ul>
                                <li><a href="<?php echo $this->Html->url('/') ?>">Destaques</a></li>
                                <li><a href="<?php echo $this->Html->url('/') ?>">Consumo</a></li>
                                <li><a href="<?php echo $this->Html->url('/') ?>">Arte e Expressão</a></li>
                                <li><a href="<?php echo $this->Html->url('/') ?>">Giro na Cidade</a></li>
                            </ul>
                        </div>
                        <!--                <div id="infografico">
                <?php //echo $this->Html->image('infografico-icon.png')?>
                                                            <a href="<?php //echo $this->Html->url()  ?>">Infográfico</a>
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
            <p> Giro São Paulo © Todos os direitos reservados.</p>
        </div><!--#rodape -->

    </body>
</html>