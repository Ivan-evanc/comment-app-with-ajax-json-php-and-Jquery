<!DOCTYPE html>
<html>
<head>
	<title>sending | mail using Ajax</title>
	<meta charset="utf-8">
	<meta name="viewport" content="device=width-device, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgray;">
	<br>
	<br>

	<!--section to add the send mails-->
	<div class="container panel-default">
		
		<div class="panel-heading" style="background-color: orange;">
        <p style="color: cyan;text-align: center;">Have your say</p>
		</div>

		<div class="panel panel-body">
			<?php include_once 'fetchcomments.php';?>
           
           <br>
        <!--comment section-->
        <form method="POST" id="myform" action="sendcomment.php">
			<input type="text" name="comment" id="comment" class="form-control" placeholder="Write your comment here...">

			 <p id="ack" style="color: red;"></p>
			<br>
			<button id="submit" class="btn btn-default pull-right">Send</button>

		</form>
		</div>
		

	</div>

	<script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>

</body>
</html>