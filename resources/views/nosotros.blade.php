<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | La Palma</title>

    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght=0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght=300;400;500;600&display=swap" rel="stylesheet">

    <script>
        // Configuración de fuentes para que Tailwind las reconozca nativamente
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        elegante: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-[#f7f4f2] overflow-x-hidden text-slate-800 font-sans">

    <section class="h-screen bg-cover bg-center relative" style="background-image: url('/images/Nochistlan.jpg');">
        
        <div class="absolute inset-0 bg-black/60 z-0"></div>

        <nav class="absolute top-0 left-0 w-full z-50 px-8 py-6 flex justify-between items-center">
            <h1 class="text-white text-3xl md:text-4xl font-bold font-elegante tracking-wide">
                La Palma
            </h1>

            <div class="flex gap-6 md:gap-10 text-white text-sm md:text-base font-semibold">
                <a href="/" class="hover:text-orange-400 transition">Inicio</a>
                <a href="/nosotros" class="text-orange-400 font-bold drop-shadow-sm">Nosotros</a>
                <a href="/menu" class="hover:text-orange-400 transition">Menú</a>
                <a href="/contacto" class="hover:text-orange-400 transition">Contacto</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">
            <p class="tracking-[10px] text-orange-300 text-sm md:text-lg mb-4 font-semibold uppercase">
                Nuestra Historia
            </p>
            <h1 class="text-white text-6xl md:text-9xl font-black font-elegante tracking-tight">
                Nosotros
            </h1>
            <p class="text-stone-200 italic text-xl md:text-3xl mt-6 font-light max-w-2xl">
                Tradición, sabor y pasión desde 2004
            </p>
        </div>
    </section>

    <section class="py-24 px-8 bg-[#f7f4f2]">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            
            <div class="overflow-hidden rounded-[35px] shadow-2xl">
                <img src="/images/Historia1.jpeg" class="w-full h-[450px] object-cover hover:scale-102 transition duration-500">
            </div>

            <div>
                <p class="uppercase tracking-[6px] text-[#d45d32] text-sm font-bold mb-3">
                    Restaurante La Palma
                </p>
                <h2 class="text-4xl md:text-5xl font-bold text-[#2b140c] leading-tight font-elegante">
                    Más de 20 años de tradición gastronómica
                </h2>
                
                <div class="w-24 h-1 bg-[#d45d32] my-6"></div>

                <p class="text-base md:text-lg text-[#5f5148] leading-relaxed mb-6 font-light">
                    Restaurante La Palma abrió sus puertas en 2004 en Nochistlán de Mejía, Zacatecas. Con el paso de los años se convirtió en uno de los restaurantes más queridos y reconocidos de la región.
                </p>

                <p class="text-base md:text-lg text-[#5f5148] leading-relaxed font-light">
                    Bajo la dirección de Oscar Meléndrez, La Palma ofrece una amplia variedad de platillos tradicionales, carnes, mariscos y especialidades típicas como el famoso Molcajete Zacatecano.
                </p>
            </div>

        </div>
    </section>

    <section class="py-24 px-6 bg-white">
        
        <div class="text-center mb-16">
            <p class="uppercase tracking-[8px] text-[#c46b3d] text-xs md:text-sm font-semibold mb-2">
                Experiencias
            </p>
            <h2 class="text-3xl md:text-5xl font-bold text-[#2b140c] font-elegante">
                Lo que hace especial a La Palma
            </h2>
        </div>

        <div class="max-w-5xl mx-auto flex flex-col gap-8">

            <div class="flex flex-col md:flex-row items-center bg-[#fdf5ee] border border-orange-100 rounded-[30px] overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="/images/platillo.jpeg" class="w-full md:w-[280px] h-[220px] object-cover">
                <div class="p-8 md:p-10">
                    <h3 class="text-2xl font-bold text-[#7b341e] font-elegante mb-3">
                        Gastronomía tradicional
                    </h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Disfruta de platillos típicos, carnes, mariscos y sabores auténticos de Zacatecas preparados al momento con ingredientes frescos.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center bg-[#fbf0e9] border border-orange-100 rounded-[30px] overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="/images/Comida1.jpg" class="w-full md:w-[280px] h-[220px] object-cover">
                <div class="p-8 md:p-10">
                    <h3 class="text-2xl font-bold text-[#7b341e] font-elegante mb-3">
                        Atención cálida
                    </h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Nuestro equipo ofrece un servicio atento, amable y profundamente cercano para que cada visita se sienta como comer en casa.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center bg-[#fcf3ea] border border-orange-100 rounded-[30px] overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="/images/Historia2.jpeg" class="w-full md:w-[280px] h-[220px] object-cover">
                <div class="p-8 md:p-10">
                    <h3 class="text-2xl font-bold text-[#7b341e] font-elegante mb-3">
                        Servicio a domicilio
                    </h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Llevamos nuestros mejores platillos directamente hasta las puertas de tu hogar con la misma calidad y sazón del restaurante.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-[#1f0e08] text-stone-400 py-12 text-center text-sm border-t border-stone-900">
        <p class="font-elegante text-white text-base mb-2">Restaurante La Palma</p>
        <p>© 2026 — Nochistlán de Mejía, Zacatecas. Todos los derechos reservados.</p>
    </footer>

</body>
</html>