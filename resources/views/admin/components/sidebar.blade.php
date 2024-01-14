                <aside class="sidebar navbar navbar-expand-lg bg-dark d-flex flex-column gap-4 align-content-lg-center mx-2 my- rounded">
                    <h5 class="navbar-brand">Toko Online</h5>
                    <div class="collapse navbar-collapse  flex-grow-0" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex flex-column gap-3 px-2">
                            <li class="navbar-item rounded {{Request::path() == 'admin/dashboard' ?  'bg-secondary' : ''}} ">
                                <a href="/admin/dashboard" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <i class="fa-regular fa-newspaper mt-1" style="color: #ffffff;"></i>
                                        <p class="m-0 p-0">Dasboard</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item rounded {{Request::path() == 'admin/product' ?  'bg-secondary' : ''}} ">
                                <a href="/admin/product" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <i class="fa-solid fa-box-archive mt-1" style="color: #ffffff;"></i>
                                        <p class="m-0 p-0">Product</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item rounded {{Request::path() == 'admin/user_management' ?  'bg-secondary' : ''}} ">
                                <a href="/admin/user_management" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <i class="fa-solid fa-user mt-1" style="color: #ffffff;"></i>
                                        <p class="m-0 p-0">User Management</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item rounded {{Request::path() == 'admin/report' ?  'bg-secondary' : ''}} ">
                                <a href="/admin/report" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <i class="fa-regular fa-flag mt-1" style="color: #ffffff;"></i>
                                        <p class="m-0 p-0">Report</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <i class="fa-solid fa-arrow-right-from-bracket mt-1" style="color: #ffffff;"></i>
                                        <p class="m-0 p-0">Logout</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>