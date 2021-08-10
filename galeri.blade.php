<!DOCTYPE html>
<html>
<head>
	<title>Bismillah</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		.text{
			position: absolute;
			top: 0%;
			left: 40%;
			padding: 10px;
			font-weight: bold;
			background: -webkit-linear-gradient(30deg, #0000FF, #00FFFF);
   			-webkit-background-clip: text;
   			-webkit-text-fill-color: transparent;
			text-align: center;
		}
		img{
			max-width: 100%;
		}
		.gallery{
			background-color: #dbddf1;
			padding: 80px 0;
		}
		.gallery img{
			background-color: #ffff;
			padding: 15px;
			width: 100%;
			box-shadow: 0 0 15px rgba(0,0,0,0.3);
			cursor: pointer;
		}
		#gallery-modal .modal-img{
			width: 100%;
		}
		.btn{
			position: absolute;
			bottom:  -60%;
			left: 35%;
		}
	</style>
</head>
<body>
	<section class="gallery min-vh-100">
		<div class="container-lg">
			<h2 class="text">  E-SPORT LADIES MLBB </h2>
			<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/jeha.jfif" class="gallery-item" alt="gallery">
				</div>
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/kayess.jfif" class="gallery-item" alt="gallery">
				</div>
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/vior.jfif" class="gallery-item" alt="gallery">
				</div>
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/vivi.jfif" class="gallery-item" alt="gallery">
				</div>
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/vunny.jfif" class="gallery-item" alt="gallery">
				</div>
				<div class="col">
					<img src="http://127.0.0.1:8000/pictures/oliv.jfif" class="gallery-item" alt="gallery">
				</div>
				<a href="{{ url('../route/my_account') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">EXIT</a>
			</div>
		</div>
	</section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- <h1>menampilkan gambar saat diclick</h1> -->
      <div class="modal-body">
        <img src="http://127.0.0.1:8000/pictures/cat.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	document.addEventListener("click",function (e) {
		if(e.target.classList.contains("gallery-item")){
			const src = e.target.getAttribute("src");
			document.querySelector(".modal-img").src = src;
			const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'))
			myModal.show();
		}
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>