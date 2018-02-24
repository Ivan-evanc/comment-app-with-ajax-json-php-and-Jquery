<?php
//declare the variable

$connect=mysql_connect('localhost','root','');

$dbselected=mysql_select_db('mpesaapi');

$username="evansxyZ";
$date=date('d:m:Y');
$time=date('h:m:sa');
$comment=mysql_escape_string($_POST['comment']);
if($comment!=""){

$insert_query="INSERT into comments(comments.username,comments.date,comments.time,comments.comment) values('$username','$date','$time','$comment')";

$executeQuery=mysql_query($insert_query);

if($executeQuery){
	echo "Comment send by ".$username;
}else{
	echo "Comment failed";
}



}else{
	echo "Comment cannot be empty";
}

