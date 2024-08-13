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
        justify-content: center;
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

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <a href="#" class="close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</a>
            <div class="modal-body">
                <h2>Log In</h2>
                <form class="d-flex flex-column justify-content-start gap-3">
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Password" required>
                    <a href="#">Forgot password?</a>
                    <div>
                        <button type="submit" class="btn btn-block">Log In</button>
                    </div>
                    <p>
                        Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" class="fw-bold">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
