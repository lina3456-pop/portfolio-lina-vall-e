// Menu mobile
const toggle = document.querySelector(".nav__toggle");
const links = document.querySelector(".nav__links");

if (toggle && links) {
  toggle.addEventListener("click", () => {
    const isOpen = links.classList.toggle("open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  // Ferme le menu après clic sur un lien (mobile)
  links.querySelectorAll("a").forEach(a => {
    a.addEventListener("click", () => {
      if (links.classList.contains("open")) {
        links.classList.remove("open");
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  });
}

// Surlignage de l’onglet actif pendant le scroll
const navLinks = Array.from(document.querySelectorAll(".nav__link"));
const sections = Array.from(document.querySelectorAll("[data-section]"));

const byId = (id) => navLinks.find(a => a.getAttribute("href") === `#${id}`);

const io = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;

    navLinks.forEach(a => a.classList.remove("active"));
    const active = byId(entry.target.id);
    if (active) active.classList.add("active");
  });
}, {
  rootMargin: "-40% 0px -55% 0px",
  threshold: 0.01
});

sections.forEach(s => io.observe(s));

// Année automatique footer
const y = document.getElementById("year");
if (y) y.textContent = new Date().getFullYear();
