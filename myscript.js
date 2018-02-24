
$("button#submit").click(function(){

if( $("#comment").val()==""){
	$("p#ack").html("Comment cannot be null");
}
else{
	$.post( $("#myform").attr("action"),
            $("#myform").serializeArray(),
    function(data){

    	$("p#ack").html(data);
    	

    });
    }


$("#myform").submit(function(){
	return false;
});
});

