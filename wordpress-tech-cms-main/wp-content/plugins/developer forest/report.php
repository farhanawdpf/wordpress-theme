<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <div class="h2 container" style="color: white; background:blue;margin-top:10px;">Stock Details</div>
        <!-- Default box -->
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-success table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th>date</th>
                            <th>Total purchase</th>
                            <th>Wastage</th>
                            <th>Return to Supplier</th>
                            <th>Stock in </th>
                            <th>Stock out</th>
                            <th>Closing Stock</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $ostock = 0;
                        $sreturn = 0;
                        $mwastage = 0;

                        $today=date("Y-m-d");
                        $convert = strtotime($today);

                        $tomorrow=strtotime('+1 day', $convert);
                        for($i=0;$i<30;$i++) {
                            $tomorrow= strtotime('-1 day', $tomorrow);
                            $date=date('Y-m-d', $tomorrow);
                        ?>
                            <tr>
                                <td>
                                    <?php echo $date ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                                <td>
                                    <?php ?>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>