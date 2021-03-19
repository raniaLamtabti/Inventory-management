<?php
$cssLink = "../../../../public/scss/dashboard.css";
$title = "Dashboard";
$active= "dashboard";
?>

<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<main>
    <section class="dashboard">
        <div class="analytics">
            <div class="analytic">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#product" />
                </svg>
                <div class="content">
                    <h5 class="smallText">products</h5>
                    <p class="smallTitle">120</p>
                </div>
            </div>
            <div class="analytic">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#store-1" />
                </svg>
                <div class="content">
                    <h5 class="smallText">products</h5>
                    <p class="smallTitle">120</p>
                </div>
            </div>
            <div class="analytic">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#e-learning" />
                </svg>
                <div class="content">
                    <h5 class="smallText">products</h5>
                    <p class="smallTitle">120</p>
                </div>
            </div>
        </div>
        <div class="conetnt">
            <div class="chart">
                <select name="" id="" class="inputs">
                    <option value="">Store 1</option>
                    <option value="">Store 2</option>
                    <option value="">Store 3</option>
                    <option value="">Store 4</option>
                    <option value="">Store 5</option>
                </select>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </section>
    <?php include_once '../../../include/navbar.php';?>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['Product 1', 'Product 2', 'Product 3', 'Product 4', 'Product 5', 'Product 6', 'Product 7'],
            datasets: [{
                label: 'Products',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

<?php include_once '../../../include/htmlEnd.php';?>