<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yo bisa</title>
</head>
<div class="odfun-galeri">
<div style="background-image: url(image/gambar1.jpg);"></div>
<div style="background-image: url(image/gambar2.jpg);"></div>
<div style="background-image: url(image/gambar3.jpg);"></div>
<div style="background-image: url(image/gambar4.jpg);"></div>
<div style="background-image: url(image/gambar5.jpg);"></div>
</div>
<style>
.odfun-galeri {
	display: flex;
	height: 30rem;
	gap: 1rem;
}	
.odfun-galeri > div {
flex: 1;
border-radius: 10rem;
background-position: center;
background-repeat: no-repeat;
background-size: auto 100%;
transition: all .8s cubic-bezier(.10, .10, .10, 1);
}
.odfun-galeri > div:hover {
	flex: 10;
}

</style>

<body>



</body>
</html>