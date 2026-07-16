<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>SQL Injection Simulator</h2>

<form action="<?= base_url('sql/process') ?>" method="post">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="text" name="password" class="form-control">
</div>

<div class="mb-3">

<label>Mode</label>

<select name="mode" class="form-select">

<option value="vulnerable">Vulnerable</option>

<option value="secure">Secure</option>

</select>

</div>

<button class="btn btn-danger">

Simulasikan

</button>

</form>

<?= $this->endSection() ?>