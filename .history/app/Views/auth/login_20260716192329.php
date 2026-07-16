<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h3 class="text-center">

🔐 Web Security Incident Simulator

</h3>

</div>

<div class="card-body">

<?php if(session()->getFlashdata('error')) : ?>

<div class="alert alert-danger">

<?= session()->getFlashdata('error') ?>

</div>

<?php endif; ?>

<form action="<?= base_url('login') ?>" method="post">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button class="btn btn-primary w-100">

Login

</button>

</form>

</div>

</div>

</div>

</div>

<footer class="text-center py-3">
    <p class="mb-1">
        <strong>Web Security Incident Simulator</strong>
    </p>

    <small class="text-muted">
        © <?= date('Y') ?> Developed by
        <strong>Wahyu Eko Suroso</strong> (411222044)
    </small>

    <br>

    <small class="text-muted">
        Teknik Informatika - Universitas Dian Nusantara
    </small>
</footer>

<?= $this->endSection() ?>