document.addEventListener("DOMContentLoaded", () => {
    const cookiesDetails = {
        "choco-chip": {
            name: "Chocolate Chip Cookies",
            description: "A classic cookie filled with delicious chocolate chips.",
            ingredients: ["Flour", "Sugar", "Butter", "Eggs", "Chocolate Chips"]
        },
        "milky-orange": {
            name: "Milky Orange Cookies",
            description: "Soft and creamy cookies with a hint of orange.",
            ingredients: ["Flour", "Milk", "Butter", "Orange Zest", "Sugar"]
        },
        "heart-sugar": {
            name: "Heart Sugar Cookies",
            description: "Cute heart-shaped cookies with a sweet sugar glaze.",
            ingredients: ["Flour", "Butter", "Sugar", "Vanilla", "Food Coloring"]
        }
    };

    const modal = document.getElementById("details-modal");
    const modalContent = {
        name: document.getElementById("cookie-name"),
        description: document.getElementById("cookie-description"),
        ingredients: document.getElementById("cookie-ingredients")
    };
    const closeBtn = modal.querySelector(".close-btn");


    document.querySelectorAll(".view-details-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const cookieKey = btn.dataset.cookie;
            const details = cookiesDetails[cookieKey];

            if (details) {
                // Update isi modal
                modalContent.name.textContent = details.name;
                modalContent.description.textContent = details.description;

                // Bersihkan dan tambahkan bahan ke dalam daftar
                modalContent.ingredients.innerHTML = "";
                details.ingredients.forEach(ingredient => {
                    const li = document.createElement("li");
                    li.textContent = ingredient;
                    modalContent.ingredients.appendChild(li);
                });

                modal.style.display = "block";
            }
        });
    });

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
