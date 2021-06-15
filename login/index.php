<?php include_once "../partials/headerLogin.php"; ?>
    <main class="login">
        <h2 class="header">LOGIN</h2>
        <section class="login-form">
            <form action="authenticate.php" method="post">
                <label for="username">Username</label>
                <input type="text" class="" name="username" id="username" placeholder="" required>
                <label for="pswd">Password</label>
                <input type="password" class="" name="password" id="pswd" placeholder="" required>
                <input type="submit" class="submit">
            </form>
            <div class="login-options">
                <div>
                    <a href="../register">Don't have an account? <span>REGISTER</span></a>
                </div>
            </div>
        </section>
    </main>
    <div class="msg"></div>
    <script>
        let form = document.querySelector('.register form');
        form.onsubmit = function(event) {
            event.preventDefault();
            let form_data = new FormData(form);
            let xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onload = function () {
                document.querySelector('.msg').innerHTML = this.responseText;
                document.querySelector('.msg').classList.add('show');
                let close = document.querySelector('.close');
                close.addEventListener("click", function(){
                    document.querySelector('.msg').classList.remove('show');
                });
            };
            xhr.send(form_data);
        };
    </script>
<?php include_once '../partials/footer.php';


