<div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0"> <?= $title ?> </h6>
        <a href="#"> Show All</a>
    </div>
    <canvas
            id="<?= $uuid ?>"
            style="display: block; box-sizing: border-box; height: 255px; width: 511px;"
            width="511"
            height="255">
    </canvas>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        var ctx_bar = $("#<?= $uuid ?>").get(0).getContext("2d");
        var myChart1 = new Chart(ctx_bar, {
            type: "bar",
            data: {
                labels: [<?= $years ?>],
                datasets: [{
                label: "<?= $country ?>",
                    data: [ <?= $values ?>],
                    backgroundColor: "<?= $chartColor ?>"
                }
                ]
            },
            options: {
                responsive: true
            }
        });
    });
</script>