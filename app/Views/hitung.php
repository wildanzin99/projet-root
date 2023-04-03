<?= base_url('assets/css/style.css') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hitung B2SA</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,600&display=swap" rel="stylesheet" />
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar-i">
    <a href="#" class="navbar-logo-i">Panganku<span>B2SA</span>.</a>

    <div class="navbar-nav-i">
      <a href="#">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#video">Video</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Apa itu <span>B2SA</span> ?</h1>
      <p>
        Pangan Beragam, Bergizi Seimbang & Aman (B2SA) Merupakan aneka ragam
        bahan pangan, (sumber karbohidrat, protein, maupun vitamin dan
        mineral), yang bila dikonsumsi dalam jumlah seimbang dapat memenuhi
        kecukupan gizi yang dianjurkan serta tidak tercemar bahan berbahaya
        yang merugikan kesehatan.
      </p>
      <a href="#hitung" class="cta">Hitung Kebutuhan</a>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- Video Section Start -->
  <section class="video" id="video">
    <main class="content">
      <h2>Video</h2>
      <div class="row">
        <iframe width="640" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe width="640" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
      </div>
    </main>
  </section>
  <!-- Video Section End -->

  <!-- Hitung Section Start -->
  <section class="hitung" id="hitung">
    <main class="content">
      <h2>Hitung Pangan B2SA</h2>
      <div style="max-width: 700px; margin: auto">
        <form class="form-hitung" id="form-hitung">
          <label for="fname">Jenis Kelamin</label><br />
          <select class="form-select form-control">
            <option value="">Pilih</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
          </select>
          <br />
          <label for="fumur">Umur (Tahun)</label><br />
          <input class="form-control" type="text" id="fumur" name="fumur" />
          <button>Hitung</button>
        </form>
        <hr />
      </div>
      <div class="">

      </div>
    </main>
  </section>
  <!-- Hitung Section End -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
  <!-- My Java Script -->
  <script src="<?= base_url('js/script.js') ?>"></script>
</body>

</html>