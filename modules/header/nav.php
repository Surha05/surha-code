<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<a class="navbar-brand" href="/">Surha-Code</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span>
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if($title_page == 'Главная') echo 'active' ?>"><a href="/" class="nav-link pl-0">Главная</a></li>
				<li class="nav-item <?php if($title_page == 'О нас') echo 'active' ?>"><a href="/about.php" class="nav-link pl-0">О нас</a></li>
				<li class="nav-item <?php if($title_page == 'Ученики') echo 'active' ?>"><a href="/students.php" class="nav-link">Ученики</a></li>
				<li class="nav-item <?php if($title_page == 'Курсы') echo 'active' ?>"><a href="/courses.php" class="nav-link">Курсы</a></li>
				<li class="nav-item <?php if($title_page == 'Цены') echo 'active' ?>"><a href="/prices.php" class="nav-link">Цены</a></li>
				<li class="nav-item <?php if($title_page == 'Новости') echo 'active' ?>"><a href="/blog.php" class="nav-link">Новости</a></li>
				<li class="nav-item <?php if($title_page == 'Контакты') echo 'active' ?>"><a href="/contact.php" class="nav-link">Контакты</a></li>
			</ul>
		</div>
	</div>
</nav>