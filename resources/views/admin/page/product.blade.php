@extends('admin.layout.index')

@section('content')
<div class="card mb-1">
    <div class="card-body d-flex flex-row justify-content-between">
        <div class="filter d-flex flex-lg-row gap-3">
            <input type="date" class="form-control" name="tgl_awal">
            <input type="date" class="form-control" name="tgl_akhir">
            <button class="btn btn-primary">Filter</button>
        </div>

    </div>
</div>
<div class="card-header bg-transparant d-flex justify-content-between">
    <button class="btn btn-success" id="addData">
        <i class="fa fa-plus">
            <span>Tambah Product</span>
        </i>
    </button>
    <input type="text" class="form-control w-25" placeholder="Search....">
</div>
<div class="card-body">
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Date In</td>
                <td>SKU</td>
                <td>Product Name</td>
                <td>Category</td>
                <td>Price</td>
                <td>Stock Good</td>
                <td>Stock Bad</td>
                <td>#</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2023/16/06</td>
                <td>BGR09123</td>
                <td>Celana Panjang Wanita</td>
                <td>Pakaian Wanita</td>
                <td>200000</td>
                <td>200</td>
                <td>10</td>
                <td>
                    <button class="btn btn-success">
                        <i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<div class="tampilData" style="display: none;"></div>

<script>
    $('#addData').click(function (e) {
        $.ajax({
            url: "{{route('addModal')}}",
            success: function(response) {
                $('.tampilData').html(response).show();
                $('#addModal').modal('show');
            }
        });
    });
</script>
@endsection