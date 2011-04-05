<script type="text/javascript">
    $(document).ready(function(){
        $("#editorias-rotato ul #panorama").mouseover(function(){
            $("#painel-1").fadeIn(200);
        });
        $("#editorias-rotato ul #panorama").mouseleave(function(){
            $("#painel-1").fadeOut(200);
        });

        $("#editorias-rotato ul #entrevista").mouseover(function(){
            $("#painel-2").fadeIn(200);
        });
        $("#editorias-rotato ul #entrevista").mouseleave(function(){
            $("#painel-2").fadeOut(200);
        });

        $("#editorias-rotato ul #ciencia").mouseover(function(){
            $("#painel-3").fadeIn(200);
        });
        $("#editorias-rotato ul #ciencia").mouseleave(function(){
            $("#painel-3").fadeOut(200);
        });

        $("#editorias-rotato ul #negocios").mouseover(function(){
            $("#painel-4").fadeIn(200);
        });
        $("#editorias-rotato ul #negocios").mouseleave(function(){
            $("#painel-4").fadeOut(200);
        });

        $("#editorias-rotato ul #gestao").mouseover(function(){
            $("#painel-5").fadeIn(200);
        });
        $("#editorias-rotato ul #gestao").mouseleave(function(){
            $("#painel-5").fadeOut(200);
        });

        $("#editorias-rotato ul #especial").mouseover(function(){
            $("#painel-6").fadeIn(200);
        });
        $("#editorias-rotato ul #especial").mouseleave(function(){
            $("#painel-6").fadeOut(200);
        });
    });
</script>

<div id="principal-home">

    <div id="lista-editorias">
        <div class="traco"></div>
        <br />
        <div id="editorias-rotato">
            <ul>
                <li id="panorama"><a href="">Panorama</a>
                    <p><a href="">Editoria entrevista fulano.</a></p>
                    <div id="painel-1" class="painel">Panorama</div>
                </li>
                <li id="entrevista">Entrevista
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-2" class="painel">Panorama</div>
                </li>
                <li id="ciencia">Ciência e Tecnologia
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-3" class="painel">Panorama</div>
                </li>
                <li id="negocios">Negócios e Carreira
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-4" class="painel">Panorama</div>
                </li>
                <li id="gestao">Gestão
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-5" class="painel">Panorama</div>
                </li>
                <li id="especial">Especial
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-6" class="painel">Panorama</div>
                </li>
                <li>Sustentabilidade
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-7" class="painel">Panorama</div>
                </li>
                <li>Finanças
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-8" class="painel">Panorama</div>
                </li>
                <li>Consumo
                    <p>Editoria entrevista fulano.</p>
                    <div id="painel-9" class="painel">Panorama</div>
                </li>
            </ul>
        </div>

        <div class="traco"></div>
    </div>
    <?php echo $this->Html->script('jquery.cycle.lite.min') ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#slide-materias-destaques ul").cycle({
                fx: 'fade',
                speed: 1000,
                timeout: 6000
            });

        });
    </script>

    <div id="slide-materias-destaques">
        <ul>
            <li>
                <?php echo $this->Html->image('slide/slide-cafe.png') ?><br/>
                <div id="faixa-preta"><span>Consumo: Café</span></div>
                <p>Endanis minulluptios eum sit, siti aut expel endae as cum excearchit accatur, occum alibusc illorrorum, velia pellace atiiscius ium utet perum sum ipit ra cullaborit, consenitdolum dolore nessum volume
                    Eelia pellace atiiscius ium utet perum sum ipit ra cullaborit, consenitdolum dolore nessum volume dolore nessum volume.</p>
            </li>
            <li>
                <?php echo $this->Html->image('slide/slide-panorama.png') ?><br/>
                <div id="faixa-preta"><span>Ciência e Tecnologia: PC vs iMAC</span></div>
                <p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
                <p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
                <p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            </li>

        </ul>
    </div>

</div>
<div id="principal-rodape">

    <div id="caixa-principal-rodape">
        <ul>
            <?php echo $this->Html->image('img-1.png') ?>
                <div id="faixa-preta"><span>Consumo: Café</span></div>
                <li>Especial
                    <p>Editoria entrevista</p>
                </li>
            </ul>
        </div>

        <div id="caixa-principal-rodape">
            <ul>
            <?php echo $this->Html->image('img-1.png') ?>
                <div id="faixa-preta"><span>Consumo: Café</span></div>
                <li>Especial
                    <p>Editoria entrevista</p>
                </li>

            </ul>
        </div>

        <div id="caixa-principal-rodape">
            <ul>
            <?php echo $this->Html->image('img-1.png') ?>
            <div id="faixa-preta"><span>Consumo: Café</span></div>
            <li>Especial
                <p>Editoria entrevista</p>
            </li>

        </ul>
    </div>
</div>
