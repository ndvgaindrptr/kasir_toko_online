@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4 align-items-center mb-5">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, magnam iure! Architecto dolorem labore optio
            eum sapiente possimus quisquam dolor et, quidem incidunt quasi quis quas neque repellat recusandae
            asperiores. Dicta facere cum neque odio dolorem eum veniam culpa laudantium quidem sint veritatis doloremque
            ipsa incidunt quis totam sunt impedit quasi aliquid labore, accusantium possimus numquam rem quisquam. Quae
            laborum voluptate quod dolor earum repudiandae officiis vel voluptatum pariatur. Consequuntur non illum
            delectus vitae ex. Dicta aliquid architecto accusamus qui doloremque ad nam ipsum vel provident neque
            nesciunt voluptatum, aspernatur ipsam sunt quas ea. Ratione, aut? Accusamus doloribus ipsa voluptates maxime
            nulla sed perspiciatis voluptatem reiciendis quae vero sapiente, iusto magnam velit omnis, suscipit quod
            distinctio ex quo? Et, voluptatum.
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/images/office-2.png') }}" style="width:70%" alt="">
    </div>
</div>

<div class="d-flex justify-content-lg-between mt-5">
    <div class="d-flex align-items-center gap-4">
        <i class="fa fa-users fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Pelanggan</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class=" fas fa-home fa-2x"> </i>
        <p class="m-0 fs-5">+ 500 Seller</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-shirt fa-2x"> </i>
        <p class="m-0 fs-5"> + 300 Product</p>
    </div>
</div>

<h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik Dan Saran</h4>
            </div>
            <div class="card-body">
                <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan yang terbaik untuk para customer kami.</p>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="" placeholder="Masukan Email Anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pesan" placeholder="Masukan Password Anda">
                    </div>
                </div>
                <button class="btn btn-primary mt-4 w-100">Kirim Pesan Anda</button>
            </div>
        </div>
    </div>
</div>
@endsection