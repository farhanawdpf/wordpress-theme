<h1>Student List</h1>
<?php
global $wpdb;
$table = $wpdb->prefix . "students";
if (isset($_GET['type']) && $_GET['type'] == 'delete') {
    $wpdb->delete($table, ['id' => $_GET['id']]);
?>
    <script>
        window.location.assign('<?php echo esc_url(admin_url('admin.php?page=student')); ?>')
    </script>
<?php
}
$data = $wpdb->get_results("select * from $table");
// echo "<pre>";
// print_r($data);
?>
<table border="1" class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $k => $d) { ?>
        <tr>
            <td><?php echo $k + 1 ?></td>
            <td><?php echo $d->name ?></td>
            <td><?php echo $d->email ?></td>
            <td><?php echo $d->phone ?></td>
            <td><a href="<?php echo esc_url(admin_url('admin.php?page=startup-form&type=delete&id=' . $d->id)); ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="save_student">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="submit" value="Save">
</form>