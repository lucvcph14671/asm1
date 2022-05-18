<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

use App\Controllers\SubjectController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;


$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    //theme clien
    case '/':
        $ctr = new LoginController();
        $ctr->index();
        break;
    case 'singup':
        $ctr = new LoginController();
        $ctr->singup();
        break;
    case 'mon-hoc':
        $ctr = new SubjectController();
        $ctr->mon_hoc();
        break;
    case 'mon-hoc/tao-moi':
        $ctr = new SubjectController();
        $ctr->addForm();
        break;
    case 'mon-hoc/luu-tao-moi':
        $ctr = new SubjectController();
        $ctr->saveAdd();
        break;
    case 'mon-hoc/cap-nhat':
        break;
    case 'mon-hoc/luu-cap-nhat':
        break;
    case 'mon-hoc/xoa':
        $ctr = new SubjectController();
        $ctr->remove();
        break;
    // theme admin
    case 'admin/dashboard':
        $ctr = new DashboardController();
        $ctr->dashboard();
        break;
    case 'admin/giao-vien':
        $ctr = new DashboardController();
        $ctr->giao_vien();
        break;
    case 'admin/hoc-sinh':
        $ctr = new DashboardController();
        $ctr->giao_vien();
        break;
    case 'admin/mon-hoc':
        $ctr = new DashboardController();
        $ctr->mon_hoc();
        break;
    case 'admin/mon-hoc/them-moi':
        $ctr = new DashboardController();
        $ctr->mon_hoc_add();
        break;
    case 'mon-hoc/chi-tiet':
        break;
    case 'quiz':
        break;
    case 'quiz/tao-moi':
        break;
    case 'quiz/luu-tao-moi':
        break;
    case 'quiz/cap-nhat':
        break;
    case 'quiz/luu-cap-nhat':
        break;
    case 'quiz/xoa':
        break;
    case 'quiz/lam-bai':
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>