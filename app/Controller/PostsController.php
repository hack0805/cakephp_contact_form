<?php

App::uses('AppController','Controller');

class PostsController extends AppController{
  public $name = 'Posts';
  public $uses = array('Post');

  public $components = array('Session');

  public $helper = array('Html','Form', 'Session');




  public function index(){
    if(!$this->request->is('post') || !$this->request->data){
      return;
    }

    $this->Post->set($this->request->data);

    if(!$this->Post->validates()){
      $this->Flash->set('入力内容に不備があります');
      return;
    }

    //indexのフォームをセッションに詰める
    $this -> Session -> write('formData', $this->request->data);

    switch($this->request->data['confirm']){
      case 'confirm':
        $this->render('confirm');
        break;
      case 'pre':
        $this->render('index');
        break;
      case 'complete':
        if($this->Post->save($this->request->data)){
          $this->Flash->set('送信しました');
          $this->render('complete');
          $this->Session->delete('formData');

        } else {
          $this->Flash->set('エラーが発生しました');
        }
        break;
    }

  //   if($this->request->is('post')){
  //     $this->Post->create();
  //     if($this->Post->save($this->request->data)){

  //       $data = array('hoge' => 'hoge');
  //       //$this -> Session -> write('sampleData', '$data');
  //       // $sampleData = $this->Session->read('sampleData');
  //       // $this->set('sampleData', $sampleData);
  //       $this->set('sampleData', 'testtest');

  //       $this->Flash->set('Saved!!');
  //       $this->render('complete');
  //     } else {
  //       $this->Flash->set('Failed....');
  //     }
  //   }
  }
}