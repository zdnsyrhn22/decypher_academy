const contentSection = document.querySelector(".content-section");
const courses = document.querySelectorAll(".course .card");
const searchInput = document.querySelector(".search-input");

let pagination = document.querySelectorAll(".pagination .page-item");

let pages = 1;
let itemsPerPage = 4;
let offset = (pages - 1) * itemsPerPage;

let pageItem = Math.ceil(courses.length / itemsPerPage);

// searchInput
searchInput.addEventListener("keyup", () => {
  // set pagination on pagenumber 1
  pagination.forEach((element) => {
    element.querySelector(".page-link").classList.remove("active");
  });

  pagination[1].querySelector(".page-link").classList.add("active");

  // filter course which will show/hide
  courses.forEach((course, i) => {
    // set variable title
    let title = course.querySelector(".card-title").innerText.toLowerCase();
    
    // match string (title == searchinput)
    if (title.match(searchInput.value)) {
      course.style.display = "";
    } else {
      course.style.display = "none";
    }

    // searchinput == empty, show 4 course
    if (searchInput.value === "") {
      if (i >= 4) {
        course.style.display = "none";
      }
    }
  });
});

//hide all course
courses.forEach((course) => {
  course.style.display = "none";
});

for (let i = offset; i < offset + itemsPerPage; i++) {
  const course = courses[i];
  if (course != undefined) {
    window.scrollTo();
    course.style.display = "";
  }
}

// create element page-item
for (let i = 1; i <= pageItem; i++) {
  const elementPageItem = document.createElement("li");
  elementPageItem.classList.add("page-item");

  const btnPageItem = document.createElement("button");
  btnPageItem.classList.add("btn");
  btnPageItem.classList.add("page-link");
  btnPageItem.value = i;
  btnPageItem.innerText = i;

  if (i == 1) {
    btnPageItem.classList.add("active");
  }

  elementPageItem.appendChild(btnPageItem);
  pagination[0].appendChild(elementPageItem);
}

pagination = document.querySelectorAll(".pagination .page-item");

for (let i = 0; i < pagination.length; i++) {
  pagination[i].querySelector(".page-link").addEventListener("click", () => {
    
    pages = pagination[i].querySelector(".page-link").value;
    searchInput.value = ""

    pagination.forEach((element) => {
      element.querySelector(".page-link").classList.remove("active");
    });

    courses.forEach((course) => {
      course.style.display = "none";
    });

    if (pages === "first") {
      pages = 1;
      pagination[pages].querySelector(".page-link").classList.add("active");
    }else if (pages === "last") {
      pages = pagination[pagination.length - 2].querySelector(".page-link").value;
      
      pagination[pages].querySelector(".page-link").classList.add("active");
    }else{
      pagination[i].querySelector(".page-link").classList.add("active");
    }

    offset = (pages - 1) * itemsPerPage;

    //
    for (let i = offset; i < offset + itemsPerPage; i++) {
      const course = courses[i];
      if (course != undefined) {
        window.scrollTo();
        course.style.display = "";
      }
    }
  });
}
