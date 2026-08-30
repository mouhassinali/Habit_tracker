<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Habit Tracker — Tableau de bord</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-['Manrope',sans-serif] antialiased bg-[#F8F7FC] text-[#241B3A] min-h-screen">

        <div class="flex min-h-screen">

            <!-- SIDEBAR (desktop) -->
            <aside class="hidden md:flex md:flex-col w-72 shrink-0 fixed inset-y-0 left-0 h-screen overflow-y-auto bg-[#1E1147] text-white z-30">
                <div class="px-6 py-7 flex items-center gap-3 border-b border-white/10">
                    <img src="{{ asset('logo.png') }}" alt="Habit Tracker" class="h-10 w-10 object-contain rounded-xl">
                    <span class="font-['Fraunces',serif] font-semibold text-lg">Habit Tracker</span>
                </div>

                <nav class="flex-1 px-4 py-6 space-y-1.5">
                    <a href="{{ route('user.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/10 text-white font-medium border-l-4 border-[#EF4444]">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        Tableau de bord
                    </a>
                    <a href="{{route('user.habits')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:bg-white/10 hover:text-white transition-colors duration-300 border-l-4 border-transparent">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        Mes habitudes
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:bg-white/10 hover:text-white transition-colors duration-300 border-l-4 border-transparent">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Calendrier
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:bg-white/10 hover:text-white transition-colors duration-300 border-l-4 border-transparent">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-8-5v5m4-9v9m-9 3h18a1 1 0 001-1V5a1 1 0 00-1-1H3a1 1 0 00-1 1v11a1 1 0 001 1z"/></svg>
                        Statistiques
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:bg-white/10 hover:text-white transition-colors duration-300 border-l-4 border-transparent">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5z"/></svg>
                        Profil
                    </a>
                </nav>

                <div class="px-4 py-6 border-t border-white/10">
                    <div class="flex items-center gap-3 px-2 mb-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#EF4444] flex items-center justify-center font-semibold text-sm shrink-0">{{substr($user->name, 0, 1)}}</div>
                        <div class="min-w-0">
                            <p class="text-sm font-semibold truncate">{{$user->name}}</p>
                            <p class="text-xs text-white/60 truncate">{{$user->email}}</p>
                        </div>
                    </div>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-white/70 hover:bg-white/10 hover:text-white transition-colors duration-300 text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </aside>

            <!-- COLONNE PRINCIPALE -->
            <div class="flex-1 flex flex-col min-w-0 pb-20 md:pb-0 md:ml-72">

                <!-- TOPBAR -->
                <header class="bg-white border-b border-[#E4DFF5] sticky top-0 z-40">
                    <div class="px-5 md:px-8 h-20 flex items-center justify-between">
                        <div>
                            <p class="font-['Fraunces',serif] font-semibold text-xl">Bonjour, {{$user->name}} 👋</p>
                            <p class="text-sm text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">Mercredi 26 août 2026</p>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="hidden sm:flex items-center gap-1.5 bg-[#EF4444]/10 text-[#EF4444] text-sm font-semibold px-3 py-1.5 rounded-full">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                                4 séries
                            </div>
                            <button class="w-10 h-10 rounded-full border border-[#E4DFF5] flex items-center justify-center text-[#5B4A7A] hover:border-[#7C3AED] hover:text-[#7C3AED] transition-colors duration-300">
                                <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                            </button>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#EF4444] flex items-center justify-center font-semibold text-sm text-white">{{substr($user->name, 0, 1)}}</div>
                        </div>
                    </div>
                </header>

                <!-- CONTENU -->
                <main class="flex-1 px-5 md:px-8 py-8">
                    @yield('content')
                </main>
            </div>
        </div>

        <!-- NAV MOBILE BASSE -->
        <nav class="md:hidden fixed bottom-0 inset-x-0 bg-white border-t border-[#E4DFF5] flex items-center justify-around py-2.5 z-50">
            <a href="#" class="flex flex-col items-center gap-1 text-[#7C3AED] text-xs font-medium">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Accueil
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-[#8B7BAE] text-xs font-medium">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                Habitudes
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-[#8B7BAE] text-xs font-medium">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Calendrier
            </a>
            <a href="#" class="flex flex-col items-center gap-1 text-[#8B7BAE] text-xs font-medium">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5z"/></svg>
                Profil
            </a>
        </nav>

    </body>
</html>