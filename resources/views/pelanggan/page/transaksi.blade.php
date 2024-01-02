@extends('pelanggan.layout.index')

@section('content')
<h3 class="mt-3">Keranjang belanja</h3>
<div class="content mt-3 d-flex flex-lg-wrap gap-4">
    <div class="card d-flex flex-col" style="width: 200px;">
        <img src="{{ asset('assets/images/hitam_brody.png') }}" alt="">
        <p style="font-size: 24px; font-weight: 700;">Baju Catton warna hitam US</p>
        <h3>Rp. 200.000</h3>
        <p>Quantity :
            <span class="d-flex align-items-center">
                <button class="btn btn-secondary" id="plus">+</button>
                <input type="number" name="qty" id="qty" min="0" max="9999" value="1">
                <button class="btn btn-secondary" id="minus">-</button>
            </span>
        </p>
    </div>
</div>
@endsection