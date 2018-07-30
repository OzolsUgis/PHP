<?php
	$loggedIn= false;
	$arr = [1,2,3,4,5,6];

	/*
	if ($loggedIn) {
		echo 'You are logged in';
	} else {
		echo 'You are ŅOT logged in';
	}
	*/

	// echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

	/*
	$isRegisterd = ($loggedIn == true) ? true : false;
	echo $isRegisterd;
		
	$age = 7;
	$score = 12; 

	echo 'Your score is: ' .($score > 10 ? ($age > 10 ?'Avarage': 
	'Exceptional') : ($age > 10 ? 'Horrible':'Avarege')) ;
	
	*/

	?>


<div>
	<?php if($loggedIn){ ?>
		<h1>Welcome User</h1>
	<?php } else { ?>
		<h1>Welcome Guest</h1>
	<?php }?>
</div>


<div>
	<?php if($loggedIn): ?>
		<h1>Welcome User</h1>
	<?php else: ?>
		<h1>Welcome Guest</h1>
	<?php  ?>

	<?php endif; ?>
</div>

<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach ?>

</div>

<div>
	<?php for ($i = 0; $i < 10 ; $i ++) : ?>
		<li><?php echo $i ; ?></li>
	<?php endfor;?>
</div>