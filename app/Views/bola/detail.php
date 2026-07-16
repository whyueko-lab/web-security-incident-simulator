<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Medical Record</h2>

<div class="card">

<div class="card-body">

<h4><?= esc($patient->nama) ?></h4>

<p>

Diagnosa :

<b><?= esc($patient->diagnosa) ?></b>

</p>

<p>

Owner ID :

<?= esc($patient->owner_id) ?>

</p>

</div>

</div>

<div class="alert alert-warning mt-3">

<?php if($mode=="vulnerable"): ?>

Mode Vulnerable

<br>

Sistem tidak melakukan pengecekan hak akses sehingga data pasien lain dapat diakses hanya dengan mengubah ID pada URL.

<?php else: ?>

Mode Secure

<br>

Sistem memverifikasi bahwa data hanya dapat diakses oleh pemiliknya.

<?php endif ?>

</div>

<a href="<?= base_url('bola') ?>" class="btn btn-primary">

Kembali

</a>

<?= $this->endSection() ?>