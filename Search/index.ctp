<h3>User List</h3>
<h4><?php echo $this->Html->link('Add user','/search/add'); ?> </h4>
<table>
 <tr>
  <th>No</th>
  <th>Name</th>
  <th>Detail</th>
 </tr>
 <?php foreach($users as $user): ?>
 <tr>
  <td><?php echo $this->Html->link($user['User']['id'],array(
	'controller'=>'search','action'=>'view',$user['User']['id'])); ?>
  </td>
  <td><?php echo $user['User']['name']; ?></td>
  <td><?php echo $user['User']['detail']; ?></td>
 </tr>
 <?php endforeach; ?>
</table>

<?php
var_dump($users);
?>
