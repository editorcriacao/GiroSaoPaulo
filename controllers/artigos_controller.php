<?php

Class ArtigosController extends AppController {

    var $name = 'Artigos';

    function index() {
        $artigo = $this->Artigo->find('all', array('limit' => 3, 'conditions' => array('Artigo.site' => '3'), 'order' => array('Artigo.created' => 'DESC')));

        if (isset($this->params['requested'])) {
            return $artigo;
        } else {
            $this->set('artigo', $artigo);
        }
    }

     function destaques() {
        $destaques = $this->Artigo->find('all', array(
                    'conditions' => array('Artigo.site' => 3, 'Artigo.destaque'=>1),
                    'order' => array('Artigo.created' => 'Desc'),
                    'limit' => 3));

        if (isset($this->params['requested'])) {
            return $destaques;
        } else {
            $this->set('destaques', $destaques);
        }
    }

    function recentes() {
        $ultimasMaterias = $this->Artigo->find('all', array(
                    'conditions' => array('Artigo.site' => 3),
                    'order' => array('Artigo.created' => 'Desc'),
                    'limit' => 3));

        if (isset($this->params['requested'])) {
            return $ultimasMaterias;
        } else {
            $this->set('ultimasMaterias', $ultimasMaterias);
        }
    }

    function ver($id) {
        $artigo = $this->Artigo->find('first', array('conditions' => array('Artigo.id' => $id)));
        $this->set('artigo', $artigo);
        $this->set('title_for_layout', $artigo['Artigo']['titulo']);
        $this->Artigo->UpdateAll(array('Artigo.cliques' => $artigo['Artigo']['cliques']+=1), array('Artigo.id' => $id));
        $this->set('relacionado', $this->Artigo->find('all', array('conditions' => array('Artigo.editoria_id' => $artigo['Artigo']['editoria_id'], 'Artigo.id <>' => $artigo['Artigo']['id']))));
        $this->Set('comentarios', $this->Artigo->Comentario->find('all', array('conditions' => array('Comentario.artigo_id' => $id))));
    }

}

?>
