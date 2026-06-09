<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú | La Palma</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fuente-elegante { font-family: 'Playfair Display', serif; }
    </style>
</head>

<body class="bg-[#f5f2ee] overflow-x-hidden text-slate-800">

    <section class="min-h-[65vh] md:h-[70vh] bg-cover bg-center relative flex flex-col justify-between" style="background-image: url('/images/Historia2.jpeg');">
        <div class="absolute inset-0 bg-black/60"></div>

        <nav class="relative w-full z-50 px-6 py-6 flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="text-white text-2xl md:text-3xl font-bold tracking-wide fuente-elegante">
                La Palma
            </h1>

            <div class="flex flex-wrap justify-center gap-4 md:gap-10 text-white text-sm md:text-base font-medium">
                <a href="/" class="hover:text-orange-300 transition">Inicio</a>
                <a href="/nosotros" class="hover:text-orange-300 transition">Nosotros</a>
                <a href="/menu" class="text-orange-400 font-semibold drop-shadow-sm">Menú</a>
                <a href="/contacto" class="hover:text-orange-300 transition">Contacto</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col justify-center items-center flex-grow text-center px-6 py-12">
            <p class="tracking-[4px] md:tracking-[6px] text-orange-300 text-xs md:text-sm font-semibold mb-3">
                RESTAURANTE LA PALMA
            </p>
            <h2 class="text-white text-4xl md:text-8xl font-bold tracking-tight fuente-elegante">
                Nuestro Menú
            </h2>
            <p class="text-stone-200 italic text-base md:text-2xl mt-4 max-w-xl font-light">
                Tradición, sabor y pasión desde 2004
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-[#fdf5ee] border border-orange-100 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/desayuno.jpg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Desayunos">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#8a4214] mb-6 text-center fuente-elegante">
                        Desayunos
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-200/40">
                        <li class="pt-2 text-center hover:text-orange-600 transition">Omelette</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Chilaquiles</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Huevos al gusto</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Quesadillas</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Burritos</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Gorditas rellenas</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Jugos naturales</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#fbf0e9] border border-orange-200/60 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/carnes.jpeg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Carnes">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#913d1b] mb-6 text-center fuente-elegante">
                        Carnes
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-300/30">
                        <li class="pt-2 text-center hover:text-orange-700 transition">Fajitas de res</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Tampiqueña</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Carne asada</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Bistec picado</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Chuleta ahumada</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Milanesa de res</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#fcf3ea] border border-orange-100 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/mole.jpeg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Especialidades">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#8f4f18] mb-6 text-center fuente-elegante">
                        Especialidades
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-200/40">
                        <li class="pt-2 text-center hover:text-orange-600 transition">Molcajete Zacatecano</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Fajitas mixtas</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Arrachera</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Molcajete de arrachera y camarón</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Filete norteño</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Mole estilo Las Ánimas</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#fdf4ed] border border-orange-100 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/mariscos.jpeg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Mariscos">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#944616] mb-6 text-center fuente-elegante">
                        Mariscos
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-200/40">
                        <li class="pt-2 text-center hover:text-orange-600 transition">Camarones empanizados</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Camarones a la diabla</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Camarones al mojo de ajo</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Camarones gratinados</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Aguachile</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Torre de mariscos</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#faf1e9] border border-orange-200/50 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/mojarr.jpeg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Filetes y Pescados">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#8e3f1b] mb-6 text-center fuente-elegante">
                        Filetes y Pescados
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-300/30">
                        <li class="pt-2 text-center hover:text-orange-700 transition">Filete empanizado</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Filete a la diabla</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Filete al mojo de ajo</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Filete a la plancha</li>
                        <li class="pt-2 text-center hover:text-orange-700 transition">Mojarra dorada</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#fdf6ee] border border-orange-100 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/images/antojo.jpeg" class="w-full h-full object-cover transform hover:scale-105 transition duration-500" alt="Antojitos">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-[#8c4b11] mb-6 text-center fuente-elegante">
                        Antojitos
                    </h3>
                    <ul class="space-y-3 text-base text-stone-600 divide-y divide-orange-200/40">
                        <li class="pt-2 text-center hover:text-orange-600 transition">Tacos dorados</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Enchiladas</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Hamburguesa de res</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Hamburguesa de pollo</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Tostada de jamón</li>
                        <li class="pt-2 text-center hover:text-orange-600 transition">Papas a la francesa</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-[#1f0e08] text-stone-400 py-12 text-center text-sm border-t border-stone-900">
        <p class="fuente-elegante text-white text-base mb-2">Restaurante La Palma</p>
        <p>© 2026 — Nochistlán de Mejía, Zacatecas. Todos los derechos reservados.</p>
    </footer>

</body>
</html>