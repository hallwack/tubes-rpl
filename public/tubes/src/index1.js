const shoppingCart = (() => {
    // Private Methods and Properties
    cart = [];

    function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
    }

    function saveCart() {
        sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
    }

    function loadCart() {
        JSON.parse(sessionStorage.getItem("shoppingCart"));
        if (sessionStorage.getItem("shoppingCart") != null) loadCart();
    }

    // Public Methods and Properties
    let obj = {};

    obj.addItemToCart = (name, price, count) => {
        for (const item in cart) {
            if (cart[item].name === name) {
                cart[item].count++;
                saveCart();
                return;
            }
        }

        let item = new Item(name, price, count);
        cart.push(item);
        saveCart();
    };

    obj.setCountFromItem = (name, count) => {
        for (const i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
        }
    };

    obj.removeItemFromCart = (name) => {
        for (const item in cart) {
            if (cart[item].name === name) {
                cart[item].count--;
                if (cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    };

    obj.removeItemFromCartAll = (name) => {
        for (const item in cart) {
            if (cart[item].name === name) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart();
    };

    obj.clearCart = () => {
        cart = [];
        saveCart();
    };

    obj.totalCount = () => {
        let totalCount = 0;
        for (const item in cart) {
            totalCount += cart[item].count;
        }
        return totalCount;
    };

    obj.totalCart = () => {
        let totalCart = 0;
        for (const item in cart) {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    };

    obj.listCart = () => {
        let cartCopy = [];
        for (const i in cart) {
            item = cart[i];
            itemCopy = {};
            for (const j in item) {
                itemCopy[j] = item[j];
            }
            itemCopy, (total = Number(item.price * item.count).toFixed(2));
            cartCopy.push(itemCopy);
        }
        return cartCopy;
    };

    return obj;
})();

// Add Item
document.getElementById("add-to-cart").click((e) => {
    e.preventDefault();
    const name = this.dataset.name;
    const price = Number(this.dataset.price);
    shoppingCart.addItemToCart(name, price, 1);
    displayCart();
});

// Clear Items
// document.getElementById("clear-cart").click(() => {
//     shoppingCart.clearCart();
//     displayCart();
// });

// Delete Item Button
document.getElementById("show-cart").addEventListener(
    "click",
    (e) => {
        for (
            let target = e.target;
            target && target != this;
            target = target.parentNode
        ) {
            if (target.matches("#delete-item")) {
                ((e) => {
                    const name = this.dataset.name;
                    shoppingCart.removeItemFromCartAll(name);
                    displayCart();
                }).call(target, e);
                break;
            }
        }
    },
    false
);

// Delete 1 Item
document.getElementById("show-cart").addEventListener(
    "click",
    (e) => {
        for (
            let target = e.target;
            target && target != this;
            target = target.parentNode
        ) {
            if (target.matches("#minus-item")) {
                ((e) => {
                    const name = this.dataset.name;
                    shoppingCart.removeItemFromCart(name);
                    displayCart();
                }).call(target, e);
                break;
            }
        }
    },
    false
);

// Add 1 Item
document.getElementById("show-cart").addEventListener(
    "click",
    (e) => {
        for (
            let target = e.target;
            target && target != this;
            target = target.parentNode
        ) {
            if (target.matches("#plus-item")) {
                ((e) => {
                    const name = this.dataset.name;
                    shoppingCart.addItemToCart(name);
                    displayCart();
                }).call(target, e);
                break;
            }
        }
    },
    false
);

// Item Count Output
document.getElementById("show-cart").addEventListener(
    "change",
    (e) => {
        for (
            let target = e.target;
            target && target != this;
            target = target.parentNode
        ) {
            if (target.matches("#item-count")) {
                ((e) => {
                    const name = this.dataset.name;
                    const count = Number(this.value);
                    shoppingCart.setCountFromItem(name, count);
                    displayCart();
                }).call(target, e);
                break;
            }
        }
    },
    false
);

const displayCart = () => {
    const cartArray = shoppingCart.listCart();
    const totalCart = shoppingCart.totalCart();
    // const totalCount = shoppingCart().totalCount();
    let output = "";
    for (const i in cartArray) {
        output += ` <tr>
                        <td>${cartArray[i].name}</td>
                        <td>(${cartArray[i].price})</td>
                        <td>
                            <div class="input-group">
                                <button id="minus-item" class="input-group-addon btn btn-primary" data-name="${cartArray[i].name}"> - </button>
                                <input type="number" id="item-count" class="form-control" data-name="${cartArray[i].name}" value="${cartArray[i].count}" />
                                <button id="plus-item" class="input-group-addon btn btn-primary" data-name="${cartArray[i].name}"> + </button>                            
                            </div>
                        </td>
                        <td>
                            <button id="delete-cart" class="btn btn-danger" data-name="${cartArray[i].name}"> X </button>
                        </td> 
                        = 
                        <td>${cartArray[i].total}</td>
                    </tr>`;
        // output +=
        //     "<tr>" +
        //     "<td>" +
        //     cartArray[i].name +
        //     "</td>" +
        //     "<td>(" +
        //     cartArray[i].price +
        //     ")</td>" +
        //     "<td><div class='input-group'><button id='minus-item' class='input-group-addon btn btn-primary' data-name=" +
        //     cartArray[i].name +
        //     "> - </button>" +
        //     "<input type='number' id='item-count' class='form-control' data-name='" +
        //     cartArray[i].name +
        //     "' value='" +
        //     cartArray[i].count +
        //     "'>" +
        //     "<button id='plus-item' class='btn btn-primary input-group-addon' data-name=" +
        //     cartArray[i].name +
        //     "> + </button></div></td>" +
        //     "<td><button id='delete-cart' class='btn btn-danger' data-name=" +
        //     cartArray[i].name +
        //     ">X</button></td>" +
        //     " = " +
        //     "<td>" +
        //     cartArray[i].total +
        //     "</td>" +
        //     "</tr>";
    }
    document.getElementById("show-cart").innerHTML = output;
    document.getElementById("total-cart").innerHTML = totalCart.toString();
    // document.getElementById("total-count").innerHTML = totalCount.toString();
};

displayCart();
