<h3>Add user</h3>
<?php
 echo $this->Form->create();
 echo $this->Form->input('name');
 echo $this->Form->input('detail');
 echo $this->Form->end('Send');

 var_dump($request_data); 
 echo $this->Html->link('Home','/search');
?>

