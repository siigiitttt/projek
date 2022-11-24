<!DOCTYPE html>
<html>
<head>
	<title> Beranda </title>

	<!-- Untuk menyambungkan CSS dengan html -->

	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="chatbot.css">

	<!--  Bagian ini untuk font family -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=M+PLUS+2:wght@600&display=swap" rel="stylesheet">

	<!-- Bagian di bawah ini adalah bootstrap -->
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
		<!-- Bagian Navigation Bar -->

	<div class="top-bar">
		<nav>
			<label> LaperpoolShop </label>
			<ul>
				<li><a href="home.php"><i class="fa fa-home"></i> Beranda </a>
				</li>
				<li><a href=""><i class="fas fa-chevron-down"></i> Tentang </a>
					<ul>
						<li><a href="penulis.php"> Penulis </a></li>		
					</ul>
				</li>
				<li><a href=""><i class="fas fa-chevron-down"></i> produk </a>
					<ul>
						<li><a href="produk.php"> SKINCARE </a></li>		
					</ul>
				</li>
				<li><a href=""><i class="fas fa-chevron-down"></i> Kontak </a>
					<ul>
						<li><a href="kantor.php"> Kantor </a></li>		
					</ul>
				</li>	
			</ul>
		</nav>	
	</div>

	<!-- Bagian Jumbotron -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/bg5.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
					<div class="jumbotron">
				  <h1 class="display-4"> LaperpoolShop </h1>
				  <hr class="my-4">
				  <p> MELAYANI KEBUTUHAN SKINCARE ANDA </p>
				</div>
			</div>
		</div>
	    <div class="carousel-item">
	      <img src="img/bg1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <div class="jumbotron">
	        	<div class="dua">	
				  <h1 class="display-4"> SKINCARE BERGUNA UNTUK MENCERAHKAN KULIT </h1>
				  <hr class="my-4">
				  <p> ANEKA RAGAM JENIS SKINCARE </p>
				</div>
			</div>
	  </div>
	</div>
	    <div class="carousel-item">
	      <img src="img/bg3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <div class="jumbotron">
	        	<div class="tiga">	
				  <h1 class="display-4"> SKINCARE WAJAH </h1>
				  <hr class="my-4">
				  <p> skincare berperan besar dalam mewujudkan kulit tubuh dan wajah yang sehat menawan </p>
				</div>
			</div>
	  </div>
	</div>
</div>
	<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</button>
	<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</button>
</div>

<!-- Footer -->
    <footer>
	    <div class="footer-content">
	    	<h3> Social Media </h3>
	    	<p> Jika anda ingin mengetahui lebih lanjut mengenai produk produk LaperpoolShop silahkan klik pada icon sosial media dibawah ini sesuai dengan social media yang anda gunakan. </p>
	    	<ul class="socials">
				<li><a href="https://m.facebook.com/profile.php" target="blank"><i class="fab fa-facebook"></i></a></li>
	    		<li><a href="https://instagram.com/siigiitttt?igshid=YmMyMTA2M2Y=" target="blank"><i class="fab fa-instagram"></i></a></li>
	    	</ul>
	    	<div class="footer-bottom">
	    	<p> &copy; LaperpoolShop. Design by <span> Bagus Sigit Sujadmiko & Putri Jile Selian </span></p>
	    </div>
	</div>
</footer>

<!-- CHATBOT -->
</head>
  <body>
    <button type="button" class="btn btn-dark rounded-circle p-0 m-3" style="width:50px; height: 50px;" onclick="document.getElementById('chatbot').style.display='block'"><i class="fas fa-solid fa-comment fa-lg"></i></button>
    <div id="chatbot">
      <div class="pop-up-wrapper">
        <div class="header">
          <p>CHATBOT</p>
          <span class="close" onclick="document.getElementById('chatbot').style.display='none'">&times;</span>
        </div>
        <div class="isi">
          <div class="chat-bot">
            <div class="pesan-bot">
              <p>Selamat datang di Website LaperpoolShop</p>
            </div>
          </div>
        </div>
        <div class="footer">
          <form class="form-inline chatform">
          <input type="text" name="chatform" class="pesan" placeholder="Type your message...">
          <button type="button" class="btnkirim"><i class="fas fa-solid fa-paper-plane"></i></button>
          </form>
        </div>
      </div> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
    <script>
      $(document).ready(function(){
        $(".btnkirim").on("click", function(){
            $pesan = $(".pesan").val();
            $msg = '<div class="pesan-user"><p>' + $pesan + '</p></div>';
            $(".isi").append($msg);
            $(".pesan").val("");

            $.ajax({
              type:"POST",
              url:"chatbot/chatbot_check.php",
              data:'text=' +$pesan,
              success: function (result){
                $balasan = '<div class="chat-bot"><div class="pesan-bot"><p>'+result+'</p></div></div>';
                $(".isi").append($balasan);
                $(".isi").scrollTop($(".isi")[0].scrollHeight);
              }
            });
        });
      });
    </script>
  	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	    
</body>
</html>