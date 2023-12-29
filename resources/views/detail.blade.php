<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quantum Qomputers - We Sell Software & Hardware</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="/icon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/css/detail.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header" data-header>
    <div class="container">
      
      <div class="overlay" data-overlay></div>
      <a href="/" class="logo">
        <img src="/logo.png" alt="Casmart logo" width="131" height="31">
      </a>
          <div class="header-actions">
          </div>
          <div class="header-actions">
            <button class="header-action-btn">
              <ion-icon name="phone-portrait-outline" aria-hidden="true"></ion-icon>
              <p class="header-action-label">Unduh aplikasi</p>
            </button>
          </div>
      

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>
        <ul class="navbar-list">
          <li>
            <a href="/#home" class="navbar-link"><i class="navbar-icon fa-solid fa-house"></i>Home</a>
          </li>
          
          <li>
            <a href="/#category" class="navbar-link"><i class="fa-solid fa-layer-group"></i>Category</a>
          </li>

          <li>
            <a href="/#product" class="navbar-link"><i class="navbar-icon fa-solid fa-cart-shopping"></i>Product</a>
          </li>

          <li>
            <a href="/#contact" class="navbar-link"><i class="navbar-icon fa-solid fa-phone"></i>Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<img src="{{$product->img}}" alt="Foto">
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>{{$product->produk}}</h1>
            <div class="detail-deskripsi">
                <p>{{$product->deskripsi}}</p>
            </div>
		</div>
		<div class="price">
			Rp. <span>{{$product->harga}}</span>
		</div>
	</div>
</section>
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <a>Description</a>
 
          </a>

          <p class="footer-text">
            menjadi destinasi utama untuk semua kebutuhan komputasi Anda. Temukan berbagai jenis mouse, keyboard, dan headset untuk meningkatkan pengalaman gaming Anda. Jelajahi pilihan headset audio berkualitas tinggi untuk meningkatkan kenyamanan dan kualitas suara saat bekerja atau bersantai.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">Quantum Qomputers</a>. 
        </p>

        <ul class="footer-bottom-list">
          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Location</a>
          </li>

        </ul>


  </footer>
</body>

  <!-- 
    - custom js link
  -->
  <script src="/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>