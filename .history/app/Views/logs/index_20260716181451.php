<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Security Operation Center</h2>

<table class="table table-striped table-bordered">

<thead class="table-dark">

<tr>

<th>Time</th>

<th>Attack</th>

<th>Severity</th>

<th>Description</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<?php foreach($logs as $log): ?>

<tr>

<td><?= esc($log->created_at) ?></td>

<td><?= esc($log->attack_type) ?></td>

<td>

<?php

$color='secondary';

if($log->severity=='Critical') $color='danger';
elseif($log->severity=='High') $color='warning';
elseif($log->severity=='Medium') $color='primary';
elseif($log->severity=='Low') $color='success';

?>

<span class="badge bg-<?= $color ?>">

<?= esc($log->severity) ?>

</span>

</td>

<td><?= esc($log->description) ?></td>

<td><?= esc($log->status) ?></td>

</tr>

<?php endforeach ?>

</tbody>

</table>

<a href="<?= base_url('dashboard') ?>" class="btn btn-primary">

Dashboard

</a>

<?= $this->endSection() ?>