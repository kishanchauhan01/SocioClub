<?php include_once "../header.php" ?>

<link rel="stylesheet" href="../../../public/css/signUp.css">

</head>

<body>

    <div class="hero bg-black vw-100 vh-100 position-fixed overflow-y-auto d-flex justify-content-center">
        <form class="signUp-form container needs-validation overflow-y-auto" novalidate id="form1">
            <div class="card bg-dark p-4 mx-auto mt-3" style="max-width: 50rem;">
                <div class="heading mb-4">
                    <h1 class="text-white text-center fs-1">SignUp to <span class="text-info">SocioClub</span></h1>
                </div>

                <div class="fields">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="firstName" class="form-label text-white">First Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                        <div class="col-12 col-md-6">
                            <label for="lastName" class="form-label text-white">Last Name</label>
                            <input type="text" name="lastName" id="lastName" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-12 col-md-6">
                            <label for="userName" class="form-label text-white">User Name</label>
                            <input type="text" name="userName" id="userName" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                        <div class="col-12 col-md-6">
                            <label for="dob" class="form-label text-white">Date Of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-12">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" name="email" id="email" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px" required>

                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-12 col-md-6">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" name="password" id="password" class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                        <div class="col-12 col-md-6">
                            <label for="cPassword" class="form-label text-white">Confirm Password</label>
                            <input type="Password" name="cPassword" id="cPassword"
                                class="form-control bg-dark text-white"
                                style="border: 0.2px solid gray; border-radius: 6px">

                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                name="invalidCheck">
                            <label class="form-check-label text-white" for="invalidCheck">
                                Agree to terms and conditions
                            </label>

                        </div>
                    </div>

                    <div class="button mt-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <button class="btn btn-primary mb-3 mb-md-0 w-100 w-md-25 text-uppercase" type="submit">Create
                            account</button>
                        <h5 class="text-secondary text-center mt-2 mt-md-0">Already have an account? <a href="../login/"
                                class="sign-up fs-5 text-decoration-none text-white icon-link icon-link-hover link-primary">Login</a></h5>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../../../public/js/signUp.js"></script>


</body>

</html>