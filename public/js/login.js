// async function handleSignup(event) {
//     event.preventDefault(); // Prevent form from submitting traditionally

//     const email = document.getElementById("emailID").value.trim();
//     const password = document.getElementById("pswd").value.trim();

//     if (!email || !password) {
//         alert("Please enter both email and password!");
//         return;
//     }

//     const formData = new FormData();
//     formData.append("loginEmail", email);
//     formData.append("loginPassword", password);

//     try {
//         const response = await fetch("../../../server/login.php", {
//             method: "POST",
//             body: formData,
//         });

//         const result = await response.json();
//         console.log("Server Response:", result);

//         if (result.status === "success") {
//             window.location.href = result.redirect.replace(/\\/, ""); // Remove escape slashes
//         } else {
//             alert(result.message); // Show error message
//         }
//     } catch (error) {
//         console.error("Error:", error);
//         alert("Something went wrong. Please try again.");
//     }
// }

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#pswd");

togglePassword.addEventListener("click", () => {
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    if (togglePassword.src.includes("close-eye.png")) {
        togglePassword.src = "../../../public/images/login/eye.png";
    } else {
        togglePassword.src = "../../../public/images/login/close-eye.png";
    }
});
