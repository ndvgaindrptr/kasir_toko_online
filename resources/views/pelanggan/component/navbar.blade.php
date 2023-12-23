<nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#555555">
  <div class="container">
    <a class="navbar-brand" href="#">Toko Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  {{Request::path() == '/' ? 'active' : '';}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::path() == 'shop' ?'active' :'';}}" href="/shop">Shop</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link {{Request::path() == 'contact' ?'active' :'';}}" href="/contect">Contact Us</a>
        </li> 
      </ul>
      <div class="d-flex gap-4 align-items-center">
      <button class="btn btn-success" type="button">Login | Register</button>
        <div class="notif">
        <a href="/transaksi" class="fs-5 ">
      <i class="fa-solid icon-nav fa-bag-shopping"></i>
      </a>
      <div class="circle">10</div>
      </div>
        </div>
    </div>
  </div>
</nav>