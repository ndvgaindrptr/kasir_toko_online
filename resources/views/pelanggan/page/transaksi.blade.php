@extends('pelanggan.layout.index')

@section('content')
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<h3 class="mt-5">Keranjang belanja</h3>
<div class="card">
    <div class="card-body d-flex gap-4">
        <img src="{{ asset('assets/images/hitam_brody.png') }}" alt="">
        <div class="desc w-100">
            <p style="font-size:24px; font-weight:700;">Baju Catton warna hitaam US</p>
            <h3>Rp. 200.000</h3>
            <div class="row">
                <label for="qty" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-5 d-flex">
                    <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                    <input type="number" name="qty" class="form-control w-25 text center" id="qty"
                    min="0" max="9999" value="1">
                    <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                </div>
            </div>
            <p>Total :
                <h4>Rp. 200.000</h4>
            </p>
        </div>
    </div>
</div>
    @endsection