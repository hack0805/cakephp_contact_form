<?php

App::uses('AppModel', 'Model');


class Post extends AppModel{
  public $validate = array(
    'name' => array(
      'rule' => array('maxLength','16'),
      'required' => 'true',
      'message' => 'お名前は32文字以内で入力してください'
      ),
    'email' => array(
      'emailRule-1' => array(
        'rule' => 'email',
        'required' => 'true',
      ),
      'between' => array(
        'rule' => array('maxLength', '100'),
        'message' => 'emailは100文字以内で入力してください'
      ),
    ),
    'category' => array(
      'rule' => 'notBlank',
      'message' => 'この項目は必須入力です'
    ),
    'comment' => array(
      'rule' => 'notBlank',
      'message' => 'この項目は必須入力です'
    )
  );
}