<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Projets</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&family=Marcellus&family=Overpass:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/script_nav2.js"></script>
    <script src="../js/script_projet.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main_output.css" />
</head>

<body class="font-sans antialiased bg-white">
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- / Projet -->
    <div class="size-auto w-full flex items-center justify-start relative pb-100  min-h-screen">
        <div class="w-auto"></div>
        <div class="w-11/12 py-12 relative flex">
            <a href="#" class="block relative z-10 bg-white h-full p-10 w-7/12">
                <h3 class="mb-2 uppercase text-gray-800 text-3xl font-bold tracking-widest">Projet TODO</h3>
                <p class="text-lg md:text-xl font-serif text-gray-400">TEXT TODO1</p>
            </a>
            <!-- <img src="PATH_TODO" class="absolute top-0 right-0 block object-cover border-4 border-teal-400" /> -->
            <img src="PATH_TODO" class="absolute top-0 right-0 border-4 border-teal-400" />
        </div>

        <div class="w-1/12 absolute top-0 right-0 h-full bg-gray-800"></div>
    </div>
    
    <!-- Contenu -->
    <div class="py-24 px-12">
			<div class="container mx-auto flex flex-wrap">
				<div class="w-full md:w-1/2 md:pr-4 flex flex-wrap mb-12 md:mb-0">
					<div class="p-2 w-1/2">
						<img src="PATH_TODO" class="w-full h-64 object-cover">
					</div>
					<div class="p-2 w-1/2">
						<img src="PATH_TODO" class="w-full h-64 object-cover">
					</div>
					<div class="p-2 w-full">
						<img src="PATH_TODO" class="w-full h-64 object-cover">
					</div>
				</div>
				<div class="w-full md:w-1/2 md:pl-4">
					<h2 class="text-4xl mb-10">TEXT_TODO</h2>
					<div class="max-w-lg">
						<p class="mb-6 text-gray-700">TEXT_TODO2</p>
						<p class="mb-6 text-gray-700">TEXT_TODO3</p>
						<p class="mb-10 text-gray-700">TEXT_TODO4</p>
					</div>
				</div>
			</div>

		</div>
    <!-- SPACER / -->
    <div class="w-full h-24 border-black bg-white flex justify-end">
        <div class="w-64 bg-gray-800"></div>
    </div>
    <?php include 'footer.php'; ?>