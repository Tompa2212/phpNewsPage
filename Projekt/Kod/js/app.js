//NAVIGATION
const btnToggle = document.querySelector(".nav__hamburger");
const navLinks = document.querySelector(".nav__links");

btnToggle.addEventListener("click", () => {
  navLinks.classList.toggle("show-links");
});

//LINKING TO A NEW ARTICLE

const articles = document.querySelectorAll(".article");

articles.forEach((article) => {
  article.addEventListener("click", () => {
    const linkId = article.querySelector("input").value;
    console.log(linkId);

    const link = `clanak.php?id=${linkId}`;

    window.location.href = link;
  });
});

//IZBRISI CLANAK

const izbrisiClanak = (clanakId) => {
  const clanak = document.getElementById(clanakId);

  clanak.parentNode.removeChild(clanak);
};

const osvjeziClanak = (clanakId) => {};
