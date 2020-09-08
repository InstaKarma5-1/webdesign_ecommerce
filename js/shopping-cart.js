let decreaseButtons = document.getElementsByClassName("shopping-cart-decrease-button");
let increaseButtons = document.getElementsByClassName("shopping-cart-increase-button");
let priceArray = document.getElementsByClassName("shopping-cart-item-price");
let quantityArray = document.getElementsByClassName("shopping-cart-quantity-value");
let totalPrice = parseFloat(document.getElementById("shopping-cart-total-value").innerHTML);

// Assign event listener to all buttons for each individual cart item
for (let i = 0; i < decreaseButtons.length ; i++) {
    decreaseButtons[i].addEventListener("click", function() {decrement(i)});
}

for (let i = 0; i < increaseButtons.length ; i++) {
    increaseButtons[i].addEventListener("click", function() {increment(i)});
}


function decrement(i) {
    let quantity = decreaseButtons[i].nextElementSibling.innerHTML;
    if (quantity > 1) {
        quantity--;
        decreaseButtons[i].nextElementSibling.innerHTML = quantity;
        updateTotal(i);
    }
}

function increment(i) {
    let quantity = increaseButtons[i].previousElementSibling.innerHTML;
    if (quantity < 69) {
        quantity++;
        increaseButtons[i].previousElementSibling.innerHTML = quantity;
        updateTotal(i);
    }
}

function updateTotal(i) {
    for (let i = 0; i < priceArray.length ; i++) {
        totalPrice = parseFloat(priceArray[i].innerHTML) * parseInt(quantityArray[i].innerHTML);   //this code-o is subarashi
    }
    console.log("Total price is RM" + totalPrice);
}