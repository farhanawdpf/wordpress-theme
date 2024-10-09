<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
    <input type="hidden" name="action" value="save_contact">
    <input type="hidden" name="test_nonce" value="<?php echo wp_create_nonce('test_nonce') ?>">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <textarea name="msg" id="" cols="30" rows="10"></textarea>
    <input type="submit"  value="Save">
</form>