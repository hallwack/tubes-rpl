let carts = document.querySelectorAll("#add-to-cart");

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener("click", () => {
        cartNumbers();
    });
}

function cartNumbers() {
    let productNumbers = localStorage.getItem("cartNumbers");
    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
    } else {
        localStorage.setItem("cartNumbers", 1);
    }
}
