<?php include('layout/header.php') ?>

<div class="container-fluid container-login">
    <h1 class="text-light text-center">PHP SCHEDULER</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container mb-2 mt-2 bg-light p-4 rounded-3">
                <form method="POST" id="form-login">
                    <h3 class="text-center">Registrarse</h3>

                    <div class="mb-3">
                        <label class="form-label" for="name">Usuario: </label>
                        <input class="form-control" name="name" type="text" value="" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email: </label>
                        <input class="form-control" name="email" type="email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contrase&ntilde;a: </label>
                        <input class="form-control" name="password" type="password" />
                    </div>

                    <div class="d-grid gap-2"><button class="btn btn-primary" type="submit">Entrar</button></div>
                </form>

                <a href="<?=base_url?>" class="d-block mt-2">¿Ya tienes una cuenta?</a>
            </div>
        </div>
    </div>
</div>

<?php include('layout/footer.php') ?>