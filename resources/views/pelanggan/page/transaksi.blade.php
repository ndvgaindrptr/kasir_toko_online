@extends('pelanggan.layout.index')

@section('content')
<h3 class="mt-3">Keranjang belanja</h3>
<div class="content mt-3 d-flex flex-lg-wrap gap-4">
    <div class="card" style="width:200px">
        <img src="{{asset('assets/images/hitam_brody.png')}}" alt="">
        <p>Baju Catton warna hitam US</p>
        <h3>Rp. 200.000</h3>
        <p>Quantity : </p>
    </div>
</div>
@endsection