<?php

Class AppController extends Controller {
    var $name = 'AppController';
    var $components = array('Email', 'RequestHandler');
    var $helper = array('Text', 'Html', 'Form', 'Session');

}

?>
