<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Hasil Simulasi</h2>

<div class="alert alert-info">

<b>Mode :</b>

<?= $mode ?>

</div>

<div class="card">

<div class="card-body">

<b>Query:</b>

<pre><?= esc($sql) ?></pre>

</div>

</div>

<br>

<?php if($result): ?>

<div class="alert alert-success">

<h4>LOGIN BERHASIL</h4>

User :

<?= esc($result->username) ?>

Role :

<?= esc($result->role) ?>

</div>

<?php else: ?>

<div class="alert alert-danger">

Login Gagal

</div>

<?php endif; ?>

<a href="<?= base_url('sql') ?>"
class="btn btn-primary">

Kembali

</a>

<?= $this->endSection() ?>