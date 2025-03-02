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

// Sample static search data
const searchData = [
    "Home Page",
    "Notifications",
    "Messages",
    "User Profile",
    "Settings",
    "Explore People",
    "Trending Posts",
    "Privacy Policy",
    "Help Center",
];

function performSearch() {
    let query = document.getElementById("searchInput").value.toLowerCase();
    let resultsContainer = document.getElementById("searchResults");
    resultsContainer.innerHTML = ""; // Clear previous results

    if (query.trim() !== "") {
        let filteredResults = searchData.filter((item) =>
            item.toLowerCase().includes(query)
        );

        if (filteredResults.length > 0) {
            filteredResults.forEach((result) => {
                let li = document.createElement("li");
                li.className =
                    "list-group-item bg-dark text-white border-0 py-2";
                li.innerHTML = `<a href="#" class="text-decoration-none text-white">${result}</a>`;
                resultsContainer.appendChild(li);
            });
        } else {
            resultsContainer.innerHTML = `<li class="list-group-item bg-dark text-secondary border-0 py-2">No results found</li>`;
        }
    }
}
