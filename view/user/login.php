<?php include('view/layout/header.php') ?>

<div class="container-login-register">
    <h1 class="text-light text-center">PHP SCHEDULER</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="container mb-2 mt-2 bg-light p-4 rounded-3">
                    <form method="POST" id="form-login" action="login/validate">
                        <h3 class="text-center">Entrar</h3>
                        <div class="mb-3"><label class="form-label" for="email">Email: </label><input class="form-control" name="email" type="text" value="" /></div>
                        <div class="mb-3"><label class="form-label" for="password">Contrase&ntilde;a: </label><input class="form-control" name="password" type="password" /></div>
                        <div class="d-grid gap-2"><button class="btn btn-primary" type="submit">Entrar</button></div>
                    </form>

                    <a href="<?=base_url?>registro" class="d-block mt-2">Sino tienes una cuenta, puedes crear una!</a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

<?php include('view/layout/footer.php') ?>