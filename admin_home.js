const formOpenBtn = document.querySelector("#addSupplier");  //Add supplier//
home = document.querySelector(".home");
formCloseBtn = document.querySelector(".form_close");

searchSupplierBtn = document.querySelector("#searchSupplier");  //Search supplier//
searchSupplierHome = document.querySelector(".searchSupplierHome");
searchSupplierCloseBtn = document.querySelector(".form_close_search_supplier");

addShopkeeperHome = document.querySelector(".add_shopkeeper_home"); //Add Shopkeeper//
addShopkeeperFormOpenBtn = document.querySelector("#add_shopkeeper_form_open");
addShopkeeperFormCloseBtn = document.querySelector(".form_close_add_shopkeeper");

searchShopkeeperBtn = document.querySelector("#searchShopkeeper");  //Search shopkeeper//
searchShopkeeperHome = document.querySelector(".search_shopkeeper_home");
searchShopkeeperCloseBtn = document.querySelector(".form_close_search_shopkeeper");


addProductHome = document.querySelector(".add_product_home"); //Add Product//
addproductFormOpenBtn = document.querySelector("#add_product_form_open");
addproductFormCloseBtn = document.querySelector(".form_close_add_product");


formOpenBtn.addEventListener("click",() => home.classList.add("show"));  //Add supplier//
formCloseBtn.addEventListener("click",() => home.classList.remove("show"));

searchSupplierBtn.addEventListener("click",() => searchSupplierHome.classList.add("show"));  //Search supplier//
searchSupplierCloseBtn.addEventListener("click",() => searchSupplierHome.classList.remove("show"));


addShopkeeperFormOpenBtn.addEventListener("click",() => addShopkeeperHome.classList.add("show"));  //Add Shopkeeper//
addShopkeeperFormCloseBtn.addEventListener("click",() => addShopkeeperHome.classList.remove("show"));

searchShopkeeperBtn.addEventListener("click",() => searchShopkeeperHome.classList.add("show"));  //Search shopkeeper//
searchShopkeeperCloseBtn.addEventListener("click",() => searchShopkeeperHome.classList.remove("show"));


addproductFormOpenBtn.addEventListener("click",() => addProductHome.classList.add("show"));  //Add Product//
addproductFormCloseBtn.addEventListener("click",() => addProductHome.classList.remove("show"));

