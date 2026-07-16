<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Backup & Disaster Recovery</h2>

<?php if(session()->getFlashdata('success')): ?>

<div class="alert alert-success">

<?= session()->getFlashdata('success') ?>

</div>

<?php endif; ?>

<div class="row mb-4">

<div class="col-md-6">

<div class="card">

<div class="card-body">

<h5>Recovery Target</h5>

<table class="table">

<tr>
<th>RTO</th>
<td>2 Jam</td>
</tr>

<tr>
<th>RPO</th>
<td>15 Menit</td>
</tr>

<tr>
<th>Backup Status</th>
<td>🟢 Ready</td>
</tr>

</table>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card">

<div class="card-body">

<form action="<?= base_url('backup/create') ?>" method="post">

<button class="btn btn-primary w-100">

💾 Create Backup

</button>

</form>

<br>

<form action="<?= base_url('backup/restore') ?>" method="post">

<button class="btn btn-success w-100">

♻ Restore Backup

</button>

</form>

</div>

</div>

</div>

</div>

<h4>Backup History</h4>

<table class="table table-bordered">

<thead>

<tr>

<th>No</th>

<th>Backup File</th>

<th>Date</th>

<th>Size</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($history as $h): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= esc($h->backup_name) ?></td>

<td><?= esc($h->backup_date) ?></td>

<td><?= esc($h->backup_size) ?></td>

<td>

<span class="badge bg-success">

<?= esc($h->status) ?>

</span>

</td>

</tr>

<?php endforeach ?>

</tbody>

</table>

<a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">

Kembali ke Dashboard

</a>

<?= $this->endSection() ?>