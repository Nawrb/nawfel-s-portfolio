<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Portfolio - Nawfel Rharbaoui</title>
<style>
  /* Reset & base */
  *, *::before, *::after { box-sizing: border-box; }
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #121619;
    color: #e0e6e9;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  a {
    color: #00aaff;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  a:hover, a:focus {
    color: #0088cc;
    text-decoration: underline;
  }

  /* Header */
  header {
    background-color: #1c2128;
    padding: 20px 40px;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 8px rgba(0,0,0,0.5);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /* Animated name typing effect */
  .typing {
    font-size: 2.6rem;
    font-weight: 700;
    color: #00aaff;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid #00aaff;
    width: 18ch;
    animation:
      typing 3.5s steps(18) forwards,
      blink 0.75s step-end infinite;
  }
  @keyframes typing {
    from { width: 0; }
    to { width: 18ch; }
  }
  @keyframes blink {
    50% { border-color: transparent; }
  }

  /* Nav buttons container */
  .nav-buttons {
    display: flex;
    gap: 25px;
  }

  /* Dropdown */
  .dropdown {
    position: relative;
    user-select: none;
  }
  /* Boutons intégrés au header */
.dropdown-button {
  background: transparent;   /* Plus de fond */
  padding: 8px 0;            /* Espacement vertical seulement */
  cursor: pointer;
  font-weight: 600;
  color: #d0d7de;
  border: none;
  box-shadow: none;
  transition: color 0.3s ease;
  font-size: 1rem;
}

.dropdown-button:hover, .dropdown-button:focus {
  color: #00aaff;           /* Bleu au survol */
  text-shadow: 0 0 6px #00aaff; /* Effet lumineux */
  outline: none;
}

  .dropdown-content {
    display: none;
    position: absolute;
    top: 44px;
    right: 0;
    background-color: #222a36;
    border-radius: 8px;
    min-width: 220px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.7);
    z-index: 110;
    user-select: text;
  }
  .dropdown-content.show {
    display: block;
    animation: dropdownFade 0.3s ease forwards;
  }
  @keyframes dropdownFade {
    from {opacity: 0; transform: translateY(-10px);}
    to {opacity: 1; transform: translateY(0);}
  }
  .dropdown-content a, .dropdown-content div {
    padding: 12px 20px;
    display: block;
    color: #cdd9e5;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.25s ease;
  }
  .dropdown-content a:hover, .dropdown-content div:hover {
    background-color: #00aaff;
    color: white;
  }

  /* Main content */
  main {
    max-width: 1100px;
    margin: 40px auto 80px;
    padding: 0 25px;
  }
  section {
    margin-bottom: 70px;
  }
  h1, h2 {
    color: #00aaff;
    font-weight: 700;
    margin-bottom: 20px;
  }
  h1 {
    font-size: 2.6rem;
  }
  h2 {
    font-size: 2.1rem;
  }
  p {
    color: #b0bec5;
    font-size: 1.1rem;
    max-width: 720px;
  }

  /* Skills and projects grid */
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
    gap: 28px;
  }

  .card {
    background-color: #222a36;
    padding: 28px 24px;
    border-radius: 14px;
    box-shadow: 0 8px 22px rgba(0,0,0,0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
  }
  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(0,170,255,0.45);
  }
  .card h3 {
    margin-top: 0;
    margin-bottom: 14px;
    color: #00ccff;
    font-weight: 700;
  }
  .card p {
    color: #cfd8dc;
    font-size: 1rem;
    line-height: 1.45;
  }

  /* Footer */
  footer {
    background-color: #1c2128;
    padding: 24px 20px;
    text-align: center;
    color: #7a8a99;
    font-size: 14px;
    border-top: 1px solid #2c333a;
  }
  footer a {
    color: #00aaff;
    font-weight: 600;
  }
  footer a:hover {
    color: #0088cc;
    text-decoration: underline;
  }

  /* Responsive */
  @media (max-width: 720px) {
    main {
      margin: 25px auto 50px;
      padding: 0 18px;
    }
    h1 {
      font-size: 2rem;
    }
    h2 {
      font-size: 1.6rem;
    }
    .dropdown-button {
      padding: 7px 12px;
      font-size: 14px;
    }
  }
</style>
</head>
<body>

