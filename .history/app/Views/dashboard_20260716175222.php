<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1 class="mb-4">

<i class="fa-solid fa-shield-halved"></i>

Web Security Incident Simulator

</h1>

<div class="row">

<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h5>Server</h5>

<h2>🟢</h2>

Running

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h5>Database</h5>

<h2>🟢</h2>

Connected

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h5>Firewall</h5>

<h2>🟢</h2>

Active

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h5>Attack</h5>

<h2>0</h2>

Today

</div>

<h4>Selamat Datang,
<?= session()->get('username'); ?>

</h4>

<hr>

<div class="row">

<div class="col-md-4">

<a href="/sql" class="btn btn-danger w-100">

SQL Injection

</a>

</div>

<div class="col-md-4">

<a href="/bola" class="btn btn-warning w-100">

Broken Object Level Authorization

</a>

</div>

<div class="col-md-4">

<a href="/logout" class="btn btn-secondary w-100">

Logout

</a>

</div>

</div>

</div>

</div>

</div>

<?= $this->endSection() ?>