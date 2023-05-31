
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>CodePen - Dashboard UI </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{asset('css/style-jefedepartamento.css')}}">
	@yield('jefelayout')
	
    <script src="{{ asset('js/app.js') }}" defer></script>
	@vite(['resources/js/app.js'])
</head>
<body>
	<div class="aplication">
		<!-- partial:index.partial.html -->
<header class="header">
	<div class="header-content responsive-wrapper">
		<div class="header-logo">
			<a href="#">
				<div>
					<img src="https://assets.codepen.io/285131/untitled-ui-icon.svg" />
				</div>
				<img src="https://assets.codepen.io/285131/untitled-ui.svg" />
			</a>
		</div>
		<div class="header-navigation">
			<nav class="header-navigation-links">
				
			</nav>
			<div class="header-navigation-actions">
				<a href="#" class="button">
					<i class="ph-lightning-bold"></i>
					<span>Upgrade now</span>
				</a>
				<a href="#" class="icon-button">
					<i class="ph-gear-bold"></i>
				</a>
				<a href="#" class="icon-button">
					<i class="ph-bell-bold"></i>
				</a>
				<a href="#" class="avatar">
					<img src="https://uifaces.co/our-content/donated/gPZwCbdS.jpg" alt="" />
				</a>
			</div>
		</div>
		<a href="#" class="button">
			<i class="ph-list-bold"></i>
			<span>Menu</span>
		</a>
	</div>
</header>
<main class="main">
	<div class="responsive-wrapper">
		
		<div class="content-header">
			<div class="content-header-intro">
				<h2>Departamento : @yield('nombredepto') </h2>
				<p>Universidad : @yield('universidadnombre')</p>
			</div>
			<div class="content-header-actions">
				<a href="#" class="button">
					<i class="ph-faders-bold"></i>
					<span>Filters</span>
				</a>
				<a href="#" class="button">
					<i class="ph-plus-bold"></i>
					<span>Request integration</span>
				</a>
			</div>
		</div>
			@yield('contenido')
	</div>
</main>
<!-- partial -->
	</div>
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="./script.js"></script>
	@yield('js')
</body>
<script type="module">
	const addModal = new bootstrap.Modal('#createDataModal');
	const editModal = new bootstrap.Modal('#updateDataModal');
	window.addEventListener('closeModal', () => {
	   addModal.hide();
	   editModal.hide();
	})

	window.livewire.on('closeModal', () => {
	$('#createDataModal').modal('hide');
});
</script>
</html>
