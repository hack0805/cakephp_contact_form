<h2>お問い合わせフォーム</h2>
<dl>
    <dt><large>お名前:</large> </dt>
        <dd><?php echo h($this->request->data['Post']['name']) ?></dd>
    <dt><large>メールアドレス：</large></dt>
        <dd><?php echo h($this->request->data['Post']['email']) ?></dd>
    <dt><large>お問い合わせ種類：</large></dt>
        <dd><?php echo h($this->request->data['Post']['category']) ?></dd>
    <dt><large>お問い合わせ内容：</large></dt>
        <dd><?php echo h($this->request->data['Post']['comment']) ?></dd>
</dl>

<?php
$name = h($this->request->data['Post']['name']);
$email = h($this->request->data['Post']['email']);
$category = h($this->request->data['Post']['category']);
$comment = h($this->request->data['Post']['comment']);

echo $this->Form->create('Post');
echo $this->Form->hidden('name', array('value' => $name));
echo $this->Form->hidden('email', array('value' => $email));
echo $this->Form->hidden('category', array('value' => $category));
echo $this->Form->hidden('comment', array('value' => $comment));

echo $this->Form->button('戻る', array(
        'type' => 'submit',
        'name' => 'confirm',
        'class' => 'this_btn',
        'value' => 'pre'
    ));
echo $this->Form->button('送信', array(
        'type' => 'submit',
        'name' => 'confirm',
        'class' => 'this_btn',
        'value' => 'complete'
    ));
echo $this->Form->end();

?>

