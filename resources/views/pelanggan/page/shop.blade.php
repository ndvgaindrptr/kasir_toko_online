@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4">
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        Kategory
      </div>
      <div class="card-body">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                PRIA
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body p-0">
                <div class="d-flex flex-column gap4">
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Baju Pria
                  </a>
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Celana Pria
                  </a>
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Aksesoris Pria
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item ">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                WANITA
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body p-0">
                <div class="d-flex flex-column gap4">
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Baju Wanita
                  </a>
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Celana Wanita
                  </a>
                  <a href="#" class="page-link">
                    <i class="fas fa-plus"></i>Aksesoris Wanita
                  </a>
                </div>
              </div>
            </div>
          </div>
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              ANAK-ANAK
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body p-0">
              <div class="d-flex flex-column gap4">
                <a href="#" class="page-link">
                  <i class="fas fa-plus"></i>Baju Anak-anak
                </a>
                <a href="#" class="page-link">
                  <i class="fas fa-plus"></i>Celana Anak-anak
                </a>
                <a href="#" class="page-link">
                  <i class="fas fa-plus"></i>Aksesoris Anak-anak
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font: size 24px;">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
    <div class="card" style="width:220px">
      <div class="card-header m-auto" style="border-radius:5px;">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="baju 1" style="width: 100%; height: 300px; object-fit: contain; display: block; margin: 0 auto;">
      </div>
      <div class="card-body">
        <p class="m-0 text-justify"> Baju Catton warna hitam US </p>
        <p class="n-0"><i class="fa-regular fa-star"></i> 5+</p>
      </div>
      <div class="card-footer d-flex flex-row justify-content-between">
        <p class="m-0" style="font-size: 12px">Rp. 200.000</p>
        <button class="btn btn-outline-primary" style="font-size: 24px;">
          <i class="fa-solid fa-cart-plus"></i>
        </button>

      </div>
    </div>
    <nav class="m-auto align-items-end">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
@endsection