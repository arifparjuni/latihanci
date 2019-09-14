<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <title><?= $judul; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="<?= base_url(); ?>">CRUDCI</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
    <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home</a>
    <a class="nav-item nav-link" href="#">Gallery</a>
    <a class="nav-item nav-link" href="<?= base_url('mahasiswa'); ?>">Data</a>
    <a class="nav-item nav-link" href="#">About</a>
</div>
</div>
</div>
</nav>