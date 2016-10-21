<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hiring
 *
 * @author Yang
 */
class Hiring extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $stuff = file_get_contents('../data/jobs.md');
        $this->data['content'] = $this->parsedown->parse($stuff);
        $this->render('template-secondary'); 
    }
}
