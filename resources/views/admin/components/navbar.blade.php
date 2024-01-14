<nav class="mb-3 d-flex justify-content-lg-between bg-white p-2 rounded">
    <div class="d-flex-column">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active"><a href="#">{{$name}}</a></li>
        </ol>
        <span>{{$name}}</span>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="icon-notif">
            <i class="fa-regular fa-bell" style="color: #000000;"></i>
        </div>
        <img src="{{asset('assets/images/avatar.png')}}" class="rounded-circle" style="width: 50px; margin-right: 40px;" alt="">
    </div>
</nav>