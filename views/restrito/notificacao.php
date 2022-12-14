<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>trampo</title>
		<link rel="stylesheet" type="text/css" href="../../assets/css/restrito.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css?1">		
		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
	</head>
	<body>
		<nav style="background-color: #006eff;" class="navbar fixed-top ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: white;" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg><a>
            <a class="navbar-brand" href="#" style="color: white;">Notificações</a>
            <a class="navbar-brand" href="#" style="color: transparent;">espaço</a>
            
          </div>
        </nav>

		<br><br><br><br><br>

		<ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
		  <li class="nav-item" role="presentation">
		    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Lidas</button>
		  </li>
		  <li class="nav-item" role="presentation">
		    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Não lidas</button>
		  </li>
		 
		</ul>


		<section class="container">

			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

			  	<p style="text-align:center;">suas notificações lidas ficam aqui</p>

			  </div>
			  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

			  	<p style="text-align:center;">suas notificações não lidas ficam aqui</p>

			  </div>
			
			</div>

		</section>
		


		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
	</body>
</html>