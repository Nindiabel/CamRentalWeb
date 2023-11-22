<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Form</title>
</head>
<body style="background-color: #F3EBEB;"> <!-- Set background color to #F3EBEB -->

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href="#">
        <img src="<?php echo e(asset('data_gambar/logo_rrc.jpg')); ?>" width="50" height="50" class="d-inline-block align-top" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login Admin</h2> <!-- Added title -->
            <form action="/proses-validasi-login" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <br>
                <button type="submit" class="btn btn-danger btn-block">Login</button>
            </form>
        </div>
    </div>
</div>

<?php if(session()->has('login_failed')): ?>
<script>
    alert("<?php echo e(session('login_failed')); ?>")
</script>
<?php endif; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php /**PATH C:\Users\asusb\cam_rental - Copy\cam_rental\resources\views/login.blade.php ENDPATH**/ ?>