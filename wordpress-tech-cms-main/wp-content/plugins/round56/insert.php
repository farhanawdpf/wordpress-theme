<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="save_student">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="submit" value="Save">
</form>