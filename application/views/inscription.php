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
    <section class="register-photo">
        <div class="form-container">
            <?= form_open('signin/signin') ?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Name"></div>
                <div class="mb-3"><input class="form-control" type="text" name="mail" placeholder="Email"></div>
                <div class="mb-3"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
                <div class="mb-3">
                    <select name="" value="1" id="" class="form-control">
                        <object data="" type="">Vetement</object>
                        <object data="" type="">Auto-moto</object>
                        <object data="" type="">Construction</object>                        
                    </select> 
                </div>
                <div class="mb-3"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Sign Up</button></div><?= anchor('/', 'You already have an account? Login here.') ?>
            </form>
            <?= validation_errors() ?>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>