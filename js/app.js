//Mobile Menu Toggle

const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const menu = document.querySelector(".mobile-menu");
const openBtnIcon = document.querySelector(".fa-bars");
const closeBtnIcon = document.querySelector(".fa-times");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = menu.getBoundingClientRect().height;
  closeBtnIcon.classList.toggle("hide");
  openBtnIcon.classList.toggle("hide");

  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
});

/*Add classes to .menu-item li*/
const mainMenu = document.querySelector("#menu-main-navigation");
const menuItem = mainMenu.children;
const menuItemArr = Array.from(menuItem);
function addItemClass(item, index) {
  item.classList.add(`my-menu-item-${index}`);
}
menuItemArr.forEach(addItemClass);

/*Add classes to .sub-menu ul*/
const subMenu = document.querySelectorAll(".sub-menu");
const subMenuItems = Array.from(subMenu);

function addClass(item, index) {
  item.classList.add(`my-sub-menu-item-${index}`);
}
subMenuItems.forEach(addClass);

//Replace '.sub-menu' class in mobile nav with '.mobile-sub-nav to make styling them easier
const mobileMenu = document.querySelector(".mobile-menu");
const mobileSubMenu = mobileMenu.querySelectorAll(".sub-menu");
const mobileMenuItemArr = Array.from(mobileSubMenu);
function replaceMobileClassName(item) {
  item.classList.replace("sub-menu", "mobile-sub-menu");
}
mobileMenuItemArr.forEach(replaceMobileClassName);

//append font awsome icon after top level menu items on mobile
const menuParentLink = document.querySelectorAll(
  ".mobile-menu-container .mobile-sub-menu"
);

function insertBefore(el, referenceNode) {
  referenceNode.parentNode.insertBefore(el, referenceNode);
}

//***************************************************/
//VERSION 2 of Mobile Dropdown
//************************************************* */

//add a link and font awsome icons as btn for opening and closing sub nav
menuParentLink.forEach((item) => {
  const openBtn = document.createElement("a");
  const iconPlus = document.createElement("i");
  iconPlus.className = "fa fa-plus";
  openBtn.className = "open";
  openBtn.appendChild(iconPlus);
  insertBefore(openBtn, item);
  const iconMinus = document.createElement("i");
  iconMinus.className = "fa fa-minus";
  iconMinus.classList.add("hide");
  openBtn.appendChild(iconMinus);
});

//variables
const openBtns = document.querySelectorAll(".open");
const mobileDropDown = document.querySelectorAll(".mobile-sub-menu");
const menuSubItem = document.querySelectorAll(".menu-item-has-children");
const iconOpen = document.querySelectorAll(".fa-plus");
const iconClose = document.querySelectorAll(".fa-minus");

//wrap ul.mobile-sub-menu in a div to give it zero height until clicked
mobileDropDown.forEach((item) => {
  const el = document.createElement("div");
  el.classList.add("sub-menu-container");
  el.setAttribute("data-container", "container");
  item.parentNode.insertBefore(el, item);
  el.appendChild(item);
});

const mobileSubMenusContainer = document.querySelectorAll(
  ".sub-menu-container"
);

const contHeight = mobileSubMenusContainer.forEach(function (i) {
  i.style.height = 0;
});

openBtns.forEach(function (btn) {
  //reset the overall menu container ".mobile-menu-container"
  const linksHeight = menu.getBoundingClientRect().height;

  //click it boyo
  btn.addEventListener("click", function (e) {
    //get the sub menu next to the btn clicked
    const clickedMenu = e.currentTarget.nextSibling;
    //get the open and close font awesome icons
    const clickedOpenIcon = e.currentTarget.children[0];
    const clickedCloseIcon = e.currentTarget.children[1];
    //get the height of the ul.mobile-sub-menu
    const clickedMenuHeight =
      clickedMenu.firstChild.getBoundingClientRect().height;
    //get the height of the menu when sub menu items are closed as this will need to be added to the total menu size once they open

    if (clickedMenu.style.height === "0px") {
      console.log(mobileMenuContainer.style.height);
      mobileSubMenusContainer.forEach(function (i) {
        i.style.height = "0px";
      });
      iconClose.forEach(function (i) {
        i.classList.add("hide");
      });
      iconOpen.forEach(function (i) {
        i.classList.remove("hide");
      });
      clickedMenu.style.height = `${clickedMenuHeight}px`;
      mobileMenuContainer.style.height = `${linksHeight + clickedMenuHeight}px`;
      //close other open sub navs

      //swap open and close icons of the btn clicked
      clickedOpenIcon.classList.add("hide");
      clickedCloseIcon.classList.remove("hide");
    } else {
      clickedMenu.style.height = "0px";
      mobileMenuContainer.style.height = `${linksHeight}px`;
      clickedOpenIcon.classList.remove("hide");
      clickedCloseIcon.classList.add("hide");
    }
  });
});
//Date in footer
const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

//***************************************************/
//CONTACT FORM
//************************************************* */
const form = document.getElementById("contactForm");
const name = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("body");
//get values from inputs
const nameValue = name.value.trim();
const emailValue = email.value.trim();
const messageValue = message.value.trim();
const phoneValue = phone.value.trim();

let nameField;
let emailField;
let phoneField;
let messageField;

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
  sendForm();
});

function sendForm() {
  if (nameField && emailField && phoneField && messageField) {
    //AJAX ZAPIER
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var body = $("#body").val();
    var data = {
      email: email,
      message: body,
      phone: phone,
      contact: name,
    };

    $.ajax({
      url: "#",
      type: "post",
      data: JSON.stringify(data),
      success: function () {
        $(".thanks-message").addClass("show");
        $(".form-item").hide();
      },
    });
  }
}
// console.log(name.value, email.value, body.value);
function checkInputs() {
  //get values from inputs
  const nameValue = name.value.trim();
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
  const messageValue = message.value.trim();

  //is the field empty
  if (nameValue === "") {
    //then add error class
    setErrorFor(name, "Please add your name");
  } else {
    //or add success class
    setSuccessFor(name);
    nameField = true;
  }
  //repeat for all fields with regex also for email
  if (emailValue === "") {
    setErrorFor(email, "Please add your email address");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "This is not a valid email address");
  } else {
    setSuccessFor(email);
    emailField = true;
  }
  if (phoneValue === "") {
    setErrorFor(phone, "Please add your phone number");
  } else {
    //add success class
    setSuccessFor(phone);
    phoneField = true;
  }

  if (messageValue === "") {
    setErrorFor(message, "Please add your message");
  } else {
    setSuccessFor(message);
    messageField = true;
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  //add error message inside small
  small.innerText = message;

  //add error class
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  //add success class
  formControl.className = "form-control success";
}
function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
