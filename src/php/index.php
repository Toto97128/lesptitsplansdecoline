<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LesPtitsPlansdeColine</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&family=Marcellus&family=Overpass:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/script_nav2.js"></script>
    <script src="../js/script_load_img2.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main_output.css" />
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Caroussel -->
    <?php include 'header.php'; ?>
    <script>
        const slideshow = () => ({
            current: 0,
            images: [
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_17.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_21.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_02.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_06.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_12.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_13.jpg', 
                '../img/carroussel/2022.05.02 - HUN_RDV 5_dossier de conception_Page_16.jpg'
            ]
        });
    </script>
    <div x-data="slideshow()" class="w-full h-screen relative z-20 -mt-32 px-12 flex items-center justify-center bg-green-900">
        <div class="h-full w-full absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-30"></div>
        <div class="relative z-10 text-center px-12">
            <h1 class="md:max-w-lg lg:max-w-lg xl:max-w-2xl mx-auto text-3xl lg:text-4xl xl:text-5xl font-black leading-relaxed lg:leading-relaxed xl:leading-normal text-white font-display [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]">Bienvenue sur Les ptits plans de Coline</h1>
            <div class="max-w-xs md:max-w-sm lg:max-w-md mx-auto mt-8 text-white text-sm lg:text-base lg:leading-loose tracking-wide  [text-shadow:_0_2px_0_rgb(0_0_0_/_40%)]">
                <p>Des idées et un accompagnement pour votre projet de rénovation</p>
            </div>
        </div>
        <img x-bind:src="images[current]" class="absolute top-0 left-0 w-full h-full object-cover opacity-90">
        <div class="absolute z-20 top-1/2 left-0 w-full flex items-center justify-between px-6 md:px-12">
            <button x-on:click="current = current > 0 ? current - 1 : images.length - 1" class="hover:opacity-50">
                <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
            </button>
            <button x-on:click="current = current < images.length - 1 ? current + 1 : 0" class="hover:opacity-50">
                <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Vos besoins -->
    <section class="section1" id=besoins>
        <div class="relative z-20 flex justify-center items-center flex-wrap h-full overflow-hidden p-10">
            <h1 class="uppercase font-bold text-2xl items-center z-30 pb-10 [text-shadow:_1px_2.5px_0px_rgb(0_0_0_/_40%)]">VOUS AVEZ BESOIN DE :</h1>
            <div class="flex justify-center relative z-20 w-full grid md:grid-cols-3 grid-cols-2 gap-4 place-items-end">
                <div class="shadow-2xl">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/Visualiser_le_projet.webp" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 1 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">VISUALISER VOTRE PROJET</h3>
                </div>

                <div class="shadow-2xl shadow-grey-400">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/PRENDRE_DES_DECISIONS.jpg" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 2 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">PRENDRE DES DECISIONS</h3>
                </div>

                <div class="shadow-2xl shadow-grey-400">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/COMMUNIQUER_AVEC_VOS_ARTISANS.png" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 3 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">COMMUNIQUER AVEC VOS ARTISANS</h3>
                </div>

                <div class="shadow-2xl shadow-grey-400">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/PLANIFIER_VOS_TRAVAUX.jpg" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 4 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">PLANIFIER VOS TRAVAUX</h3>
                </div>

                <div class="shadow-2xl shadow-grey-400">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/ESTIMER_LES_COÛTS.jpg" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 5 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">ESTIMER LES COÛTS</h3>
                </div>

                <div class="shadow-2xl shadow-grey-400">
                    <div class="relative mb-5">
                        <div class="p-50 border-8 border-teal-400">
                            <img src="../img/EVITER_LES_ERREURS_COUTEUSES.jpg" class="object-cover">
                        </div>
                        <div class="flex justify-center">
                            <div class="w-1 h-4 bg-teal-400 -mb-6"></div>
                        </div>
                        <div class="absolute top-0 px-4 py-3  border-8 border-teal-400 rounded-br-[40px]">
                            <h1 class="text-teal-400 font-bold text-4xl [text-shadow:_0_3px_0_rgb(0_0_0_/_40%)]"> 6 </h1>
                        </div>
                    </div>
                    <h3 class="text-xs uppercase tracking-tighter text-center font-bold">EVITER LES ERREURS COUTEUSES</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Présentation -->
    <!-- <section class="bg-cover" style="background-image: url(img/Fonds/fond_noir_pique.jpg);" id=presentation> -->
    <section class="section2" id=presentation>
        <h1 class="uppercase font-bold text-2xl text-center text-white z-30 pt-10 [text-shadow:_1px_2.5px_0px_rgb(255_255_255_/_30%)]">PRESENTATION</h1>
        <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto">
            <!--Main Col-->
            <div id="profile" class="w-full lg:w-3/5 rounded-lg shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                <div class="p-4 md:p-12 text-left">
                    <!-- Image for mobile view-->
                    <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('../img/Portrait.jpeg')"></div>
                    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Coline Tesson</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-blue-500 opacity-25"></div>
                    <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-blue-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                        </svg> Architecte d'intérieur</p>
                    <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-blue-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z" />
                        </svg> Guadeloupe-Gosier</p>
                    <p class="pt-8 text-justify indent-8">
                        Je m'appelle Coline Tesson, je suis architecte d'intérieur - diplôme reconnu par le CFAI. Grâce à de nombreuses années d'expériences, je mets mes compétences à votre service pour la rénovation de votre maison / appartement.
                        Ma démarche est simple, vous aider à avoir les bons outils pour un résultat conforme à vos exigences. Que ce soit pour une rénovation complète ou partielle, je vous accompagne durant la phase de dessin.
                    </p>
                    <p> </p>
                    <p class=indent-8>Les ptits plans de Coline peut vous servir à :</p>
                    <p>- Constater la faisabilité de vos idées</p>
                    <p>- Recevoir des conseils professionnels</p>
                    <p>- Obtenir un dossier de plans complet</p>
                    <p>- Transmettre à vos artisans des plans précis</p>

                    <div class="pt-12 pb-8">
                        <a href="#contact" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
                            Rentrer en contact
                        </a>
                    </div>

                    <div class="flex items-center justify-center ">
                        <div class="flex items-center justify-center gap-x-5 ">
                            <a href="" aria-label="Find us on LinkedIn" target="_blank" rel="noopener">
                                <svg class="h-8 fill-current text-gray-600 hover:text-blue-700" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.45 0H3.55A3.5 3.5 0 0 0 0 3.46v41.07A3.5 3.5 0 0 0 3.54 48h40.9A3.51 3.51 0 0 0 48 44.54V3.46A3.5 3.5 0 0 0 44.45 0Zm-30.2 40.9H7.11V18h7.12v22.9Zm-3.57-26.03a4.13 4.13 0 1 1-.02-8.26 4.13 4.13 0 0 1 .02 8.26ZM40.9 40.9H33.8V29.77c0-2.66-.05-6.08-3.7-6.08-3.7 0-4.27 2.9-4.27 5.89V40.9h-7.1V18h6.82v3.12h.1c.94-1.8 3.26-3.7 6.72-3.7 7.21 0 8.54 4.74 8.54 10.91V40.9Z" fill="currentColor"></path>
                                </svg>

                            </a>
                            <a href="" aria-label="Find us on Instagram" target="_blank" rel="noopener">
                                <svg class="h-8 fill-current text-gray-600 hover:text-blue-700" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 4.32c6.41 0 7.17.03 9.7.14 2.34.1 3.6.5 4.45.83 1.11.43 1.92.95 2.75 1.79a7.38 7.38 0 0 1 1.8 2.75c.32.85.72 2.12.82 4.46.11 2.53.14 3.29.14 9.7 0 6.4-.03 7.16-.14 9.68-.1 2.35-.5 3.61-.83 4.46a7.42 7.42 0 0 1-1.79 2.75 7.38 7.38 0 0 1-2.75 1.8c-.85.32-2.12.72-4.46.82-2.53.11-3.29.14-9.69.14-6.41 0-7.17-.03-9.7-.14-2.34-.1-3.6-.5-4.45-.83a7.42 7.42 0 0 1-2.75-1.79 7.38 7.38 0 0 1-1.8-2.75 13.2 13.2 0 0 1-.82-4.46c-.11-2.53-.14-3.29-.14-9.69 0-6.41.03-7.17.14-9.7.1-2.34.5-3.6.83-4.45A7.42 7.42 0 0 1 7.1 7.08a7.38 7.38 0 0 1 2.75-1.8 13.2 13.2 0 0 1 4.46-.82c2.52-.11 3.28-.14 9.69-.14ZM24 0c-6.52 0-7.33.03-9.9.14-2.54.11-4.3.53-5.81 1.12a11.71 11.71 0 0 0-4.26 2.77 11.76 11.76 0 0 0-2.77 4.25C.66 9.8.26 11.55.14 14.1A176.6 176.6 0 0 0 0 24c0 6.52.03 7.33.14 9.9.11 2.54.53 4.3 1.12 5.81a11.71 11.71 0 0 0 2.77 4.26 11.73 11.73 0 0 0 4.25 2.76c1.53.6 3.27 1 5.82 1.12 2.56.11 3.38.14 9.9.14 6.5 0 7.32-.03 9.88-.14 2.55-.11 4.3-.52 5.82-1.12 1.58-.6 2.92-1.43 4.25-2.76a11.73 11.73 0 0 0 2.77-4.25c.59-1.53 1-3.27 1.11-5.82.11-2.56.14-3.38.14-9.9 0-6.5-.03-7.32-.14-9.88-.11-2.55-.52-4.3-1.11-5.82-.6-1.6-1.41-2.94-2.75-4.27a11.73 11.73 0 0 0-4.25-2.76C38.2.67 36.45.27 33.9.15 31.33.03 30.52 0 24 0Z" fill="currentColor"></path>
                                    <path d="M24 11.67a12.33 12.33 0 1 0 0 24.66 12.33 12.33 0 0 0 0-24.66ZM24 32a8 8 0 1 1 0-16 8 8 0 0 1 0 16ZM39.7 11.18a2.88 2.88 0 1 1-5.76 0 2.88 2.88 0 0 1 5.75 0Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Img Col-->
            <div class="w-full lg:w-2/5">
                <!-- Big profile image for side bar (desktop) -->
                <img src="../img/Portrait.jpeg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
            </div>
            <!-- Pin to top right corner -->
            <div class="absolute top-0 right-0 h-12 w-18 p-4">
                <button class="js-change-theme focus:outline-none">🌙</button>
            </div>
        </div>
    </section>

    <!-- Projets -->
    <section class="section1 min-h-screen" id="Projets">
        <div class="px-12 py-12 flex items-center">
            <div class="hidden md:block w-3/12"></div>
            <div class="flex-1 relative">
                <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">PROJETS</h2>
                <p class="font-serif text-black text-base md:text-xl max-w-2xl leading-loose text-justify">Explorez
                    notre portfolio , une vitrine d'espaces transformés avec élégance et fonctionnalité. De la création
                    de visuel 3D à la personnalisation de chaque détail, découvrez comment chaque projet raconte une histoire
                    unique. Bienvenue dans un monde où la créativité rencontre la réalité.</p>
                <span class="absolute top-0 left-0 w-4 h-full bg-rouge -ml-20"></span>
            </div>
        </div>
        <div class="project_card grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" id="projects-grid">
            <!-- Les éléments de projet seront injectés ici -->
        </div>
    </section>
 
    <section class="section2" id="contact">
        <h1 class="uppercase font-bold text-2xl text-center z-30 pt-10">Ecrivons ensemble de nouvelles histoires</h1>
        <div class="max-w-6xl mx-auto my-6 font-[sans-serif] text-[#011c2b]">
            <div class="text-center px-6">
                <p class="text-blue-400 mt-3">Vous avez un projet et vous souhaitez obtenir des renseignements ? </p>
                <p class="text-blue-400 mt-3">Je vous invite à compléter ce formulaire, je reviendrai vers vous très prochainement. </p>
            </div>
            <div class="grid lg:grid-cols-3 items-center gap-4 p-2 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-lg mt-8">
                <div class="bg-[#011c2b] rounded-lg p-6 max-lg:text-center">
                    <h2 class="text-2xl text-white">Contact Information</h2>
                    <ul class="mt-16 space-y-10">
                        <li class="flex items-center max-lg:justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' viewBox="0 0 479.058 479.058">
                                <path d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" data-original="#000000" />
                            </svg>
                            <a href="javascript:void(0)" class="text-white ml-3">
                                <strong>lesptitsplansdecoline@gmail.com</strong>
                            </a>
                        </li>
                        <li class="flex items-center max-lg:justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' viewBox="0 0 482.6 482.6">
                                <path d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z" data-original="#000000"></path>
                            </svg>
                            <a href="javascript:void(0)" class="text-white ml-3">
                                <strong>06 81 95 84 12</strong>
                            </a>
                        </li>
                        <li class="flex items-center max-lg:justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' viewBox="0 0 368.16 368.16">
                                <path d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z" data-original="#000000"></path>
                                <path d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z" data-original="#000000"></path>
                            </svg>
                            <a href="javascript:void(0)" class="text-white ml-3">
                                <strong>Guadeloupe Gosier</strong>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex max-lg:justify-center mt-16 space-x-4">
                        <li class="bg-blue-800 hover:bg-blue-900 h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff' viewBox="0 0 24 24">
                                    <path d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z" data-original="#000000" />
                                </svg>
                            </a>
                        </li>
                        <li class="bg-blue-800 hover:bg-blue-900 h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff' viewBox="0 0 511 512">
                                    <path d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0" data-original="#000000" />
                                </svg>
                            </a>
                        </li>
                        <li class="bg-blue-800 hover:bg-blue-900 h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff' viewBox="0 0 24 24">
                                    <path d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Formulaire de contact -->
                <div class="p-6 rounded-xl lg:col-span-2">
                    <form action="send_mail.php" method="post">
                        <div class="grid sm:grid-cols-2 gap-8">
                            <!-- ... (les autres champs de formulaire) ... -->
                            <div class="relative flex items-center">
                                <input type="text" name="prenom" placeholder="Prénom" class="px-2 py-3 bg-white w-full text-sm border-b-2 focus:border-[#011c2b] outline-none" required>
                            </div>
                            <div class="relative flex items-center">
                                <input type="text" name="nom" placeholder="Nom" class="px-2 py-3 bg-white w-full text-sm border-b-2 focus:border-[#011c2b] outline-none" required>
                            </div>
                            <div class="relative flex items-center">
                                <input type="email" name="email" placeholder="Email" class="px-2 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-[#011c2b] outline-none" required>
                            </div>
                            <!-- ... (les autres champs de formulaire) ... -->
                            <div class="col-span-full">
                                <textarea name="message" placeholder="Message" class="px-2 pt-3 bg-white text-black w-full text-sm border-b-2 focus:border-[#011c2b] outline-none" required></textarea>
                            </div>
                            <!-- ... (les autres champs de formulaire) ... -->
                        </div>
                        <div class="col-span-full">
                            <h6 class="text-blue-400">Sélectionner un Sujet</h6>
                            <div class="flex max-lg:flex-col lg:space-x-6 max-lg:space-y-6">
                                <div class="flex items-center mt-3">
                                    <input id="radio1" type="radio" name="value1" class="hidden peer" checked />
                                    <label for="radio1" class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                        <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                    </label>
                                    <p class="text-sm ml-3">Premier contact</p>
                                </div>
                                <div class="flex items-center mt-3">
                                    <input id="radio2" type="radio" name="value1" class="hidden peer" />
                                    <label for="radio2" class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                        <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                    </label>
                                    <p class="text-sm ml-3">Devis</p>
                                </div>
                                <div class="flex items-center mt-3">
                                    <input id="radio3" type="radio" name="value1" class="hidden peer" />
                                    <label for="radio3" class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                        <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                    </label>
                                    <p class="text-sm ml-3">Questions générales</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mt-12 flex items-center justify-center text-sm lg:ml-auto max-lg:w-full rounded px-4 py-2.5 font-semibold bg-[#011c2b] text-white hover:bg-[#011c2bf3]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2" viewBox="0 0 548.244 548.244">
                                <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                            </svg>
                            Envoyer le Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- ... (le reste de votre code) ... -->
    </section>


    <!-- Footer -->
    <?php include 'footer.php'; ?>