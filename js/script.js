const btop = document.querySelector(".backtotop");
window.addEventListener("scroll", () => {
  console.log(window.pageYOffset);
  if (window.pageYOffset >= 200) {
    btop.classList.add("show");
  } else {
    btop.classList.remove("show");
  }
});

const toggleMenu = document.querySelector(".toggle__menu");
const headerNav = document.querySelector(".navigation");
const closing = document.querySelector(".navigation ul li a");
toggleMenu.addEventListener("click", () => {
  toggleMenu.classList.toggle("open");
  headerNav.classList.toggle("open");
});
// const actclosing = document.querySelectorAll(".closed");
// actclosing.forEach((sara) => {
//   sara.addEventListener("click", () => {
//     removeActiveclose();
//     sara.classList.add("active");
//     headerNav.classList.remove("open");
//     toggleMenu.classList.remove("open");
//     headerNav.style = "transition: .5s ease";
//   });
// });
// function removeActiveclose() {
//   actclosing.forEach((sara) => {
//     sara.classList.remove("active");
//   });
// }

const actclosing = document.querySelectorAll(".navigation ul li.navLink");
actclosing.forEach((sara) => {
  sara.addEventListener("click", () => {
    removeActiveclose();
    sara.classList.add("active");
    headerNav.classList.remove("open");
    toggleMenu.classList.remove("open");
    headerNav.style = "transition: .5s ease";
  });
});
function removeActiveclose() {
  actclosing.forEach((sara) => {
    sara.classList.remove("active");
  });
}

const projectnav = document.querySelectorAll(".project__nav");
const projectcontent = document.querySelectorAll(".project-tab__content");
projectnav.forEach((project) => {
  project.addEventListener("click", () => {
    removeActiveProject();
    project.classList.add("active");
    const activeContent = document.querySelector(`#${project.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  });
});

function removeActiveProject() {
  projectnav.forEach((project) => {
    project.classList.remove("active");
  });
}
function removeActiveContent() {
  projectcontent.forEach((project) => {
    project.classList.remove("active");
  });
}

ScrollReveal({
  reset: true,
  distance: "20rem",
  duration: 1000,
  delay: 200,
});

ScrollReveal().reveal(
  ".banner__text, .section__title, .contact__left, .contact__wrapper p",
  { delay: 300, origin: "left" }
);
ScrollReveal().reveal(".banner__wrapper img, .contact__right", {
  delay: 300,
  origin: "right",
});
ScrollReveal().reveal(
  ".skill__wrapper .skill__card .card, .services__card__content, .projects__tab",
  { delay: 300, origin: "bottom" }
);
