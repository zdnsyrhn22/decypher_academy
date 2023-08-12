// get element button hamburger
const buttonHam = document.querySelector(".navbar-mobile #btn-navbar-mobile");
// get listitem/navs item 
const listItem = document.querySelector(".navbar .list-item");
const btnDropdown = document.querySelector(".navbar #student");
const dropdown = document.querySelector(".navbar .dropdown-content");

// event click button hamburger
buttonHam.addEventListener("click", () => {
    // set condition show/hide (ternary operator)
  buttonHam.value == "false" ? (buttonHam.value = true) : (buttonHam.value = false);

    //   change icon button
  buttonHam.querySelector("i").classList.toggle("fa-times");

    //   show/hide list item
  if (buttonHam.value == "true") {
    listItem.classList.add("popup-active");
  } else {
    listItem.classList.remove("popup-active");
  }
});

// downdown

btnDropdown.addEventListener('click', () => {
  if(dropdown.style.display === '' || dropdown.style.display === 'none'){
    dropdown.style.display = 'flex';
  }else {
    dropdown.style.display = 'none'
  }
})
