

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title>Community</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
     <style>
     .product
     {
     	background: black;
     }
     .modal
     {
     	color:black;
     }
     </style>  
     <script>
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $("#login").on('click',function(){
    	$('#modal1').openModal();
    })
     
  });
          
     </script>   
</head>
<body class="row">
	
     <!-- Modal Structure -->
  <div id="modal1" class="modal">
  <div class="modal-header">LOGIN</div>
    <div class="modal-content">
       <div class="row">
       	<div class="col s12 input-field">
      <label for="username">Username</label>
      <input id="username" type="text" class="validate">
      </div>
       </div>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  </nav>
</body>
</html>