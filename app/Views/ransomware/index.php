<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Ransomware Simulator</h2>

<div class="row">

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h5>Server</h5>

<?php if(session('server')=="Running"): ?>

<h2>🟢</h2>

<?php else: ?>

<h2>🔴</h2>

<?php endif; ?>

<?= session('server') ?>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h5>Database</h5>

<?php if(session('database')=="Connected"): ?>

<h2>🟢</h2>

<?php else: ?>

<h2>🔴</h2>

<?php endif; ?>

<?= session('database') ?>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h5>Backup</h5>

<h2>🟢</h2>

Available

</div>

</div>

</div>

</div>

<hr>

<?php if(!session('attack')): ?>

<form action="<?= base_url('ransomware/attack') ?>" method="post">

<button class="btn btn-danger btn-lg">

🚨 Launch Ransomware

</button>

</form>

<?php else: ?>

<div class="alert alert-danger">

<h3>

Database telah terenkripsi.

</h3>

Seluruh layanan berhenti beroperasi.

</div>

<form action="<?= base_url('ransomware/restore') ?>" method="post">

<button class="btn btn-success btn-lg">

💾 Restore Backup

</button>

</form>

<?php endif ?>

<hr>

<h3>Recovery Target</h3>

<table class="table table-bordered">

<tr>

<th>RTO</th>

<td>2 Jam</td>

</tr>

<tr>

<th>RPO</th>

<td>15 Menit</td>

</tr>

</table>

<a href="<?= base_url('dashboard') ?>" class="btn btn-primary">

Dashboard

</a>

<?= $this->endSection() ?>