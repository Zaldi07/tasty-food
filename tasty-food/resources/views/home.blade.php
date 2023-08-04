<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssasset/style.css') }}">
    <title>Hello, world!</title>
  </head>
  <body>
    {{-- navbar --}}
<section class="header-section" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant  ">
      <div class="container gap-5 justify-content-around">
        <a class="navbar-brand fs-3 fw-bold " href="#">TASTY FOOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav  justify-content-around gap-3 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#header">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-section">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#news-section1">BERITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GALERI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">KONTAK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <div class="row align-items-center justify-content-between" ">
      <div class="col-md-5">
        <div class="header-text"><h1 class="header-title mt-2 mb-0"   >HEALTY</h1></div>
        <h1 class="fw-bold">TASTY FOOD</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quasi impedit officiis modi quam? Deserunt consequuntur repudiandae distinctio! Nostrum, vitae, voluptatibus soluta quo distinctio minus quam tenetur quibusdam quia repudiandae beatae reprehenderit saepe iste ipsum natus consequatur neque officia doloribus fugit rerum culpa consectetur quasi ex. Ducimus quo est suscipit.</p>
        <button type="button" class="btn btn-dark mt-3 px-5 ">TENTANG KAMI</button>
      </div>
      <div class=" img-home col-md-5  " >
          <img src="{{ asset('imgasset/home.png') }}" width="140%" alt="" >
      </div>
    </div>
  </div>
</section>
<section class="aboutus-section" id="about-section">
  <div class="container  ">
    <div class="d-flex justify-content-center  text-center">
      <div class="item-aboutus">
      <h3 class=" fw-bold">TENTANG KAMI</h3>
      <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. br Maxime voluptate dolorem consequuntur <br>nus libero similique iusto obcaecati lorem10,  ipsam numquam quia, veniam officiis laudantium doloribus inventore <br>culpa corporis? Eius dolore obcaecati culpa, explicabo ipsum laborum! <br>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
      <div  class="mx-auto" id="line"> </div>
    </div>
    </div>
  </div>
</section>
<section class="card-section  d-flex align-items-center">
  <div class="container ">
    <div class="row row-cols-2 row-cols-md-4 g-4   ">
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img1.png') }}" class="card-img-top " alt="...">
          <div class="card-body ">
            <h3 class="card-title fw-bold">LOREM IPSUM</h3>
            <p class="card-text ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad odit laboriosam neque vitae..</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis soluta ducimus laborum similique..</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-3.png') }}" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eveniet iste a nobis!
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-4.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, nesciunt eveniet. At, ab. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news-section" id="news-section">
  <div class="container">
    <h3 class="fw-bold mb-6 mt-0" style="text-align: center;">BERITA KAMI</h3>
  <div class="row justify-content-md-center">
    <div class=" col col-md-5 g-2">
      <!-- Card besar di kanan -->
      <div class="card">
        <img   id="image-news"  src="{{ asset('imgasset/news1.jpg') }}" alt="Card image cap"  class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Card Besar</h5>
          <p class="card-text ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis doloremque recusandae earum porro eligendi maiores, placeat perspiciatis minima debitis aliquid?.</p>
        </div>
      </div>
    </div>
    <div class="card-news col-md-5">
      <div class=" news-parents row row-cols-1 row-cols-md-2 g-1 ">
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
</section>
<section class="galery-section">
  <div class="container">
    <h3 class="fw-bold mb-4 mt-0" style="text-align: center;">GALERI KAMI</h3>
    <div class="row  row-cols-2 gap-2 justify-content-center">
      <div class="col col-md-3 col-sm-1">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/news2.jpg') }}" class="card-img-top" alt="...">
      </div>
    </div>
    <div class=" d-flex justify-content-center">
      <button type="button" class="btn btn-dark mt-3 px-5 ">TENTANG KAMI</button>
    </div>
</div>
</section>
<footer class="bg-dark text-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Contact Us</h5>
        <p>Email: contact@example.com</p>
        <p>Phone: +1 (123) 456-7890</p>
      </div>
      <div class="col-md-6">
        <h5>Follow Us</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Facebook</a></li>
          <li class="list-inline-item"><a href="#">Twitter</a></li>
          <li class="list-inline-item"><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>