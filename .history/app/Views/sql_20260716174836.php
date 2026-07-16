<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Simulasi SQL Injection</h2>

<form action="<?= base_url('sql/login') ?>" method="post">

<div class="mb-3">

<label>Username</label>

<input type="text"
class="form-control"
name="username">

</div>

<div class="mb-3">

<label>Password</label>

<input type="text"
class="form-control"
name="password">

</div>

<div class="mb-3">

<label>Mode</label>

<select name="mode" class="form-select">

<option value="vulnerable">
Vulnerable
</option>

<option value="secure">
Secure
</option>

</select>

</div>

<button class="btn btn-danger">

Login

</button>

</form>

<?= $this->endSection() ?>