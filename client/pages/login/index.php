<?php include_once "../header.php" ?>

<link rel="stylesheet" href="../../../public/css/login.css">

</head>

<body class="overflow-x-hidden">

    <div class="hero bg-black vw-100 v-100 d-flex align-items-center justify-content-center overflow-x-hidden overflow-y-auto p-0">

        <form class="login-form d-flex flex-column justify-content-center align-items-center w-100"
            onsubmit="handleSignup(event)">
            <div class="card bg-dark p-4" style="max-width: 400px; width: 90%;">
                <div class="heading text-center mb-4">
                    <h1 class="text-white fs-1">Welcome back to <span class="text-info">SocioClub</span></h1>
                </div>
                <div class="fields w-100">
                    <label for="loginEmail" class="form-label text-white">Email</label>
                    <input type="email" name="loginEmail" id="emailID" class="form-control bg-dark p-2 text-white"
                        style="border: 0.2px solid gray; border-radius: 6px;">

                    <label for="loginPassword" class="form-label mt-3 text-white">Password</label>
                    <div class="position-relative">
                        <input type="password" name="loginPassword" id="pswd"
                            class="form-control bg-dark p-2 text-white"
                            style="border: 0.2px solid gray; border-radius: 6px; padding-right: 40px;">
                        <img src="../../../public/images/login/close-eye.png" alt="Toggle Password"
                            class="eye position-absolute" style="top: 50%; transform: translateY(-50%); right: 10px; cursor: pointer;"
                            id="togglePassword">
                    </div>

                    <div class="d-flex justify-content-end pt-2">
                        <a href="#" class="text-decoration-none text-secondary">Forgot Password?</a>
                    </div>

                    <div class="button mt-3">
                        <button class="btn btn-primary w-100" type="submit">LOGIN</button>
                    </div>
                </div>

                <div class="or d-flex align-items-center my-3">
                    <hr class="flex-grow-1 text-white">
                    <span class="text-white px-2">OR</span>
                    <hr class="flex-grow-1 text-white">
                </div>

                <div class="with-google text-center">
                    <button class="btn btn-dark d-flex align-items-center justify-content-center gap-2 w-100">
                        <img src="../../../public/images/login/google.png" alt="google"
                            style="width: 20px; height: 20px;">
                        <span class="text-white fw-bold">Login With Google</span>
                    </button>
                </div>
            </div>

            <div class="card bg-dark mt-3 py-3 text-center"
                style="max-width: 400px; width: 90%;">
                <h5 class="text-secondary mb-0">
                    Don't have an account?
                    <a href="../signup/" class="sign-up text-decoration-none text-white link-primary" style="cursor: pointer;">Sign Up</a>
                </h5>
            </div>
        </form>

    </div>

    <script src="../../../public/js/login.js"></script>

</body>

</html>
