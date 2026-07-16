<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1 class="mb-4">
    <i class="fa-solid fa-shield-halved"></i>
    Web Security Incident Simulator
</h1>

<h5 class="mb-4">
    Selamat Datang,
    <strong><?= session()->get('username'); ?></strong>
</h5>

<div class="row">

    <div class="col-md-3 mb-3">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Server</h5>
                <h2>🟢</h2>
                <p>Running</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Database</h5>
                <h2>🟢</h2>
                <p>Connected</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Firewall</h5>
                <h2>🟢</h2>
                <p>Active</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Attack Today</h5>
                <h2>0</h2>
                <p>Detected</p>
            </div>
        </div>
    </div>

</div>

<hr>

<h4 class="mb-3">Pilih Simulasi</h4>

<div class="row">

    <div class="col-md-4 mb-3">
        <a href="<?= base_url('sql') ?>" class="btn btn-danger w-100 p-4">
            💉 SQL Injection
        </a>
    </div>

    <div class="col-md-4 mb-3">
        <a href="<?= base_url('bola') ?>" class="btn btn-warning w-100 p-4">
            🔓 BOLA
        </a>
    </div>

    <div class="col-md-4 mb-3">
        <a href="<?= base_url('ransomware') ?>" class="btn btn-dark w-100 p-4">
            🔒 Ransomware
        </a>
    </div>

    <div class="col-md-6 mb-3">
        <a href="<?= base_url('backup') ?>" class="btn btn-success w-100 p-4">
            💾 Backup & Recovery
        </a>
    </div>

    <div class="col-md-6 mb-3">
        <a href="<?= base_url('logs') ?>" class="btn btn-info w-100 p-4">
            📄 Attack Logs
        </a>
    </div>

</div>

<?= $this->endSection() ?>