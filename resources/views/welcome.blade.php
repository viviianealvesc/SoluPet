<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
                    <header class="flex justify-between px-6 py-2 shadow-lg items-center gap-2 lg:grid-cols-3">
                        <div class="flex ">
                            <img class="w-24" src="./image/logo.png" alt="Logo">
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Entrar
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Registrar-se
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="lg:flex lg:justify-between lg:items-center">
                            <div class=" lg:w-3/5 px-6">
                                <p class="text-xl"><strong>
                                    Sistema avançado de gerenciamento de dados para Clínicas         Veterinárias, com interface intuitiva e funcionalidades abrangentes</strong></strong>
                                </p>
                                <p class="mb-7">
                                    Registre-se agora para simplificar a gestão da sua clínica veterinária com o SOLUPET. Otimize suas operações e ofereça um cuidado ainda melhor aos seus pacientes peludos!
                                <p>
                                    <a class="bg-[#6C63FF] p-3 px-11 rounded-lg hover:ring transition text-white" href="">Quero me registrar</a>
                            </div>
                                
                            <div class="flex justify-center">
                                <img class="w-[500px]" src="./image/dog.png" alt="Menina" width="30000px">
                            </div>  
                        </div>
                    </main>

                    
                </div>
            </div>
        </div>
    </body>
</html>
