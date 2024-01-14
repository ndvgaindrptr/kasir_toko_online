@extends('admin.layout.index')

@section('content')
<div class="d-flex flex-wrap gap-4">
    <div class="card" style="width: 200px;">
        <div class="card-body m-auto">
            <div class="d-flex gap-4 align-item-center m-auto">
                <i class="fa-solid fa-box-archive" style="color: #000000;"></i>
                <span class="fs-1- p-0 m-0">100</span>
            </div>
        </div>
        <div class="card-footer text-center bg-transparent">
            <h5>Total Inventory</h5>
        </div>
    </div>
    <div class="card" style="width: 200px;">
        <div class="card-body m-auto">
            <div class="d-flex gap-4 align-item-center m-auto">
                <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                <span>100</span>
            </div>
        </div>
        <div class="card-footer text-center bg-transparent">
            <h5>Total Transaksi</h5>
        </div>
    </div>
    <div class="card" style="width: 200px;">
        <div class="card-body m-auto">
            <div class="d-flex gap-4 align-item-center m-auto">
                <i class="fa-solid fa-users" style="color: #000000;"></i>
                <span>100</span>
            </div>
        </div>
        <div class="card-footer text-center bg-transparent">
            <h5>Total Karyawan</h5>
        </div>
    </div>
    <div class="card" style="width: 200px;">
        <div class="card-body m-auto">
            <div class="d-flex gap-4 align-item-center m-auto">
                <i class="fa-solid fa-solid fa-wallet" style="color: #000000;"></i>
                <span>100</span>
            </div>
        </div>
        <div class="card-footer text-center bg-transparent">
            <h5>Total Profit</h5>
        </div>
    </div>

</div>

@endsection