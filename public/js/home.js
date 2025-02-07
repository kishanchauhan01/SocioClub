document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".posts-of-users").forEach((post) => {
        const description = post.querySelector(".post-description");
        const button = post.querySelector(".read-more-btn");

        button.addEventListener("click", function () {
            description.classList.toggle("expanded");

            // Toggle button text
            if (description.classList.contains("expanded")) {
                button.textContent = "Read Less";
            } else {
                button.textContent = "Read More";
            }
        });
    });
});
