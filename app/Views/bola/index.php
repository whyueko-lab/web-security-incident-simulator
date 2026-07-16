<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>BOLA Simulator</h2>

<table class="table table-bordered">

<tr>

<th>ID</th>

<th>Nama</th>

<th>Mode Rentan</th>

<th>Mode Aman</th>

</tr>

<?php foreach($patients as $p): ?>

<tr>

<td><?= $p->id ?></td>

<td><?= $p->nama ?></td>

<td>

<a

class="btn btn-danger"

href="<?= base_url('bola/view/'.$p->id.'?mode=vulnerable')?>">

Vulnerable

</a>

</td>

<td>

<a

class="btn btn-success"

href="<?= base_url('bola/view/'.$p->id.'?mode=secure')?>">

Secure

</a>

</td>

</tr>

<?php endforeach ?>

</table>

<?= $this->endSection() ?>