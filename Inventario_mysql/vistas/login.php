<div class="main-container">
    <form action="" method="POST" class="box login" autocomplete="off">
        <h5 class="title is-5 has-text-centered is uppercase">Sistema de Inventario</h5>
        
        <div class="field">
            <label for="" class="label">Usuario</label>
            <div class="control">
                <input type="text" name="login_usuario" id="" class="input"
                pattern="[a-zA-Z0-9_]{4,20}" maxlength="20" required>
            </div>
        </div>

        <div class="field">
            <label for="" class="label">Clave</label>
            <div class="control">
                <input type="password" class="input" name="login_clave"
                pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
            </div>
        </div>

        <p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="button is-info is-rounded">Iniciar Sesion</button>
        </p>
        <?php
            if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                require_once ("php/main.php");
                require_once ("php/inicio_sesion.php");
            }
        ?>
    </form>
</div>