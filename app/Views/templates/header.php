<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title ." | " : "" ?>CI V4 Simple Crud</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--end of Styles -->
 
    <!-- Scritps -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end of Scritps -->
 
</head>
<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">CI4 Simple CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?= base_url() ?>"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?= base_url('main/list_mhs') ?>"><i class="fa-solid fa-person"></i> Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('main/list') ?>"><i class="fa fa-th-list"></i>  Contact</a>
                    </li>
                </ul>
                <a href="<?= base_url('main/login') ?>" class="btn btn-success">Login</a>
            </div>
        </div>
    </nav>
    <!--End Top Navigation Bar -->
 
    <!-- Wrapper -->
    <div class="wrapper my-4">
        <!-- Main Container -->
        <div class="main container">
        <?php if(!empty($session->getFlashdata('success_message'))): ?>
                <div class="alert alert-success rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('success_message') ?></div>
                        <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div>
                    </div>
                </div>
        <?php endif ?>
        <?php if(!empty($session->getFlashdata('error_message'))): ?>
                <div class="alert alert-danger rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('error_message') ?></div>
                        <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div>
                    </div>
                </div>
        <?php endif ?>