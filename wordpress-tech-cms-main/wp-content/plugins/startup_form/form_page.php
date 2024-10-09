<?php
global $wpdb;
$table = $wpdb->prefix . "startup_fazle";
if (isset($_GET['type']) && $_GET['type'] == 'delete') {
    $wpdb->delete($table, ['id' => $_GET['id']]);
}
?>

<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <br>
    <div class="row">
        <?php
        if (isset($_GET['type']) && $_GET['type'] == 'update') {
            $table = $wpdb->prefix . "startup_fazle";
            $edata = $wpdb->get_row("select * from $table where id=" . $_GET['id']);
        ?>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <input type="hidden" name="action" value="update_fazle">
                        <input type="hidden" name="id" value="<?php echo $edata->id ?>">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input value="<?php echo $edata->name ?>" name="name" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input value="<?php echo $edata->email ?>" name="email" type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option <?php selected('Custom Software Development', $edata->service); ?> value="Custom Software Development">Custom Software Development</option>
                                    <option <?php selected('IT Consulting and Support', $edata->service); ?> value="IT Consulting and Support">IT Consulting and Support</option>
                                    <option <?php selected('Cloud Computing Services', $edata->service); ?> value="Cloud Computing Services">Cloud Computing Services</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"><?php echo $edata->message ?></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <input type="hidden" name="action" value="form_fazle">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input name="name" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input name="email" type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="Custom Software Development">Custom Software Development</option>
                                    <option value="IT Consulting and Support">IT Consulting and Support</option>
                                    <option value="Cloud Computing Services">Cloud Computing Services</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        global $wpdb;
        $table = $wpdb->prefix . "startup_fazle";
        $data = $wpdb->get_results("select * from $table");
        ?>
        <div class="col-lg-6">
            <table class="table table-info table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $i => $d) { ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><?php echo $d->name ?></td>
                            <td><?php echo $d->email ?></td>
                            <td><?php echo $d->service ?></td>
                            <td><?php echo $d->message ?></td>
                            <td><a class="btn btn-danger" href="<?php echo esc_url(admin_url('admin.php?page=startup-form&type=delete&id=' . $d->id)); ?>">Delete</a><br><a class="btn btn-success" href="<?php echo esc_url(admin_url('admin.php?page=startup-form&type=update&id=' . $d->id)); ?>">Update</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</footer>

</html>