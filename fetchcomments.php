<!DOCTYPE html>
<html>
<head>
	<title>Fetch comments section</title>
</head>
<body>

<!--write php fetch scripts-->
			<?php
			 function fetch(){
             $connect=mysql_connect('localhost','root','');
             $dbselected=mysql_select_db('mpesaapi');
             $fetch_query="SELECT * from comments ORDER BY comments.date DESC";
             $executeQuery=mysql_query($fetch_query);
             

             while($records=mysql_fetch_assoc($executeQuery)){

 

 if($records['username']=='evansxyZ'){



             	?>
         
     
        <div class="row">

        <p style="float: right;margin-right: 10px;"><span class="col-sm-1 text-success"><u><?php echo $records['username']; ?></u></span>
  

        <span class="col-sm-4 pull-right"><u><?php 
        if(date('d:m:Y')==$records['date']){
           echo 'Today'; 
           echo "-".$records['time'];
        }else{
        	echo $records['date']; 
        }
        
        ?></u></span></p>

      
        <br><br><br>
        <div class="row pull-right" style="margin-right:15px;width:200px;background-color:cyan;border-radius: 12px;"><span class="col-sm-12"><span style="color: red;">comment:</span>  <?php echo $records['comment']; ?></span></div>
       
        <br>
    </div><br><br>



        <?php }
        else{?>

<div class="row">

        <p><span class="col-sm-1 text-success"><u><?php echo $records['username']; ?></u></span>

        <span class="col-sm-4"><u><?php 
        if(date('d:m:Y')==$records['date']){
           echo 'Today';
        }else{
        	echo $records['date']; 
        }
        
        ?></u></span></p>

      
        <br>
        <div class="row" style="margin-left:15px;width:200px;background-color:cyan;border-radius: 12px;"><span class="col-sm-12"><span style="color: red;">comment:</span>  <?php echo $records['comment']; ?></span></div>
       
        <br>
    </div>







<?php
        }
    }
         }
         fetch();
        ?>



</body>
</html>