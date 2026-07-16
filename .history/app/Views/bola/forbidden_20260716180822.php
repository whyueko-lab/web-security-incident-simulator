<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="alert alert-danger">

<h2>403 Forbidden</h2>

<hr>

Anda tidak memiliki hak untuk mengakses rekam medis ini.

</div>

<a href="<?= base_url('bola') ?>" class="btn btn-primary">

Kembali

</a>

<?= $this->endSection() ?>