<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | La Palma</title>

    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght=0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght=300;400;500;600&display=swap" rel="stylesheet">

    <script>
        // Configuración de fuentes para Tailwind
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

    <section class="w-screen h-screen bg-cover bg-center relative m-0 p-0" style="background-image: url('/images/Historia2.jpeg');">
        
        <div class="absolute inset-0 bg-black/55 z-0"></div>

        <nav class="absolute top-0 left-0 w-full z-50 px-8 py-6 flex justify-between items-center">
            <h1 class="text-white text-3xl md:text-4xl font-bold font-elegante tracking-wide">
                La Palma
            </h1>

            <div class="flex gap-6 md:gap-10 text-white text-sm md:text-base font-semibold">
                <a href="/" class="text-orange-400 font-bold drop-shadow-sm">Inicio</a>
                <a href="/nosotros" class="hover:text-orange-400 transition">Nosotros</a>
                <a href="/menu" class="hover:text-orange-400 transition">Menú</a>
                <a href="/contacto" class="hover:text-orange-400 transition">Contacto</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">
            <p class="tracking-[8px] text-stone-200 text-xs md:text-sm mb-4 font-semibold uppercase">
                Nochistlán de Mejía, Zacatecas
            </p>
            
            <h1 class="text-white text-7xl md:text-9xl font-bold font-elegante tracking-tight mb-2">
                La Palma
            </h1>
            
            <p class="text-orange-300 italic text-xl md:text-3xl mt-4 font-light max-w-2xl drop-shadow-sm">
                Cocina tradicional en el corazón de Zacatecas
            </p>
        </div>
    </section>

    </body>
</html>