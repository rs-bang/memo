<?php
class User extends AppModel{
 public $validate = array(
	'name' => array( 
	 'cc_number' => array(
		'rule' => 'url',
		'message' => 'ngay khong chinh xac'
	 )
/*
	 'not empty' => array(
		'rule' => 'notEmpty',
		'message' => 'Khong duoc de trong'
	 ),
	 'chu_so' => array(
		'rule' => 'alphaNumeric',
		'message' => 'phai la chu va so'
	 ),
	 'minLength' => array(
		'rule' => array('minLength',2),
		'message' => 'phai lon hon 2'
	 )
*/
	)
 );
}
?>
