<main>
    <section class="hero container" id="inicio">
        <div class="hero-copy">
            <span class="eyebrow"><span class="status-dot"></span> PORTAFOLIO PERSONAL · EN CONSTRUCCIÓN</span>
            <p class="hero-kicker"><?= e($perfil['presentacion']) ?></p>
            <h1><?= e($perfil['nombre']) ?><span class="accent">.</span></h1>
            <h2><?= e($perfil['rol']) ?></h2>
            <p class="hero-description"><?= e($perfil['descripcion']) ?></p>
            <div class="hero-actions">
                <a class="button primary" href="#proyectos">Explorar proyectos <span aria-hidden="true">↗</span></a>
                <a class="button secondary" href="#sobre-mi">Conoce más</a>
            </div>
            <div class="hero-meta"><span>⌁ <?= e($perfil['ubicacion']) ?></span><span>✦ Aprendiendo y creando</span></div>
        </div>
        <div class="hero-visual" aria-hidden="true">
            <div class="orb orb-one"></div><div class="orb orb-two"></div>
            <div class="code-card"><div class="window-dots"><i></i><i></i><i></i></div><pre><span class="code-purple">const</span> developer = {
  name: <span class="code-green">"Tu Nombre"</span>,
  focus: <span class="code-green">"Web development"</span>,
  passion: <span class="code-green">"Build & learn"</span>,
  status: <span class="code-green">"Creating..."</span>
};<span class="cursor">▍</span></pre></div>
            <span class="visual-label">BUILDING IDEAS INTO CODE_</span>
        </div>
    </section>

    <section class="section section-alt" id="sobre-mi"><div class="container">
        <p class="section-kicker">01 / QUIÉN SOY</p><h2>Un poco <span class="accent">sobre mí.</span></h2>
        <div class="about-grid"><p>Este sitio está en construcción. Aquí podrás escribir una breve biografía, contar qué estudias, en qué proyectos trabajas y cuáles son tus intereses profesionales.</p>
        <div class="skills"><h3>Tecnologías que estoy explorando</h3><div class="tags"><?php foreach ($habilidades as $habilidad): ?><span class="tag"><?= e($habilidad) ?></span><?php endforeach; ?></div></div></div>
    </div></section>

    <section class="section" id="proyectos"><div class="container">
        <p class="section-kicker">02 / MI TRABAJO</p><h2>Proyectos <span class="accent">destacados.</span></h2>
        <p class="section-description">Algunos ejemplos que luego reemplazaré por proyectos reales.</p>
        <div class="card-grid"><?php foreach ($proyectos as $indice => $proyecto): ?>
            <article class="project-card"><div class="card-top"><span class="card-number">/ 0<?= $indice + 1 ?></span><span class="project-status"><?= e($proyecto['estado']) ?></span></div>
                <div class="project-icon" aria-hidden="true">⌘</div><h3><?= e($proyecto['titulo']) ?></h3><p><?= e($proyecto['descripcion']) ?></p>
                <div class="tags"><?php foreach ($proyecto['tecnologias'] as $tecnologia): ?><span class="tag"><?= e($tecnologia) ?></span><?php endforeach; ?></div>
            </article><?php endforeach; ?></div>
    </div></section>

    <section class="section section-alt" id="articulos"><div class="container">
        <p class="section-kicker">03 / BLOG</p><h2>Notas y <span class="accent">aprendizajes.</span></h2>
        <div class="article-list"><?php foreach ($articulos as $articulo): ?>
            <article class="article-item"><div><span class="article-meta"><?= e($articulo['categoria']) ?> · <?= e($articulo['fecha']) ?></span><h3><?= e($articulo['titulo']) ?></h3><p><?= e($articulo['resumen']) ?></p></div><span class="article-arrow" aria-hidden="true">↗</span></article>
        <?php endforeach; ?></div>
    </div></section>

    <section class="section contact-section" id="contacto"><div class="container contact-inner">
        <p class="section-kicker">04 / CONECTEMOS</p><h2>¿Tienes una <span class="accent">idea?</span></h2>
        <p>Este espacio estará disponible para colaboraciones, consultas o simplemente para conversar sobre tecnología.</p>
        <span class="placeholder-note">Próximamente: correo y redes sociales reales.</span>
    </div></section>
</main>
