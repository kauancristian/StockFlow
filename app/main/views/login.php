<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Stock Flow | Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allura&family=Anton&family=Assistant:wght@200..800&family=Bangers&family=Bebas+Neue&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Comfortaa:wght@300..700&family=Epilogue:ital,wght@0,100..900;1,100..900&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Funnel+Display:wght@300..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lilita+One&family=Love+Ya+Like+A+Sister&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Oxanium:wght@200..800&family=Passion+One:wght@400;700;900&family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rock+Salt&family=Smooch+Sans:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Space+Grotesk:wght@300..700&family=Vina+Sans&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --green-color: #26D968;
            --green-color2: #26ae58;
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

        .btnSelect{
            background-color: #161A1C;
            border: 2px solid var(--green-color);
            font-weight: 700;
            color: var(--green-color);
        }

        label{
            pointer-events: none;
        }

        input:focus ~ label, 
        input:not(:placeholder-shown) ~ label{
            transform: translateY(-17px);
            font-size: 11px;
            transition: 0.2s ease-in-out;
            color: var(--green-color);
        }

        .btnReturn{
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btnReturn::after{
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

        .btnReturn:hover::after{
            transform: translate(-50%, -50%) scale(1);
        }

        @keyframes prenchAnimation {
            0%{
                transform: translateY(-15px);
                opacity: 0;
            }

            100%{
                transform: translateY(0px);
                opacity: 1;
            }
        }

        #modalPreenchimento{
            animation: prenchAnimation 1s ease-in-out ;
        }

        .btnSpecial{
            position: relative;
            overflow: hidden;
        }

        .btnSpecial::after{
            content: "";
            position: absolute;
            height: 100%;
            width: 75%;
            left: -100%;
            top: 0;
            background-image: linear-gradient(120deg, transparent, #ffffff3d, transparent);
            transition: left 0.6s ease-in-out;
        }

        .btnSpecial:hover::after{
            left: 100%;
        }
    </style>
</head>
<body class="bg-gradient-to-l from-[var(--colorBg1)] to-[var(--colorBg2)] min-h-[100vh]">

    <div id="shadow" class="bg-black h-screen inset-0 opacity-80 absolute z-50 hidden"></div>
    <!-- Modal de Preenchimento -->
    <div id="modalPreenchimento" class="flex justify-center items-center h-screen z-[9999] relative hidden">
        <div class="bg-[#161A1C] w-[300px] border border-gray-700 rounded-lg border-l-4 border-l-[var(--green-color)] p-2 flex flex-col items-center justify-center gap-2 absolute z-[9999] drop-shadow-[0_0_5px_#26D968]">
            <i class="bi bi-ban text-white text-2xl"></i>
            <p class="text-center text-gray-400 inter">Preencha os campos vazios!</p>
            <button id="btnPreencher" class="w-[90%] bg-[var(--green-color)] text-white font-semibold inter py-1.5 rounded-lg flex justify-center btnSpecial">Preencher</button>
        </div>
    </div>

    <div class="h-screen">
        <header class="bg-[#161A1C]/80 flex justify-between items-center h-[65px] fixed w-screen border-b border-b-[#262626] z-[500]">
            <div class="flex items-center space-x-2 ml-6">
                <h1 class="text-white funnel text-xl font-semibold">Stock<span class="text-[var(--green-color)] funnel"> Flow</span></h1>
                <i class="bi bi-box-seam-fill text-[var(--green-color)] text-xl"></i>
            </div>

            <div class="mr-5">
                <a href="../index.php">
                    <button class="bg-[#193125]/60 rounded-xl py-2 px-4 border border-gray-600 hover:-translate-x-1 transition ease-in-out duration-150 btnReturn">
                        <i class="bi bi-arrow-left text-[var(--green-color)]"></i>
                    </button>
                </a>
            </div>
        </header>

        <div id="modalform" class="left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 m-auto fixed w-[90%] sm:w-[460px] h-[480px] sm:h-[470px] rounded-2xl bg-[#161A1C] border border-gray-700 overflow-y-auto">
            <div class="text-center flex flex-col items-center pt-8 space-y-2">
                <div class="flex flex-col items-center space-y-2">
                    <i class="bi bi-person-fill text-5xl text-[var(--green-color)]"></i>
                    <h1 id="TitleForm" class="text-[var(--green-color)] inter font-semibold text-xl">Login</h1>
                </div>

                <p id="legendForm" class="text-gray-400 px-6 text-sm">É bom lhe ver denovo! Vamos lá retornar aos trabalhos.</p>

                <div class="w-[87%] flex items-center gap-4 bg-[#1f262a] rounded-xl text-gray-400 p-2">
                    <button id="btnLogin" class="w-[50%] py-1 rounded-lg btnSelect btnForms">
                        <p class="inter">Login</p>
                    </button>

                    <button id="btnCad" class="w-[50%] py-1 rounded-lg btnForms">
                        <p class="inter">Cadastro</p>
                    </button>
                </div>
            </div>

            <!-- Form Login -->
            <form novalidate id="formLogin" class="flex flex-col w-[87%] mx-auto pt-4 gap-5 forms" action="" method="POST">
                <div class="w-full flex items-center relative">
                    <i class="bi bi-envelope-fill absolute text-[var(--green-color)]"></i>
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-6 transition ease-in-out duration-300 inputsLogin" type="email" name="email" id="" placeholder="" maxlength="100">
                    <label class="absolute ml-6 text-gray-400 inter transition ease-in-out duration-300" for="">Email</label>
                </div>

                <div class="w-full flex items-center relative">
                    <i class="bi bi-key-fill absolute text-[var(--green-color)]"></i>
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-6 transition ease-in-out duration-300 inputsLogin" type="password" name="senha" id="" placeholder="" minlength="6" maxlength="30">
                    <label class="absolute ml-6 text-gray-400 inter transition ease-in-out duration-300" for="">Senha</label>
                </div>

                <button class="text-white font-semibold bg-[var(--green-color)] py-2 rounded-lg hover:bg-[var(--green-color2)] transition ease-in-out duration-300 flex items-center justify-center space-x-2 group">
                    <p class="inter">Acessar Sistema</p>
                    <i class="bi bi-box-arrow-in-right group-hover:translate-x-1 transition ease-in-out duration-300"></i>
                </button>

                <p class="text-center text-gray-400">
                    <i class="bi bi-question-circle text-sm"></i> Precisando de Ajuda? <a class="text-white font-semibold" href="">Contate-nos</a>
                </p>
            </form>

            <!-- Form Cad -->
            <form novalidate id="formCad" class="hidden flex flex-col w-[87%] mx-auto pt-4 gap-5 forms" action="" method="POST">

                <div class="w-full flex items-center relative">
                    <i class="bi bi-person-fill absolute text-[var(--green-color)]"></i>
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-6 transition ease-in-out duration-300 inputsCad" type="text" name="nome" id="" placeholder="" maxlength="100">
                    <label class="absolute ml-6 text-gray-400 inter transition ease-in-out duration-300" for="">Nome</label>
                </div>
                
                <div class="w-full flex items-center relative">
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-0 transition ease-in-out duration-300 inputsCad" type="text" name="cpf" id="inpCpf" placeholder="" minlength="14" maxlength="14">
                    <label class="absolute ml-0 text-gray-400 inter transition ease-in-out duration-300" for="">CPF</label>
                </div>

               <div class="w-full flex items-center relative">
                    <i class="bi bi-envelope-fill absolute text-[var(--green-color)]"></i>
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-6 transition ease-in-out duration-300 inputsCad" type="email" name="email" id="" placeholder="" maxlength="100">
                    <label class="absolute ml-6 text-gray-400 inter transition ease-in-out duration-300" for="">Email</label>
                </div>

                <div class="w-full flex items-center relative">
                    <i class="bi bi-key-fill absolute text-[var(--green-color)]"></i>
                    <input class="py-2 bg-transparent outline-none border-b border-b-gray-400 text-white w-full indent-6 transition ease-in-out duration-300 inputsCad" type="password" name="senha" id="" placeholder="" minlength="6" maxlength="30">
                    <label class="absolute ml-6 text-gray-400 inter transition ease-in-out duration-300" for="">Senha</label>
                </div>

                <button class="text-white font-semibold bg-[var(--green-color)] py-2 rounded-lg hover:bg-[var(--green-color2)] transition ease-in-out duration-300 flex items-center justify-center space-x-2 group">
                    <p class="inter">Verificar Primeiro Acesso</p>
                    <i class="bi bi-key-fill group-hover:translate-x-1 transition ease-in-out duration-300"></i>
                </button>

                <p class="text-center text-gray-400 pb-12">
                    <i class="bi bi-question-circle text-sm"></i> Precisando de Ajuda? <a class="text-white font-semibold" href="">Contate-nos</a>
                </p>
            </form>
        </div>
    </div>

    <script>

        window.onload = () => {
            document.getElementById("formCad").reset();
            document.getElementById("inpCpf").reset();
        };

        window.onload = () => {
            document.getElementById("formLogin").reset();
        };

        const textsForms = [
            {
                title: 'Login',
                legend: 'É bom lhe ver denovo! Vamos lá retornar aos trabalhos.'
            },

            {
                title: 'Cadastro',
                legend: 'Seja bem vindo! Vamos lá começar os trabalhos.'
            }
        ]

        const btnForms = document.querySelectorAll(".btnForms");
        const TitleForm = document.getElementById("TitleForm");
        const legendForm = document.getElementById("legendForm");
        const forms = document.querySelectorAll(".forms");

        btnForms.forEach((btn, index) => {
            btn.onclick = () => {
                btnForms.forEach((btn) => btn.classList.remove("btnSelect"));
                btn.classList.add("btnSelect");

                TitleForm.textContent = textsForms[index].title;
                legendForm.textContent = textsForms[index].legend;

                forms.forEach((form) => form.classList.add("hidden"));
                forms[index].classList.remove("hidden");
            }
        });

        const formLogin = document.getElementById("formLogin");
        const formCad = document.getElementById("formCad");

        const inputsLogin = document.querySelectorAll(".inputsLogin");
        const inputsCad = document.querySelectorAll(".inputsCad");

        formLogin.onsubmit = (e) => {
            let hasError = false;

            inputsLogin.forEach((inputLogin) => {
                if(inputLogin.value.trim().length === 0) {
                    hasError = true;
                };
            });

            if(hasError) {
                e.preventDefault();
                document.getElementById("shadow").classList.remove("hidden");
                document.getElementById("modalPreenchimento").classList.remove("hidden");
            };
        };

        formCad.onsubmit = (e) => {
            let hasError = false;
            
            inputsCad.forEach((inputCad) => {
                if(inputCad.value.trim().length === 0) {
                    hasError = true;
                };
            });

            if(hasError) {
                e.preventDefault();
                document.getElementById("shadow").classList.remove("hidden");
                document.getElementById("modalPreenchimento").classList.remove("hidden");
            }
        };

        document.getElementById("btnPreencher").onclick = () => {
            document.getElementById("shadow").classList.add("hidden");
            document.getElementById("modalPreenchimento").classList.add("hidden");
        };

        const inpCpf = document.getElementById("inpCpf");
        inpCpf.oninput = () => {
            value = inpCpf.value.trim().replace(/\D/g, '');

            if(value.length > 3 && value.length <= 6) {
                value = value.slice(0,3) + '.' + value.slice(3);
            }else if(value.length > 6 && value.length <= 9) {
                value = value.slice(0,3) + '.' + value.slice(3,6) + '.' + value.slice(6);
            }else if(value.length > 9) {
                value = value.slice(0,3) + '.' + value.slice(3,6) + '.' + value.slice(6,9) + '-' + value.slice(9,11);
            };

            inpCpf.value = value;
        };
    </script>

    <script>
        ScrollReveal().reveal('#modalform', {
            origin: 'top',
            distance: '40px',
            duration: 600,
            delay: 200,
            easing: 'ease-in-out',
        });
    </script>
</body>
</html>