document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("themeToggle");
    const body = document.body;
    const formContainer = document.getElementById("formContainer");
    const inputs = document.querySelectorAll(".form-control");

    if (!formContainer) {
        console.error("Error: formContainer not found in the DOM.");
        return;
    }

    // Function to enable dark mode
    function enableDarkMode() {
        body.classList.add("bg-dark", "text-white");
        formContainer.classList.add("bg-dark", "text-white", "border-light");
        inputs.forEach((input) =>
            input.classList.add("bg-dark", "text-white", "border-light")
        );
        localStorage.setItem("theme", "dark");
    }

    // Function to enable light mode
    function enableLightMode() {
        body.classList.remove("bg-dark", "text-white");
        formContainer.classList.remove("bg-dark", "text-white", "border-light");
        inputs.forEach((input) =>
            input.classList.remove("bg-dark", "text-white", "border-light")
        );
        localStorage.setItem("theme", "light");
    }

    // Load theme preference from localStorage
    if (localStorage.getItem("theme") === "dark") {
        enableDarkMode();
        themeToggle.checked = true;
    }

    // Toggle theme on button click
    themeToggle.addEventListener("change", function () {
        if (this.checked) {
            enableDarkMode();
        } else {
            enableLightMode();
        }
    });
});

document.getElementById("themeToggle").addEventListener("change", function () {
    let icon = document.getElementById("themeIcon");
    icon.textContent = this.checked ? "☀️" : "🌙"; // Switch icon
    document.body.classList.toggle("bg-dark", this.checked);
    document.body.classList.toggle("text-white", this.checked);
});

$(document).ready(function () {
    // Custom method to check minimum age
    $.validator.addMethod(
        "minAge",
        function (value, element, minAge) {
            let birthDate = new Date(value);
            let today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            let monthDiff = today.getMonth() - birthDate.getMonth();

            if (
                monthDiff < 0 ||
                (monthDiff === 0 && today.getDate() < birthDate.getDate())
            ) {
                age--;
            }
            return age >= minAge;
        },
        "You must be at least 14 years old."
    );

    // Add regex validation method
    $.validator.addMethod(
        "regex",
        function (value, element, regexp) {
            let re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Invalid format"
    );

    // Apply validation to the actual <form>
    $("#form1").validate({
        rules: {
            firstName: {
                required: true,
                minlength: 3,
                maxlength: 30,
                regex: "^[a-zA-Z ]+$",
            },

            lastName: {
                minlength: 3,
                maxlength: 30,
                regex: "^[a-zA-Z ]+$",
            },

            userName: {
                required: true,
                minlength: 3,
                maxlength: 30,
                regex: "^[a-zA-Z0-9$&*\\-_]+$",
            },

            DOB: {
                // Match the name attribute exactly
                required: true,
                minAge: 14,
            },
        },

        messages: {
            firstName: {
                required: "First name is required",
                minlength: "At least 3 characters required",
                maxlength: "Cannot exceed 30 characters",
                regex: "Only letters and spaces are allowed",
            },

            lastName: {
                minlength: "At least 3 characters required",
                maxlength: "Cannot exceed 30 characters",
                regex: "Only letters and spaces are allowed",
            },

            userName: {
                required: "Username is required",
                minlength: "At least 3 characters required",
                maxlength: "Cannot exceed 30 characters",
                regex: "Only letters, numbers, and symbols ($, &, *, -, _) allowed",
            },

            DOB: {
                required: "Date of Birth is required",
                minAge: "You must be at least 14 years old.",
            },
        },

        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.after(error);
        },

        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },

        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        },
    });
});

$(document).ready(function () {
    // Banner Image Upload
    $("#editBanner").click(function () {
        $("#bannerInput").click();
    });

    $("#bannerInput").change(function (event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $("#bannerImage").attr("src", e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    // Profile Picture Upload
    $("#editProfile").click(function () {
        $("#profileInput").click();
    });

    $("#profileInput").change(function (event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $("#profileImage").attr("src", e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});
