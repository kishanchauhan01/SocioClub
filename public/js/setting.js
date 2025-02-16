//! Side bar
const hamburger = document.querySelector(".hamburger");
const sidebar = document.getElementById("sidebar");

// Toggle sidebar visibility when hamburger is clicked
hamburger.addEventListener("click", () => {
    sidebar.classList.toggle("hidden");
    if (!sidebar.classList.contains("hidden")) {
        hamburger.style.display = "none"; // Hide hamburger when sidebar is visible
    }
});

// Close sidebar when clicking outside of it
document.addEventListener("click", (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnHamburger = hamburger.contains(event.target);

    // If the click is outside the sidebar and not on the hamburger, hide the sidebar
    if (window.innerWidth < 768) {
        // Tailwind's 'md' breakpoint is 768px
        if (!isClickInsideSidebar && !isClickOnHamburger) {
            sidebar.classList.add("hidden"); // Hide the sidebar
            hamburger.style.display = "block"; // Show the hamburger again
        }
    }
});

//! Security
const toggle = document.getElementById("toggle");
const toggleLabel = document.getElementById("toggle-label");
let isOn = false;

toggle.addEventListener("click", () => {
    isOn = !isOn;
    toggle.classList.toggle("bg-blue-600", isOn);
    toggle.classList.toggle("bg-gray-300", !isOn);
    toggleLabel.textContent = isOn ? "On" : "Off";
    const circle = toggle.querySelector(".toggle-circle");
    circle.style.transform = isOn ? "translateX(100%)" : "translateX(0)";
});

//! Privacy
function selectOption(option) {
    const privateButton = document.getElementById("privateButton");
    const publicButton = document.getElementById("publicButton");
    const lockIcon = document.getElementById("lockIcon");
    const humanIcon = document.getElementById("humanIcon");

    if (option === "private") {
        privateButton.classList.add("bg-blue-500", "text-white");
        privateButton.classList.remove("hover:bg-gray-400");
        publicButton.classList.remove("bg-blue-500", "text-white");
        publicButton.classList.add("hover:bg-gray-400");
        lockIcon.classList.remove("hidden");
        humanIcon.classList.add("hidden");
    } else {
        publicButton.classList.add("bg-blue-500", "text-white");
        publicButton.classList.remove("hover:bg-gray-400");
        privateButton.classList.remove("bg-blue-500", "text-white");
        privateButton.classList.add("hover:bg-gray-400");
        humanIcon.classList.remove("hidden");
        lockIcon.classList.add("hidden");
    }
}

// Set default selection to public
selectOption("public");

//! js for click and show
function showContent(section) {
    // Hide all content items
    const items = document.querySelectorAll(".content-item");
    items.forEach((item) => {
        item.classList.add("hidden");
    });

    // Show the selected content item
    const selectedItem = document.getElementById(section);
    if (selectedItem) {
        selectedItem.classList.remove("hidden");
    }
}
