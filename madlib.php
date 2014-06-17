
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>
<style>
	body {
		background-color: #EDE5DD;
	}
	p { 
		width: 60rem;
		height: 40rem;
		top: 10rem;
		left: 15rem;
		right: 10rem;
		position: absolute;
		font-size: 25px;
		text-align: justify;
		font-family: 'Josefin Sans', sans-serif;
	}
	span {
		color: red;
	}
</style>
<?php
	
if(empty($_POST['input1'])) {
	$input1 = $_POST['verb1'];
}
else {
	$input1 = $_POST['input1'];
}

if(empty($_POST['input2'])) {
	$input2 = $_POST['noun1'];
}
else {
	$input2 = $_POST['input2'];
}

if(empty($_POST['input3'])) {
	$input3 = $_POST['noun2'];
}
else {
	$input3 = $_POST['input3'];
}

if(empty($_POST['input4'])) {
	$input4 = $_POST['noun3'];
}
else {
	$input4 = $_POST['input4'];
}

if(empty($_POST['input5'])) {
	$input5 = $_POST['noun4'];
}
else {
	$input5 = $_POST['input5'];
}
if(empty($_POST['input6'])) {
	$input6 = $_POST['verb2'];
}
else {
	$input6 = $_POST['input6'];
}

if(empty($_POST['input7'])) {
	$input7 = $_POST['verb3'];
}
else {
	$input7 = $_POST['input7'];
}

if(empty($_POST['input8'])) {
	$input8 = $_POST['noun5'];
}
else {
	$input8 = $_POST['input8'];
}
if(empty($_POST['input9'])) {
	$input9 = $_POST['noun6'];
}
else {
	$input9 = $_POST['input9'];
}
if(empty($_POST['input10'])) {
	$input10 = $_POST['adj1'];
}
else {
	$input10 = $_POST['input10'];
}

if(empty($_POST['input11'])) {
	$input11 = $_POST['adj2'];
}
else {
	$input11 = $_POST['input11'];
}

?>

<p>
"No one wants to <span><?=$input1?></span>. Even people who want to go to <span><?=$input2?></span> don't want to <span><?=$input1?></span> to get there. 
And yet <span><?=$input3?></span> is the destination we all share. No one has ever escaped it. And that is as it should be, 
because <span><?=$input3?></span> is very likely the single best <span><?=$input4?></span> of life. It is life's change agent. 
It clears out the old to make way for the new. Right now the new is you, but someday not too long from now, 
you will gradually become the old and be cleared away. Sorry to be so dramatic, but it is quite true.
"Your <span><?=$input5?></span> is limited, so don't <span><?=$input6?></span> it <span><?=$input7?></span> someone else's life. 
Don't be trapped by dogma - which is living with the results of other people's thinking. 
Don't let the noise of others' opinions drown out your own <span><?=$input8?></span>. 
And most important, have the courage to follow your <span><?=$input9?></span> and intuition ... Stay <span><?=$input10?></span>, Stay <span><?=$input11?></span>."  --- Steve Jobs
</p>