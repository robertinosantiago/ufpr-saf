<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * Description of CursosController
 *
 * @author alunos
 */
class CursosController extends AppController {

    public $uses = array('Curso');
    public $helpers = array('Html', 'Form');

    public function index() {
        $dados = $this->Curso->find('all');
        $this->set('dados', $dados);
    }

    public function formulario() {
        
    }

    public function salvar() {
        if ($this->request->is('post')) {
            if ($this->Curso->saveAll($this->request->data)) {
                $this->Session->setFlash('Registro salvo com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

}
