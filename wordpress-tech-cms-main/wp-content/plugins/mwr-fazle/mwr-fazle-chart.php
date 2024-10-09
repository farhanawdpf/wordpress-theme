<?php
global $wpdb;
$mw = $wpdb->prefix . "material_wastage";
$rm = $wpdb->prefix . "raw_materials";
$data1 = $wpdb->get_results("SELECT mw.material_id as id, mw.quantity, mw.date, rm.name as mname, rm.price FROM $mw mw JOIN $rm rm ON mw.material_id=rm.id GROUP BY rm.id ORDER BY mw.date DESC LIMIT 5;");
$ttotal = $tsold = $tdump = $tremains = 0;
?>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {
            var data = google.visualization.arrayToDataTable([
                ['Material', 'Total', 'Sold', 'Dump', 'Reamining'],
                <?php
                if (!empty($data1)) {
                    foreach ($data1 as $k => $v) {
                        //material name
                        $matname = $v->mname;


                        //total
                        $mid = $v->id;
                        $twaste = $wpdb->get_row("SELECT SUM(quantity) as tw FROM $mw where material_id=$mid");
                        $totalw =  $twaste->tw;
                        //sold
                        $mws = $wpdb->prefix . "material_wastage_sale";
                        $qsumr = $wpdb->get_row("SELECT SUM(quantity) as ssum FROM $mws where material_id=$mid");
                        $sold =  $qsumr->ssum;
                        $tsold =+ $sold;
                        //dump
                        $mwd = $wpdb->prefix . "material_wastage_dump";
                        $dsumr = $wpdb->get_row("SELECT SUM(quantity) as dsum FROM $mwd where material_id=$mid");
                        $dump = $dsumr->dsum;
                        $tdump =+ $dump;
                        //Remaining
                        $remains = ($totalw - ($sold + $dump));
                        $tremains =+ $remains;
                ?>['<?php echo $matname ?>', <?php echo $totalw ?>, <?php echo $sold ?>, <?php echo $dump ?>, <?php echo $remains ?>],
                <?php }
                } ?>
            ]);

            var options = {
                chart: {
                    title: 'Material Wastage Report',
                    subtitle: 'Total, Sold, Dump, Remaining: 2024',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {
            var data = google.visualization.arrayToDataTable([
                ['Name', 'Number'],
                ['Sold', <?php echo $tsold ?>],
                ['Dump', <?php echo $tdump ?>],
                ['Remaining', <?php echo $tremains ?>],
            ]);

            var options = {
                title: 'Material Wastage Total',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>



</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div id="barchart_material" style="height: 500px;"></div>
        </div>
        <div class="col-md-6">
            <div id="piechart_3d" style="height: 500px;"></div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>