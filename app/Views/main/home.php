<?= $this->extend('layouts/layout_main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col ">
            <?= view('partials/resume', ['fa_icon' => 'far fa-chart-bar', 'title' => 'Sales', 'value' => '$173,00']) ?>
        </div>
        <div class="col ">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-handshake', 'title' => 'Business', 'value' => '120']) ?>
        </div>
        <div class="col ">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-hand-holding-usd', 'title' => 'Total', 'value' => '$1730,00']) ?>
        </div>

    </div>

    <div class="row pt-4 g-4">
        <div class="col">
            <?= view('partials/bar_chart',
                    [
                            'title' => 'Gráfico 2',
                            'uuid' => uniqid(),
                            'country' => 'BRASIL',
                            'values' => '100, 20, 190, 100, 160',
                            'chartColor' => 'rgba(22, 245, 22, .9)',
                            'years' => "'2020', '2021', '2022', '2023', '2024'"

                    ]
            ) ?>
        </div>
        <div class="col">
            <?= view('partials/area_chart',
                    [
                            'title' => 'Gráfico 2',
                            'uuid' => uniqid(),
                            'country' => 'BRASIL',
                            'values' => '100, 20, 190, 100, 160',
                            'chartColor' => 'rgba(22, 245, 22, .9)',
                            'years' => "'2020', '2021', '2022', '2023', '2024'"
                    ]
            ) ?>
        </div>
    </div>

    <div class="row pt-4 g-4">
        <div class="col">
            <?= view('partials/table',
                    [
                            'title' => 'Tabela',
                    ]
            ) ?>        </div>
    </div>

    <div class="row pt-4 g-4">

        <?= view('partials/messages') ?>

        <?= view('partials/calendar', [
                'title' => 'Calendar',
        ]) ?>

        <?= view('partials/todo_list', [
                'title' => 'Lista de tarefas',
        ])?>

    </div>

    <?= $this->endSection(''); ?>
