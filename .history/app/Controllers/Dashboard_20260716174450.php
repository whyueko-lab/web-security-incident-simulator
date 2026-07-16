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

</div>

</div>

</div>

<?= $this->endSection() ?>