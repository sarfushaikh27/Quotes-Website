<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotify</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main-style.css">
</head>
<body> 
<div class="container">
	<div class="row">
		<div class="col-md-12 thoughts">
			<p>Quotify &nbsp;<span><p style="font-size: 20px;">Share your quotes</p></span></p>
		</div>
</div>
<div class="row">
	<div class="col-md-6">
 <div class="panel panel-primary">
      <div class="panel-heading">Share Quote</div>
      <div class="panel-body">
     <!-- form -->
     <form>
     <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
   <div class="form-group">
    <label for="Quote">Quote:</label>
     <textarea class="form-control" id="quote"></textarea>
  </div>
   <center><button type="button" class="btn btn-primary" id="submit">Submit</button></center>
</form>
<p id="result" style="color: orange; font-size: 10px;"></p>

      </div>
    </div>
	</div>

<!-- second column -->		
<div class="col-md-6">
 <div class="panel panel-primary">
      <div class="panel-heading">View Shared Quotes here</div>
      <div class="panel-body">
      	<center><button class="btn btn-primary"  onclick="viewquotes();">view quotes </button></center>
      </div>
    </div>
	</div>	


</div><!-- end of row -->
</div><!-- end of container -->
<script type="text/javascript">
     $('#submit').click(function(){
     	var name = $('#name').val();
     var email = $('#email').val();
     var quote = $('#quote').val();
     //alert(name+email+quote);
     $.ajax({
         type :'POST',
         url :'addquote.php',
         data :{name:name,email:email,quote:quote},
         success: function(response){
         //$('#result').html(response);
            swal("Quote Submitted successfully!", "", "success");
             $('#name').val("");
             $('#email').val("");
             $('#quote').val("");


         }
     });
    });

     function viewquotes(){
     	window.location.href="viewquotes.php";
     }
</script>
</body>
</html>
