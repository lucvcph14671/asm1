<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap  shadow">
            <a class="navbar-brand col-md-3 col-lg-2 px-3" href="#"><img src="<?=BASE_URL?>app/views/images/logo test horiz bis.png" width="100" alt=""/></a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
            <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a href=""><button type="button" class="btn btn-danger me-2"><i class="fas fa-search"></i>Tìm kiếm</button></a>
                <a href="./dangki.html"><button type="button" class="btn btn-outline-light me-2"><i class="fab fa-mailchimp pe-2"></i>Lucvutru</button></a>
                <a href="./index.html"><button type="button" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i>Thoát</button></a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse " style="padding-bottom: 17%;">
                    <div class="position-sticky pt-3 ">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>admin/dashboard">
                                <button type="button" class="btn btn-outline-info">Dashboard</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/giao-vien">
                                    <i class="fas fa-chalkboard-teacher text-warning"></i>
                                    <span data-feather="file"></span> Giáo viên
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/hoc-sinh">
                                <i class="fas fa-graduation-cap text-warning"></i>
                                    <span data-feather="shopping-cart"></span> Học sinh
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/tin-tuc">
                                    <i class="far fa-newspaper text-warning"></i>
                                    <span data-feather="users"></span> Tin tức
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Hệ Thống</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/mon-hoc">
                                    <i class="fas fa-book text-warning"></i>
                                    <span data-feather="file-text"></span> Môn học
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/danh-sach-lop-hoc">
                                    <i class="fas fa-university text-warning"></i>
                                    <span data-feather="file-text"></span> Danh sách lớp học
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/cau-hoi">
                                    <i class="far fa-question-circle text-warning"></i>
                                    <span data-feather="file-text"></span> Câu hỏi ?
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>admin/de-thi">
                                    <i class="fas fa-eye-dropper text-warning"></i>
                                    <span data-feather="file-text"></span> Đề thi
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">