let cartSection = document.querySelector(".shopping-cart");
let checkoutSection = document.querySelector(".cart_shop");
let container = document.querySelector(".cont")
/* let cartElements = cartSection.querySelectorAll(":scope >div"); */

let cartInViewFlag = isInViewport(cartSection);
let checkoutFlag = isInViewport(checkoutSection);
/* let images = document.querySelectorAll(".perfume_img");
console.log(images)
images.forEach(item=>item.addEventListener('hover',function(){
    container.style.background = "url(`../images/feature${item.dataset.index}.png`)"
    console.log(item.getElementsByTagName('img'),item)
    

})) */

/* [...cartElements].forEach((item, index) => {
    item.style.visibility = "hidden";
}); */
checkoutSection.style.visibility = "hidden";
 if (cartInViewFlag) {
    cartSection.classList.add("cart-animation");
    console.log(cartSection);
    
}
if (checkoutFlag) {
    checkoutSection.classList.add("checkout-animation");
    checkoutSection.style.visibility = "visible";
}
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}
