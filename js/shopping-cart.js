decreaseButtons = document.getElementsByClassName("shopping-cart-decrease-button");
increaseButtons = document.getElementsByClassName("shopping-cart-increase-button");
deleteButtons = document.getElementsByClassName("shopping-cart-delete-button");
shoppingCartItems = document.getElementsByClassName("shopping-cart-item");
horizontalRules = document.getElementsByClassName("shopping-cart-horizontal-rule");
priceArray = document.getElementsByClassName("shopping-cart-item-price");
quantityArray = document.getElementsByClassName("shopping-cart-quantity-value");
totalPrice = parseFloat(document.getElementById("shopping-cart-total-value").innerHTML);

stackoverflow = "https://stackoverflow.com/questions/256754/how-to-pass-arguments-to-addeventlistener-listener-function";
alert(stackoverflow);

updateElements();
updateTotal();

function updateElements() {
    if(shoppingCartItems.length != 0 ){
        // Remove event listener to all buttons for each individual cart item
        for (let i = 0; i < decreaseButtons.length ; i++) {
            decreaseButtons[i].removeEventListener("click", decrement); //parameter is i for each function
            increaseButtons[i].removeEventListener("click", increment);
            deleteButtons[i].removeEventListener("click", remove);
        }
    }  

    if(shoppingCartItems.length != 0 ){
        // Assign event listener to all buttons for each individual cart item
        for (let i = 0; i < decreaseButtons.length ; i++) {
            decreaseButtons[i].addEventListener("click", decrement);
            increaseButtons[i].addEventListener("click", increment);
            deleteButtons[i].addEventListener("click", remove);
        }
    }   
}

function decrement(i) {
    event.currentTarget.my
    let quantity = decreaseButtons[i].nextElementSibling.innerHTML;
    if (quantity > 1) {
        quantity--;
        decreaseButtons[i].nextElementSibling.innerHTML = quantity;
        updateTotal();
    }
}

function increment(i) {
    let quantity = increaseButtons[i].previousElementSibling.innerHTML;
    if (quantity < 69) {
        quantity++;
        increaseButtons[i].previousElementSibling.innerHTML = quantity;
        updateTotal();
    }
}

function remove(i) {
    let confirmRemove = confirm("Are you sure you want to remove this item from the cart?");
    console.log("I is " + i);
    if(confirmRemove){
        shoppingCartItems[i].remove();
        horizontalRules[i].remove();
        updateElements();
    }
    updateTotal();
}

function updateTotal() {
    totalPrice = 0;
    for (let i = 0; i < priceArray.length ; i++) {
        totalPrice += parseFloat(priceArray[i].innerHTML) * parseInt(quantityArray[i].innerHTML);
    }
    document.getElementById("shopping-cart-total-value").innerHTML = totalPrice.toFixed(2);
}

