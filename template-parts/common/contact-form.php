<form class="contact-form" action="<?php echo esc_url(admin_url('admin-ajax.php')) ?>" method="post">
    <input type="hidden" name="action" value="ct-form">
    <div>
        <input type="text" name="navn" required>
        <label for="navn">Navn</label>
    </div>
    <div>
        <input type="text" name="telefon">
        <label for="telefon">Telefonnummer</label>
    </div>
    <div>
        <input type="email" name="email" required>
        <label for="email">Email</label>
    </div>
    <div>
        <textarea name="kommentar" required></textarea>
        <label for="kommentar">Kommentar</label>
    </div>
    <div>
        <input class="submit form-button success" type="submit" value="send">
    </div>
</form>