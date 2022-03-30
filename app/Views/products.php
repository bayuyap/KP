<?= $this->extend('layout/page_layout') ?>
<?= $this->section('slider') ?>
<?= $this->include('layout/slider') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<!-- Main -->
	<div id="main" class="shell">
    <?= $this->include('layout/sidebar') ?>
		<!-- Content -->
		<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Featured Products</h3>
				<ul>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image01.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image02.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image03.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image04.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image05.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image06.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image07.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image08.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<div id="best-sellers">
				<h3>Best Sellers</h3>
				<ul>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best01.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>35<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best02.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>45<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best03.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>15<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best04.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>27<span class="high">99</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best01.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>35<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best02.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>45<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best03.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>15<span class="high">00</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best04.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="low">$</span>27<span class="high">99</span></span>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
<?= $this->endSection() ?>