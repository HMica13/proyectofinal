 <?php 
    require 'header.php'; ?>
 
 <!-- Contenido principal de la nueva página -->
<body class="body">
    <div style="color: aliceblue; text-align: center; margin-top: 4rem;">
        <h1 style="font-size: 3.5rem; letter-spacing: 1px; font-weight: bold;">Bienvenido (Usuario)</h1>
        
    </div>

    <div style="color: aliceblue; text-align: center; margin: 2rem 0 1.5rem 0;">
        <p>Mira de lo que es capaz el equipo de DotBox Studio</p>
    </div>

    <div class="integrantes-grid-outer">
        <div class="integrantes-grid">
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../Recursos/freddy.jpg" alt="Integrante 1" class="integrante-photo">
                    <div class="integrante-name">David Quintero</div>
                    <a href="Dave.php"><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../Recursos/Recurso 4-8.png" alt="Integrante 2" class="integrante-photo">
                    <div class="integrante-name">Integrante 2</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href=""><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../Recursos/Recurso 6-8.png" alt="Integrante 3" class="integrante-photo">
                    <div class="integrante-name">Integrante 3</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href=""><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../Recursos/integrante4.jpg" alt="Integrante 4" class="integrante-photo">
                    <div class="integrante-name">Integrante 4</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href=""><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const items = Array.from(document.querySelectorAll('.carousel-item'));
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let current = 0;
        let intervalId = null;

        function updateCarousel() {
            items.forEach((item, idx) => {
                if (idx === current) {
                    item.classList.add('active');
                    item.style.opacity = '1';
                    item.style.pointerEvents = 'auto';
                    item.style.position = 'relative';
                    item.style.zIndex = 2;
                    item.style.display = 'flex';
                } else {
                    item.classList.remove('active');
                    item.style.opacity = '0';
                    item.style.pointerEvents = 'none';
                    item.style.position = 'absolute';
                    item.style.zIndex = 1;
                    item.style.display = 'flex';
                }
            });
        }

        function nextCarousel() {
            current = (current + 1) % items.length;
            updateCarousel();
        }

        function prevCarousel() {
            current = (current - 1 + items.length) % items.length;
            updateCarousel();
        }

        prevBtn.onclick = () => {
            prevCarousel();
            resetCarouselInterval();
        };
        nextBtn.onclick = () => {
            nextCarousel();
            resetCarouselInterval();
        };

        function startCarouselInterval() {
            intervalId = setInterval(nextCarousel, 3500);
        }

        function resetCarouselInterval() {
            clearInterval(intervalId);
            startCarouselInterval();
        }

        updateCarousel();
        startCarouselInterval();
    </script>
</body>
</html>