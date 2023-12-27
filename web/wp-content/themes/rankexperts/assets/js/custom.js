const team = document.querySelector(".team");
const reviews = document.querySelector(".reviews");
const services = document.querySelector(".marketing");

// Функція для встановлення висоти елементів
function setMaxHeight(prew) {
  const blogItems = document.querySelectorAll(prew);

  if (blogItems.length > 0) {
    let maxHeight = 0;

    blogItems.forEach(function (item) {
      const itemHeight = item.clientHeight;

      if (itemHeight > maxHeight) {
        maxHeight = itemHeight;
      }
    });

    blogItems.forEach(function (item) {
      item.style.height = maxHeight + "px";
    });
  }
}

if (team) {
  // Викликати функцію при завантаженні сторінки
  document.addEventListener("DOMContentLoaded", setMaxHeight('.team-swiper__slide'));
}

if (reviews) {
  // Викликати функцію при завантаженні сторінки
  document.addEventListener("DOMContentLoaded", setMaxHeight('.reviews__text'));
}

if (services) {
  // Викликати функцію при завантаженні сторінки
  document.addEventListener("DOMContentLoaded", setMaxHeight('.card-item'));
}


