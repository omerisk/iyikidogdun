
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

</head>
<!--type="text/javascript"-->

<script >
function display(form){
if (form.kadi.value=="omer") { 
		if (form.sifre.value=="123456") {              
										location="hafta1.php" 
											} else {
													alert("Parola Yanlış")
													}
								} else {  alert("Kullanıcı Adı yanlış")
										}
						}
			</script>			
<body >

<form >
  <body class="bg-info">
    
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 bg-light mt-5 rounded height: 100vh; ">

          <label class="mt-5 pl-5 font-weight-bold">SIG IN</Label>
         
          <label class="mt-5 pl-5 font-weight-bold">SIG UP</label>
          <form class="" method="POST" action="">

          <input type="text" name="kadi" class="form-control form-control-lg mb-2" placeholder="login ">
          <input type="password" name="sifre" class="form-control form-control-lg mb-2" placeholder="password ">
          <input type="button" value="Login" onClick="display(this.form)" class="bnt btn-info form-control mb-5 "/>

         <!-- <input type="submit" name="" value="Login" onClick="display(this.form)" class="bnt btn-info form-control mb-5 "/>-->

</form> 
<p class="bg-secondary rounded text-white">Foreget Pasword</p>
</div>
<div class="col-md-4"></div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
      
    </nav>
  </body>
</html>
<html>
<head>
