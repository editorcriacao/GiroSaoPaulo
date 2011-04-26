<?php

Class AppController extends Controller {
    var $name = 'AppController';
    var $components = array('Email', 'RequestHandler', 'Session');
    var $helper = array('Text', 'Html', 'Form', 'Session');

}

?>
