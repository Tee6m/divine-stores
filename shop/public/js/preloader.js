var pre = document.querySelector(".pre");
console.log(pre);

window.addEventListener("load", vanish);

function vanish(){
    pre.classList.add("disappear");
}