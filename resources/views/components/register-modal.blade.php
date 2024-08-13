<style>
    .modal-fullscreen {
        max-width: none;
        margin: 0;
    }

    .modal-content {
        border: none;
        border-radius: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fdf8f5;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 1.5rem;
        color: #5a3e1b;
        text-decoration: none;
    }

    .modal-body {
        max-width: 400px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        /*justify-content: center;*/
    }

    .modal-body h2 {
        color: #5a3e1b;
        font-weight: bold;
    }

    .modal-body p {
        color: #5a3e1b;
    }

    .modal-body input {
        border: none;
        border-bottom: 1px solid #5a3e1b;
        background: none;
        width: 100%;
        margin-bottom: 20px;
        padding: 10px 0;
        font-size: 1rem;
        color: #5a3e1b;
    }

    .modal-body input:focus {
        outline: none;
        border-bottom: 1px solid #5a3e1b;
    }

    .modal-body .btn {
        background-color: #5a3e1b;
        color: #fff !important;
        border-radius: 0;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .modal-body .btn:hover {
        background-color: #3e2a1b;
    }

    .modal-body a {
        color: #5a3e1b;
        text-decoration: none;
    }

    .modal-body a:hover {
        text-decoration: underline;
    }
</style>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <a href="#" class="close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</a>
            <div class="modal-body">
                <h2>Crear usuario</h2>
                <form class="d-flex flex-column justify-content-start gap-3">
                    <div class="d-flex flex-column justify-content-start">
{{--                        <label for="Nombre">Nombre</label>--}}
                        <input type="text" id="Nombre" placeholder="Nombre" required>
                    </div>
                    <div class="d-flex flex-column justify-content-start">
{{--                        <label for="Apellido">Apellido</label>--}}
                        <input type="text" id="Apellido" placeholder="Apellido" required>
                    </div>
                    <div class="d-flex flex-column justify-content-start">
{{--                        <label for="Correo">Correo</label>--}}
                        <input type="email" id="Correo" placeholder="Correo" required>
                    </div>
                    <div class="d-flex flex-column justify-content-start">
{{--                        <label for="Clave">Clave</label>--}}
                        <input type="password" id="Clave" placeholder="Clave" required>
                    </div>
                    <div class="d-flex flex-column justify-content-start">
                        <button type="submit" class="btn btn-block">Enviar</button>
                    </div>
                    <p>
                        ¿Ya tienes un usuario? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="fw-bold">Entrar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