<header>
  <div class="typing" aria-label="Nom et prénom : Rharbaoui Nawfel">Rharbaoui Nawfel</div>

  <nav class="nav-buttons" role="navigation" aria-label="Menu contact et certifications">
    <!-- Contact Dropdown -->
    <div class="dropdown" id="contactDropdown" tabindex="0">
      <button class="dropdown-button" aria-haspopup="true" aria-expanded="false" aria-controls="contactDropdownMenu">Contact</button>
      <div class="dropdown-content" id="contactDropdownMenu" role="menu" aria-label="Options de contact">
        <div role="menuitem"><a href="mailto:nawfelrharbaoui.pro@gmail.com" tabindex="-1">📧 nawfelrharbaoui.pro@gmail.com</a></div>
        <div role="menuitem"><a href="tel:+33762088491" tabindex="-1">📞 07 62 08 84 91</a></div>
      </div>
    </div>

    <!-- Certification Dropdown -->
    <div class="dropdown" id="certificationDropdown" tabindex="0">
      <button class="dropdown-button" aria-haspopup="true" aria-expanded="false" aria-controls="certificationDropdownMenu">Certification</button>
      <div class="dropdown-content" id="certificationDropdownMenu" role="menu" aria-label="Options de certifications">
        <div role="menuitem" tabindex="0">Première année</div>
        <div role="menuitem" tabindex="0" onclick="window.open('https://docs.google.com/document/d/1VEPa4X1tod6Mn-VaKJ9zPafGxoqLPaHG4NB4AJhMOGM/edit?tab=t.0', '_blank')">Deuxième année</div>
      </div>
    </div>
  </nav>
</header>

<main>
  <section>
    <h1>Bienvenue sur mon portfolio</h1>
    <p>
      Étudiant en BTS Services Informatiques aux Organisations (SIO) option SLAM au lycée Carcouët, je suis passionné par le développement web et les technologies innovantes.  
      À travers ce portfolio, je vous invite à découvrir mes projets, compétences et certifications, reflet de mon engagement dans le domaine du numérique.
    </p>
  </section>

  <section>
    <h2>Compétences</h2>
    <div class="grid">
      <article class="card" tabindex="0" aria-label="Compétence HTML, CSS, JavaScript">
        <h3>HTML / CSS / JavaScript</h3>
        <p>Création de sites web modernes, responsives et dynamiques.</p>
      </article>
      <article class="card" tabindex="0" aria-label="Compétence PHP, MySQL">
        <h3>PHP / MySQL</h3>
        <p>Développement backend avec gestion de bases de données et API.</p>
      </article>
      <article class="card" tabindex="0" aria-label="Compétence Python">
        <h3>Python</h3>
        <p>Automatisation, scripts et analyse de données.</p>
      </article>
      <article class="card" tabindex="0" aria-label="Compétence Git, GitHub">
        <h3>Git / GitHub</h3>
        <p>Versionning, travail collaboratif et déploiement de projets.</p>
      </article>
    </div>
  </section>

  <section>
    <h2>Projets</h2>
    <div class="grid">
      <article class="card" tabindex="0" aria-label="Projet gestionnaire de notes">
        <h3>Gestionnaire de notes</h3>
        <p>Application web pour professeurs développée en PHP/MySQL permettant la gestion simplifiée des notes.</p>
      </article>
      <article class="card" tabindex="0" aria-label="Projet portfolio">
        <h3>Portfolio personnel</h3>
        <p>Ce site codé à la main pour mettre en valeur mes compétences et réalisations.</p>
      </article>
      <article class="card" tabindex="0" aria-label="Projet script analyse de logs">
        <h3>Script d’analyse de logs</h3>
        <p>Programme Python pour extraire et analyser des données depuis des fichiers journaux.</p>
      </article>
    </div>
  </section>
</main>

<footer>
  &copy; 2025 Nawfel Rharbaoui — BTS SIO | <a href="mailto:nawfelrharbaoui.pro@gmail.com">Me contacter</a>
</footer>

<script>
  // Gestion des dropdowns
  const contactDropdownBtn = document.querySelector('#contactDropdown .dropdown-button');
  const contactDropdownContent = document.querySelector('#contactDropdown .dropdown-content');
  const certificationDropdownBtn = document.querySelector('#certificationDropdown .dropdown-button');
  const certificationDropdownContent = document.querySelector('#certificationDropdown .dropdown-content');

  contactDropdownBtn.addEventListener('click', e => {
    e.stopPropagation();
    const show = contactDropdownContent.classList.toggle('show');
    certificationDropdownContent.classList.remove('show');
    contactDropdownBtn.setAttribute('aria-expanded', show);
    certificationDropdownBtn.setAttribute('aria-expanded', false);
  });

  certificationDropdownBtn.addEventListener('click', e => {
    e.stopPropagation();
    const show = certificationDropdownContent.classList.toggle('show');
    contactDropdownContent.classList.remove('show');
    certificationDropdownBtn.setAttribute('aria-expanded', show);
    contactDropdownBtn.setAttribute('aria-expanded', false);
  });

  document.addEventListener('click', () => {
    contactDropdownContent.classList.remove('show');
    certificationDropdownContent.classList.remove('show');
    contactDropdownBtn.setAttribute('aria-expanded', false);
    certificationDropdownBtn.setAttribute('aria-expanded', false);
  });

  document.addEventListener('keydown', e => {
    if (e.key === "Escape") {
      contactDropdownContent.classList.remove('show');
      certificationDropdownContent.classList.remove('show');
      contactDropdownBtn.setAttribute('aria-expanded', false);
      certificationDropdownBtn.setAttribute('aria-expanded', false);
    }
  });
</script>

</body>
</html>
