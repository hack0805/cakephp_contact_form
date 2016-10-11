<h2>お問い合わせフォーム</h2>
<?php
// echo $this->Session->Flash();
    $items = array('商品について' => '商品について', 'お支払いについて' => 'お支払いについて',
                   '当サイトについて' => '当サイトについて', 'その他' => 'その他');

    // セッションに値がセットされている場合
    $session = $this->Session->read('formData');
    if(!empty($session)){
        $formData = $this->Session->read('formData');
        echo $this->Form->create('Post');
        echo $this->Form->input('name',array(
                'label' => 'お名前',
                'value' => $formData['Post']['name']
            ));
        echo $this->Form->input('email',array(
                'label' => 'メールアドレス',
                'value' => $formData['Post']['email']
            ));
        echo $this->Form->input('category',array(
                'type' => 'select',
                'options' => $items,
                'label' => 'お問い合わせの種類',
                'value' => $formData['Post']['category']
            ));
        echo $this->Form->input('comment',array(
                'label' => 'お問い合わせ内容',
                'value' => $formData['Post']['comment']
            ));
        echo $this->Form->button('確認する', array(
                'type' => 'submit',
                'name' => 'confirm',
                'value' => 'confirm'
            ));
        echo $this->Form->end();
    // 初期表示時
    } else {

        echo $this->Form->create('Post');
        echo $this->Form->input('name',array('label' => 'お名前'));
        echo $this->Form->input('email',array('label' => 'メールアドレス'));
        echo $this->Form->input('category',array('type' => 'select',
                                'options' => $items,'label' => 'お問い合わせの種類'));
        echo $this->Form->input('comment',array('label' => 'お問い合わせ内容'));
        //$sampleData = SessionHelper::read('sampleData');
        // $sample = $this->Session->read('sampleData');
        // echo "debug" . $sample . "end";

        echo $this->Form->button('確認する', array(
                'type' => 'submit',
                'name' => 'confirm',
                'class' => 'this_btn',
                'value' => 'confirm'
            ));

        echo $this->Form->end();
    }

?>