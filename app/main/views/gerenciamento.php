<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Gerenciamento | Stock Flow</title>
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

        .btnReturn{
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btnReturn::after{
            content: "";
            position: absolute;
            width: 300px;
            height: 200px;
            left: 50%;
            top: 50%;
            border-radius: 100%;
            transform-origin: center;
            background-color: #121616ff;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .btnReturn:hover::after{
            transform: translate(-50%,-50%) scale(1);
        }
    </style>
</head>
<body>
    <!-- Sessão -->
    <div class="grid md:grid-cols-[0.38fr_1.2fr]">
        <!-- Menu Lateral -->
        <div class="h-screen bg-gradient-to-r from-[var(--green-color2)] via-[var(--green-color)] to-[var(--green-color2)] hidden md:block">
            <div class="h-screen bg-gradient-to-br from-[#161A1C] via-[#161A1C] to-[#121212] hidden md:block w-[99.2%]">
                <div class="flex items-center justify-center space-x-2 pt-6">
                    <i class="bi bi-box-seam-fill text-[var(--green-color)] text-[2.8vw]"></i>
                    <div>
                        <h1 class="text-white funnel font-semibold text-[2vw]">Stock<span class="text-[var(--green-color)] funnel"> Flow</span></h1>
                        <span class="bg-[var(--green-color)] h-[1px] w-full block"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corpo -->
        <main class="overflow-y-auto min-h-[100vh] bg-gray-200">
            <div class="h-[68px] w-screen lg:w-[75.95%] fixed bg-gradient-to-r from-[var(--green-color2)] via-[var(--green-color)] to-[var(--green-color2)]">
                <header class="bg-[#161A1C] flex justify-between items-center h-[64.5px] fixed w-screen lg:w-[75.95%] z-[9999]">
                    <div class="flex items-center space-x-2 ml-6">
                        <h1 class="text-white funnel text-xl font-semibold">Sessão<span class="text-[var(--green-color)] funnel"> Inicial</span></h1>
                        <i class="bi bi-house-fill text-[var(--green-color)] text-xl translate-y-[-2px]"></i>
                    </div>
                    <div class="mr-6 flex items-center space-x-3">
                        <button class="border py-1 px-2 rounded-full border-gray-600 hover:bg-gray-100/10 transition ease-in-out duration-300">
                            <i class="bi bi-brightness-high-fill text-yellow-500"></i>
                        </button>
                        <a href="./login.php">
                            <button class="border border-gray-600 py-2 px-4 rounded-xl flex items-center space-x-2 btnEnter hover:-translate-x-1 transition ease-in-out duration-150 bg-[#193125]/60 btnReturn">
                                <p class="text-[var(--green-color)] inter text-sm font-semibold">Sair</p>
                                <i class="bi bi-box-arrow-in-left text-[var(--green-color)]"></i>
                            </button>
                        </a>
                    </div>
                </header>
            </div>
        </main>
    </div>
</body>
</html>