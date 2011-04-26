<?php

class UsuariosController extends AppController {

    var $name = 'Usuarios';

    function login() {
        if (isset($this->data)) {
            $error = false;
            $data = $this->Usuario->find('first', array('conditions' => array('Usuario.login_usuario' => $this->data['Usuario']['login_usuario'])));
            if (!$data) {
                $error = true;
            } else {
                if ($data['Usuario']['senha_usuario'] != md5($this->data['Usuario']['senha_usuario'])) {
                    $error = true;
                }
            }
            if (!$error) {
                $this->Usuario->id = $data['Usuario']['id'];
                $this->Usuario->updateAll(array('Usuario.logado_usuario' => 1), array('Usuario.id' => $data['Usuario']['id']));
                $this->sessionUsuario($data);
                $this->redirect('/');
            } else {
                $this->Session->setFlash('Não foi possivel logar, verifique o login ou a senha ou então se você ainda nao for cadastrado se cadastre clicando ' . '<a href="cadastro/" class="linkErro">aqui</a>', 'msg_bad');
                $this->redirect('/');
            }
        }
    }

    function sair() {
        if ($this->Session->check('Usuario.logado') == 1) {
            $id = $this->Session->read('Usuario.id');
            $this->Usuario->id = $id;
            $this->Usuario->saveField('logado_usuario', '0');
            $this->Session->delete('Usuario');
            $this->redirect('/');
        } else {
            $this->Session->setFlash('Erro, essa operação não pode ser concluida!', 'msg_bad');
            $this->redirect('/');
        }
    }

    function cadastro() {
        $email = $this->Usuario->find('first', array('conditions' => array('Usuario.email_usuario' => $this->data['Usuario']['email_usuario'])));
        $login = $this->Usuario->find('first', array('conditions' => array('Usuario.login_usuario' => $this->data['Usuario']['login_usuario'])));
        if (!$email || !$login) {
            if (!empty($this->data)) {
                if ($this->data['Usuario']['senha_usuario'] == $this->data['Usuario']['confirmar_senha_usuario']) {
                    if ($this->Usuario->save($this->data)) {
                        /*                         * if(isset($this->Session->check('history.current'))){
                          $this->redirect($this->Session->read('history.current'));
                          $this->Session->delete('history.current');
                          }* */
                        $this->Session->setFlash('Cadastro realizado com sucesso! Faça agora seu login!', 'msg_good');
                        $this->redirect('/');
                    } else {
                        $this->Session->setFlash('Não foi possivel fazer o cadastro! Favor digitar os dados necessários para efetuar o cadastro.', 'msg_bad');
                        $this->redirect('/cadastro');
                    }
                } else {
                    $this->Session->setFlash('A senha deve ser a mesma nos dois campos!', 'msg_bad');
                    $this->redirect('/cadastro');
                }
            }
        } else {
            $this->Session->setFlash('Esse email ou login digitado já existem em nosso banco dados!', 'msg_bad');
            $this->redirect('/cadastro');
        }
    }

}

?>
