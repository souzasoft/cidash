<?= $this->extend('layouts/layout_main') ?>
<?= $this->section('content') ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'far fa-chart-bar',
                                            'title' => 'Sales',
                                            'value' => 'R$ 19.245']) ?>
        </div>
        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-chart-area',
                                            'title' => 'Comissions',
                                            'value' => 'R$ 945']) ?>
        </div>
        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-chart-line',
                                            'title' => 'Expenses',
                                            'value' => 'R$ 5.123']) ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>