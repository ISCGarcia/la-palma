<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | La Palma</title>

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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0"></script>

    <section class="h-[60vh] bg-cover bg-center relative" style="background-image: url('/images/Entrada2.jpeg');">
        
        <div class="absolute inset-0 bg-black/60 z-0"></div>

        <nav class="absolute top-0 left-0 w-full z-50 px-8 py-6 flex justify-between items-center">
            <h1 class="text-white text-3xl md:text-4xl font-bold font-elegante tracking-wide">
                La Palma
            </h1>

            <div class="flex gap-6 md:gap-10 text-white text-sm md:text-base font-semibold">
                <a href="/" class="hover:text-orange-400 transition">Inicio</a>
                <a href="/nosotros" class="hover:text-orange-400 transition">Nosotros</a>
                <a href="/menu" class="hover:text-orange-400 transition">Menú</a>
                <a href="/contacto" class="text-orange-400 font-bold drop-shadow-sm">Contacto</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">
            <p class="tracking-[8px] text-orange-300 text-xs md:text-sm mb-4 font-semibold uppercase">
                Estamos para servirte
            </p>
            <h1 class="text-white text-5xl md:text-7xl font-bold font-elegante tracking-tight">
                Ponte en Contacto
            </h1>
        </div>
    </section>

    <section class="bg-[#2b140c] text-stone-300 py-16 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
            
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-orange-500/10 flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white font-elegante mb-2">Ubicación</h3>
                <p class="text-sm leading-relaxed">Centro Histórico<br>Nochistlán de Mejía, Zacatecas.<br>C.P. 99900</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-orange-500/10 flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white font-elegante mb-2">Teléfono</h3>
                <p class="text-sm leading-relaxed">346-713-2040<br><span class="text-orange-400 font-medium">Reservaciones disponibles</span></p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-orange-500/10 flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white font-elegante mb-2">Horario</h3>
                <p class="text-sm leading-relaxed">Todos los días:<br>9:00 AM – 6:00 PM</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-orange-500/10 flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L22 8m-2 10a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h12a2 2 0 012 2v10z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white font-elegante mb-2">Correo</h3>
                <p class="text-sm text-orange-300 break-all">contacto@lapalma-nochistlan.com</p>
            </div>

        </div>
    </section>

    <section class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-12 gap-12 items-start">
            
            <div class="lg:col-span-7 bg-white p-4 rounded-[35px] shadow-xl border border-orange-100">
                <div class="overflow-hidden rounded-[25px] h-[500px]">
                    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.331291823793!2d-102.8550186!3d21.3669145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424b9125fa0a103%3A0xc3f8e562208c0ef7!2sCentro%2C%2099900%20Nochistl%C3%A1n%20de%20Mej%C3%ADa%2C%20Zac.!5e0!3m2!1ses-419!2smx!4v1717000000000!5m2!1ses-419!2smx" 
    class="w-full h-full border-0" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
                </div>
            </div>

            <div class="lg:col-span-5 flex flex-col h-full">
                <div class="mb-6">
                    <p class="uppercase tracking-[4px] text-[#c46b3d] text-xs font-semibold mb-1">En vivo desde Facebook</p>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#2b140c] font-elegante">Nuestras Novedades</h2>
                </div>
                
                <div class="bg-white p-4 rounded-[35px] shadow-xl border border-orange-100 flex justify-center items-center overflow-hidden h-[500px]">
                    <div class="fb-page" 
                        data-href="https://www.facebook.com/profile.php?id=100063554677867" 
                        data-tabs="timeline" 
                        data-width="500" 
                        data-height="460" 
                        data-small-header="false" 
                        data-adapt-container-width="true" 
                        data-hide-cover="false" 
                        data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/profile.php?id=100063554677867" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/profile.php?id=100063554677867">Cargando publicaciones de Facebook...</a>
                        </blockquote>
                    </div>
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