<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursosController
 *
 * @author Marcus
 */
class CursosController extends AppController{
    //put your code here
    
    function index(){
       $this->set('cursos', $this->Curso->find('all'));  
    }
    
    function add(){   
    if ($this->request->is('post')) {
        if ($this->Curso->save($this->request->data)) {
            $this->Flash->success('Inclusão efetuada com Sucesso!!!');
            $this->redirect(array('action' => 'index'));
        }
    }
    }
    
    public function view($id = null) {
        $this->set('cursos', $this->Curso->findById($id));     
    }
    
    function edit($id = null) {
        $this->Curso->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Curso->findById($id);
        } else {
        if ($this->Curso->save($this->request->data)) {
            $this->Flash->success('Alterações efetuadas com sucesso!!!');
            $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
        if ($this->Curso->delete($id)) {
            $this->Flash->success('Curso Excluído com sucesso!!!');
            $this->redirect(array('action' => 'index'));
        }
    }
}
