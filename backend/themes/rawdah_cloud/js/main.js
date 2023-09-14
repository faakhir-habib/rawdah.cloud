
  document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("dropdownBtn");
    const dropdownContent = document.getElementById("dropdownContent");

    dropdown.addEventListener("mouseenter", function () {
        dropdownContent.style.display = "block";
    });

    dropdown.addEventListener("mouseleave", function () {
        dropdownContent.style.display = "none";
    });
});