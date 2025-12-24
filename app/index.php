<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Flow | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allura&family=Anton&family=Assistant:wght@200..800&family=Bangers&family=Bebas+Neue&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Comfortaa:wght@300..700&family=Epilogue:ital,wght@0,100..900;1,100..900&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Funnel+Display:wght@300..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lilita+One&family=Love+Ya+Like+A+Sister&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Oxanium:wght@200..800&family=Passion+One:wght@400;700;900&family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rock+Salt&family=Smooch+Sans:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Space+Grotesk:wght@300..700&family=Vina+Sans&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --green-color: #26D968;
            --green-color2: #229e4fff;
            --blue-color: #1291db;
            --orange-color: #d55900;
            --yellow-color:#f9f936;
            --colorBg1: #182821;
            --colorBg2: #171A1C;
            --grayBox: #1B1F22;
        }

        .funnel{
            font-family: "Funnel Display", sans-serif;
        }

        .inter{
            font-family: "Inter", sans-serif;
        }

        @keyframes arrowMovie {
            0%{
                transform: translateX(5px);
            }

            50%{
                transform: translateX(0px);
            }

            100%{
                transform: translateX(5px);
            }
        }

        #arrow{
            animation: arrowMovie 1.2s ease-in-out infinite;
        }

        .btnSpecial{
            position: relative;
            overflow: hidden;
        }

        @keyframes btnSpecialMovie {
            0%{
                left: -100%;
            }

            100%{
                left: 100%;
            }
        }

        .btnSpecial::after{
            content: "";
            position: absolute;
            width: 75%;
            height: 100%;
            top: 0;
            left: -100%;
            background-image: linear-gradient(120deg, transparent, #ffffff3c, transparent);
            animation: btnSpecialMovie 2s ease-in-out infinite;
        }

        .btnEnter{
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btnEnter::after{
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 300px;
            height: 200px;
            border-radius: 100%;
            transform-origin: center;
            background-color: #2c453548;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .btnEnter:hover::after{
            transform: translate(-50%, -50%) scale(1);
        }
        @keyframes topAnimation {
            0%{
                transform: translateY(-15px);
                opacity: 0;
            }

            100%{
                transform: translateY(0px);
                opacity: 1;
            }
        }

        #buttonDiv, #checkeds {
            animation: topAnimation 1.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-l from-[var(--colorBg1)] to-[var(--colorBg2)] min-h-[100vh]">
    <div class="h-screen">

        <div class="h-[65px] w-screen lg:w-screen fixed bg-gradient-to-r from-[var(--green-color2)] via-[var(--green-color)] to-[var(--green-color2)] z-[9999]">
            <header class="bg-[#161A1C] flex justify-between items-center h-[63.5px] fixed w-screen border-b border-b-[#262626] z-[9999]">
                <div class="flex items-center space-x-2 ml-6">
                    <h1 class="text-white funnel text-xl font-semibold">Stock<span class="text-[var(--green-color)] funnel"> Flow</span></h1>
                    <i class="bi bi-box-seam-fill text-[var(--green-color)] text-xl"></i>
                </div>

                <div class="mr-6 flex space-x-3">
                    <button class="border py-1 px-3 rounded-full border-gray-600 hover:bg-gray-100/10 transition ease-in-out duration-300">
                        <i class="bi bi-brightness-high-fill text-yellow-500"></i>
                    </button>
                    <a href="./main/views/login.php">
                        <button class="border border-gray-600 py-2 px-4 rounded-xl flex items-center space-x-2 btnEnter hover:translate-x-1 transition ease-in-out duration-150 bg-[#193125]/60">
                            <p class="text-[var(--green-color)] inter text-sm font-semibold">Entrar</p>
                            <i class="bi bi-box-arrow-in-right text-[var(--green-color)]"></i>
                        </button>
                    </a>
                </div>
            </header>
        </div>

        <div id="sec1Infs" class="left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 absolute mx-auto w-full">
            <div class="flex flex-col justify-center items-center gap-8 translate-y-5 sm:-translate-y-5 lg:translate-y-10">
                <div id="divIlustrativa" class="flex space-x-2 text-sm bg-[#193125] py-1 px-2 rounded-full border border-[var(--green-color)]">
                    <i class="bi bi-box-seam text-[var(--green-color)]"></i>
                    <p class="text-[var(--green-color)] font-semibold">O estoque digitalizado que você precisa</p>
                </div>
                
                <p id="pPrincipal" class="inter font-bold text-white text-2xl lg:text-5xl text-center px-8 sm:px-24 lg:px-0 lg:w-[50vw] mx-auto">Gerencie o seu negócio, <span class="inter text-[var(--green-color)]">organize seus produtos</span> e não perca mais tempo</p>

                <div id="legends" class="flex flex-col items-center space-y-4">
                    <p class="text-gray-400 sm:text-xl text-center lg:w-[80%] sm:px-5 lg:px-0">Se diferencie no mercado! Dispare em quesito organização e rendimento utilizando nossa plataforma.</p>

                    <p class="text-gray-400 sm:text-xl text-center lg:w-[80%]">É gratuito, começe e veja os resultados.</p>
                </div>

                <div>
                    <a href="./main/views/login.php">
                        <button id="buttonDiv" class="bg-[var(--green-color)] w-[260px] rounded-lg py-3 text-white flex items-center justify-center space-x-4 btnSpecial hover:bg-[#21bb5a] transition ease-in-out duration-300 drop-shadow-[0_0_5px_#26D968]">
                            <p class="inter text-lg font-semibold">Começar agora</p>
                            <i id="arrow" class="bi bi-arrow-right text-xl"></i>
                        </button>
                    </a>
                </div>

                <!-- PC -->
                <div id="checkeds" class="hidden sm:block">
                    <div class="flex items-center gap-8 pt-2">
                        <div class="flex items-center space-x-2">
                            <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                            <p class="text-gray-400 inter">Mais Organização</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                            <p class="text-gray-400 inter">Rendimento Maior</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                            <p class="text-gray-400 inter">100% Gratuito</p>
                        </div>
                    </div>
                </div>

                <div class="block sm:hidden">
                    <div class="flex flex-col text-sm items-center gap-8 pt-2">
                        <div class="flex space-x-4">
                            <div class="flex items-center space-x-2">
                                <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                                <p class="text-gray-400 inter">Mais Organização</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                                <p class="text-gray-400 inter">Rendimento Maior</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="bi bi-check-circle text-[var(--green-color)]"></i>
                            <p class="text-gray-400 inter">100% Gratuito</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec2" class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16 lg:gap-6 pb-20 px-14 lg:pt-12">
        <div class="bg-[var(--grayBox)] text-center p-6 rounded-lg border border-gray-800 flex flex-col items-center justify-between gap-4 hover:border-[var(--green-color)] hover:bg-[var(--colorBg1)] transition ease-in-out duration-300">
            <i class="bi bi-people text-[var(--blue-color)] bg-[#191919] text-2xl py-2 px-3 rounded-lg"></i>
            <div class="counter text-white text-2xl inter font-bold" data-target="1250">0</div>
            <p class="text-gray-400 text-sm">Clientes Ativos</p>
        </div>

        <div class="bg-[var(--grayBox)] text-center p-6 rounded-lg border border-gray-800 flex flex-col items-center justify-between gap-4 hover:border-[var(--green-color)] hover:bg-[var(--colorBg1)] transition ease-in-out duration-300">
            <i class="bi bi-box2 text-[var(--orange-color)] bg-[#191919] text-2xl py-2 px-3 rounded-lg"></i>
            <div class="counter text-white text-2xl inter font-bold" data-target="7000">0</div>
            <p class="text-gray-400 text-sm">Produtos Estocados</p>
        </div>

        <div class="bg-[var(--grayBox)] text-center p-6 rounded-lg border border-gray-800 flex flex-col items-center justify-between gap-4 hover:border-[var(--green-color)] hover:bg-[var(--colorBg1)] transition ease-in-out duration-300">
            <i class="bi bi-cash-coin text-[var(--green-color)] bg-[#191919] text-2xl py-2 px-3 rounded-lg"></i>
            <div class="counter text-white text-2xl inter font-bold" data-target="100">0</div>
            <p class="text-gray-400 text-sm">Taxa de Ultilização</p>
        </div>

        <div class="bg-[var(--grayBox)] text-center p-6 rounded-lg border border-gray-800 flex flex-col items-center justify-between gap-4 hover:border-[var(--green-color)] hover:bg-[var(--colorBg1)] transition ease-in-out duration-300">
            <i class="bi bi-graph-up-arrow text-[var(--yellow-color)] bg-[#191919] text-2xl py-2 px-3 rounded-lg"></i>
            <div class="counter text-white text-2xl inter font-bold" data-target="96">0</div>
            <p class="text-gray-400 text-sm">Qualidade Percebida</p>
        </div>
    </div>

    <footer class="bg-[#161A1C] py-5">
        <div class="flex flex-col items-center justify-center gap-6 inter pt-6">
            <div class="flex items-center space-x-2 ml-6 bg-[#193125] py-1 px-4 rounded-lg border border-[var(--green-color)]">
                <h1 class="text-white funnel text-xl font-semibold">Stock<span class="text-[var(--green-color)] funnel"> Flow</span></h1>
                <i class="bi bi-box-seam-fill text-[var(--green-color)] text-xl"></i>
            </div>

            <p class="text-center text-gray-400 text-sm px-6 lg:w-[500px]">Com o StockFlow, sua empresa conta com uma plataforma moderna e confiável para gerenciar estoques, acompanhar movimentações e manter o controle total dos produtos em tempo real.</p>

            <p class="text-gray-400">&copy; 2025 Todos os direitos reservados</p>

            <p class="text-gray-400">Desenvolvido por <a class="inter" href="https://github.com/kauancristian"><span class="text-white font-semibold">Kauan <span class="text-[var(--green-color)]">Cristian</span></span></a></p>
        </div>
    </footer>

    <script>
        function animationCounter(e) {
            const end = Number(e.getAttribute('data-target'));
            let current = 0;
            const increment = end / 50;

            const timer = setInterval(() => {

                current += increment;
                e.textContent = Math.floor(current);

                if(current >= end) {
                    e.textContent = end;

                    if(end === 96 || end === 100) {
                        e.textContent = end + '%';
                    }

                    if(end === 1250 || end === 7000) {
                        e.textContent = end + '+';
                    }

                    clearInterval(timer);
                }

            }, 40)
       }

       document.querySelectorAll('.counter').forEach(animationCounter);
       

        function animationCounter(e) {
            const end = Number(e.getAttribute('data-target'));
            let current = 0;
            const increment = end / 50;

            const timer = setInterval(() => {
                current += increment;
                e.textContent = Math.floor(current);

                if(current >= end) {
                    e.textContent = end;

                    if(end === 100 || end === 96) {
                        e.textContent = end + "%";
                    };

                    if(end === 7000) {
                        e.textContent = end + "+";
                    };

                    clearInterval(timer);
                };
                
            }, 60);
        };
       
        document.querySelectorAll('.counter').forEach(animationCounter);
       
    </script>

    <script>
        ScrollReveal().reveal('#sec2', {
            origin: 'top',
            duration: 800,
            delay: 200,
            easing: 'ease-in-out',
        });

        ScrollReveal().reveal('#pPrincipal', {
            origin: 'top',
            distance: '50px',
            duration: 800,
            delay: 200,
            easing: 'ease-in-out',
        });

        ScrollReveal().reveal('#legends', {
            origin: 'left',
            distance: '50px',
            duration: 800,
            delay: 200,
            easing: 'ease-in-out',
        });

        ScrollReveal().reveal('#divIlustrativa', {
            origin: 'left',
            distance: '50px',
            duration: 800,
            delay: 200,
            easing: 'ease-in-out',
        });
        
    </script>
</body>
</html>