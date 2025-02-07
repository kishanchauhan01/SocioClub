// async function handleSignup(event) {
//     console.log("hi");
//     event.preventDefault(); // Prevent form from refreshing the page

//     const form = event.target;
//     const formData = new FormData(form); // Collect form data

//     try {
//         const response = await fetch("/socioclub/server/login.php", {
//             method: "POST",
//             body: formData,
//         });

//         const result = await response.text(); // Handle response from PHP
//         alert(result); // Display the response (success or error)
//     } catch (error) {
//         console.error("Error:", error);
//         alert("An error occurred while signing up.");
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

