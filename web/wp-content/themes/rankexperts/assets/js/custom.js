const team = document.querySelector(".team");

// Функція для встановлення висоти елементів
function setMaxHeight() {
  const blogItems = document.querySelectorAll(".team-swiper__slide");

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
  document.addEventListener("DOMContentLoaded", setMaxHeight);
}
