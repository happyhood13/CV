<?php
$nombre = "Jesus Alexander Guzman Mendoza";
$carrera = "Ingeniero ITI in Progress";
$correo = "gmj2431102026@upatlacomulco.edu.mx";
$anio = date("Y");

$secciones = [
    "Sobre mí" => "img/habilidades.jpg",
    "Educación" => "img/habilidades.jpg",
    "Frase" => "img/habilidades.jpg",
    "Habilidades Técnicas" => "img/habilidades.jpg",
    "Contacto" => "img/habilidades.jpg"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $nombre ?> | Portafolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <img src="img/logo.png" alt="Logo">
    <ul>
        <?php foreach ($secciones as $titulo => $img): ?>
            <li><a href="#<?= strtolower(str_replace([' ', 'ó', 'í', 'é', 'á', 'ú'], '', $titulo)) ?>"><?= $titulo ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<header>
    <div class="overlay">
        <h1 id="nombre"></h1>
    </div>
    <script>
        const nombreCompleto = "<?= $nombre ?>\n<?= $carrera ?>";
        const nombreElemento = document.getElementById("nombre");
        let i = 0;

        function escribirNombre() {
            if (i < nombreCompleto.length) {
                const ch = nombreCompleto.charAt(i);
                nombreElemento.innerHTML += ch === '\n' ? '<br>' : ch;
                i++;
                setTimeout(escribirNombre, 100);
            }
        }

        escribirNombre();
    </script>
</header>

<?php foreach ($secciones as $titulo => $img): 
    if ($titulo === "Contacto") continue;
    $id = strtolower(str_replace([' ', 'ó', 'í', 'é', 'á', 'ú'], '', $titulo));
?>
<section id="<?= $id ?>" class="section-hero" style="background-image: url('<?= $img ?>');">
    <div class="overlay reveal">
        <h2><?= $titulo ?></h2>

        <?php if ($titulo === "Habilidades Técnicas"): ?>
            <div class="img-card">
                <img src="img/todos.jpg" alt="Habilidades Técnicas">
            </div>
            <ul>
                <p>Programación en Java, C++, HTML, CSS y Android Studio.</p>

                   <p> Desarrollo de aplicaciones web y de escritorio.</p>

                    <p>Manejo de bases de datos SQL (MySQL, PostgreSQL).</p>

                   <p> Conocimientos de sistemas Windows y Linux.</p>

                   <p> Configuración de redes y conocimientos de protocolos TCP/IP.</p>

                  <p>  Uso de herramientas de productividad: Microsoft Office y Google Workspace.</p>

                   <p> Buenas prácticas de seguridad informática y ciberseguridad.</p>
                
            </ul>

        <?php elseif ($titulo === "Contacto"): ?>
            <script>
                // Redirige automáticamente al pie de página
                window.location.hash = "contacto";
            </script>
        <?php endif; ?>

    <?php if ($titulo === "Sobre mí"): ?>
           <!-- 🔹 Nueva sección Sobre mí -->
            <div class="sobremi-container">
                <div class="perfil">
                    <img src="img/perfil.jpg" alt="Foto de perfil">
                    <p><strong>Nombre:</strong> <?= $nombre ?></p>
                    <p><strong>Perfil:</strong> <?= $carrera ?></p>
                    <p><strong>Email:</strong> <?= $correo ?></p>
                    <p><strong>Celular:</strong> (+52) 427-182-2583</p>
                </div>
                <div class="descripcion">
                    <p>
                      Soy estudiante de Ingeniería en Tecnologías de la Información con interés en el desarrollo de software, 
                      seguridad informática y gestión de bases de datos. 
                      Me caracterizo por la responsabilidad, la organización y la capacidad de trabajar en equipo.
                      Busco oportunidades de prácticas profesionales o proyectos académicos que me permitan aplicar mis habilidades,
                      fortalecer mi aprendizaje y generar resultados que beneficien al equipo y a la organización.
                    </p>

                    <div class="skills">
                        <p>HTML</p>
                        <div class="skill-bar"><div style="width: 75%">75%</div></div>

                        <p>CSS</p>
                        <div class="skill-bar"><div style="width: 65%">65%</div></div>

                        <p>PHP</p>
                        <div class="skill-bar"><div style="width: 50%">50%</div></div>

                        <p>JAVASCRIPT</p>
                        <div class="skill-bar"><div style="width: 80%">80%</div></div>
                    </div>
                </div>
            </div>  

    <?php elseif ($titulo === "Educación"): ?>
        <div class="servicios">
            <div class="servicios-contenedor">
                <div class="servicio-card">
                    <div class="icono"><i class="fas fa-school"></i></div>
                    <h3>Bachillerato</h3>
                    <p>Finalizado en la Preparatoria CBT Lic. Mario Colin Sanchez con enfoque en Tecnico en Informatica.</p>
                </div>
                <div class="servicio-card">
                    <div class="icono"><i class="fas fa-university"></i></div>
                    <h3>Licenciatura</h3>
                    <p>Estudiante de Ingeniería en Tecnologias de la Informacion, Universidad Politecnica de Atlacomulco.</p>
                </div>
                <div class="servicio-card">
                    <div class="icono"><i class="fas fa-laptop-code"></i></div>
                    <h3>Cursos</h3>
                    <p>Certificaciones en JavaScript 1, CCNA: Introduccion a las redes, Pensamiento estrategico y mentalidad estrategica, Fundamentos de Chat GPT.</p>
                </div>
            </div>
        </div>

    <?php elseif ($titulo === "Frase"): ?>
        <section class="frase">
            <div class="frase-contenido">
                <img src="img/perfil.jpg" alt="Foto persona" class="frase-img">
                <h3>Jesus Alexander Guzman Mendoza</h3>
                <p>"El código es como el amor, dificil de decifrar, pero facil de enamorarse"</p>
                <div class="icono-frase"><i class="fas fa-quote-right"></i></div>
            </div>
        </section>
    <?php endif; ?>
    </div>
</section>
<?php endforeach; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animación de aparición al hacer scroll
  const revealEls = document.querySelectorAll('.reveal');
  const obs = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  revealEls.forEach(el => obs.observe(el));
});
</script>

<footer id="contacto">
    <div class="footer-contact">
        <h2>Contacto</h2>
        <p>Correo: <a href="mailto:<?= $correo ?>"><?= $correo ?></a></p>
        <div class="credits">
            &copy; <?= $anio ?> <?= $nombre ?> | Todos los derechos reservados
        </div>
    </div>
</footer>

</body>
</html>
