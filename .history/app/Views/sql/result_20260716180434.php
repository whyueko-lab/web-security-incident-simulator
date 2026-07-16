<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Hasil Simulasi SQL Injection</h2>

<div class="alert alert-primary">

<b>Mode :</b> <?= ucfirst($mode) ?>

</div>

<div class="card mb-3">

<div class="card-header">

Query SQL

</div>

<div class="card-body">

<pre><?= esc($query) ?></pre>

</div>

</div>

<div class="alert alert-success">

<b>Status :</b>

<?= esc($status) ?>

</div>

<div class="alert alert-warning">

<b>Penjelasan</b>

<br>

<?= esc($message) ?>

</div>

<div class="alert alert-info">

<b>Mitigasi</b>

<br>

<?= esc($mitigation) ?>

</div>

<a href="<?= base_url('sql') ?>" class="btn btn-primary">

Coba Lagi

</a>

<?= $this->endSection() ?>