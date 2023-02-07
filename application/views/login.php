<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <?= form_open('login/auth') ?>
            <h2 class="text-center">Connection</h2>
            <div class="mb-3"><input class="form-control" type="text" name="email" placeholder="Email"></div>
            <div class="mb-3"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><input class="form-control" type="password" name="mdp" placeholder="Password"></div><button class="btn btn-primary" type="submit">Log in</button>
        </form>
    </section>
    <script src="<?= BASEPATH ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>