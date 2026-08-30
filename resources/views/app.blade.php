<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Habit Tracker</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-['Manrope',sans-serif] antialiased bg-[#F8F7FC] text-[#241B3A] flex flex-col min-h-screen">

        <!-- NAVBAR PRINCIPALE -->
        <nav class="w-full bg-white shadow-lg sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">

                    <!-- LOGO -->
                    <a href="{{route('index')}}" class="flex-shrink-0 flex items-center gap-3">
                        <img src="{{ asset('logo.png') }}" alt="Habit Tracker" class="h-12 w-12 object-contain rounded-xl">
                        <span class="font-['Fraunces',serif] font-semibold text-xl"><span class="text-[#7C3AED]">Habit</span> <span class="text-[#EF4444]">Tracker</span></span>
                    </a>

                    <!-- LIENS (Masqués sur mobile, visibles sur écran md+) -->
                    <ul class="hidden md:flex items-center gap-8">
                        <li><a href="{{route('index')}}" class="text-[#241B3A] hover:text-[#7C3AED] transition-colors duration-300 font-medium px-4 py-2">Accueil</a></li>
                        <li><a href="#fonctionnalités" class="text-[#241B3A] hover:text-[#7C3AED] transition-colors duration-300 font-medium px-4 py-2">Fonctionnalités</a></li>
                        <li><a href="https://wa.me/2290169313264" class="text-[#241B3A] hover:text-[#7C3AED] transition-colors duration-300 font-medium px-4 py-2">Contacts</a></li>
                    </ul>

                    <!-- BOUTONS (Masqués sur mobile, visibles sur écran md+) -->
                    <div class="hidden md:flex gap-4 items-center">
                        <a href="{{ route('inscription') }}"><button class="border border-[#E4DFF5] px-4 py-2 rounded-lg text-[#241B3A] hover:bg-[#241B3A] hover:text-white hover:border-[#241B3A] transition-colors duration-300 font-medium">S'inscrire</button></a>
                        <a href="{{ route('connexion') }}"><button class="border border-transparent px-4 py-2 rounded-lg bg-[#EF4444] text-white hover:bg-[#DC2626] transition-colors duration-300 font-medium">Se connecter</button></a>
                    </div>

                    <!-- BOUTON BURGER (À droite sur mobile, masqué sur écran md+) -->
                    <div class="md:hidden flex items-center">
                        <button id="burger-btn" class="text-[#241B3A] hover:text-[#7C3AED] focus:outline-none p-2" aria-label="Menu">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>

            <!-- MENU MOBILE DÉROULANT -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-[#E4DFF5] bg-white px-4 pt-2 pb-4 shadow-inner">
                <ul class="flex flex-col gap-3 my-4">
                    <li><a href="{{route('index')}}" class="block text-center text-[#241B3A] hover:bg-[#241B3A] hover:text-white border border-[#E4DFF5] rounded-lg px-4 py-2 transition-colors duration-300 font-medium">Accueil</a></li>
                    <li><a href="fonctionnalités#" class="block text-center text-[#241B3A] hover:bg-[#241B3A] hover:text-white border border-[#E4DFF5] rounded-lg px-4 py-2 transition-colors duration-300 font-medium">Fonctionnalités</a></li>
                    <li><a href="https://wa.me/2290169313264" class="block text-center text-[#241B3A] hover:bg-[#241B3A] hover:text-white border border-[#E4DFF5] rounded-lg px-4 py-2 transition-colors duration-300 font-medium">Contacts</a></li>
                </ul>
                <div class="flex flex-col gap-3 border-t border-[#E4DFF5] pt-4">
                    <a href="{{ route('inscription') }}"><button class="w-full border border-[#E4DFF5] py-2 rounded-lg hover:bg-[#241B3A] hover:text-white transition-colors duration-300 font-medium">S'inscrire</button></a>
                    <a href="{{ route('connexion') }}"><button class="w-full bg-[#EF4444] text-white py-2 rounded-lg hover:bg-[#DC2626] transition-colors duration-300 font-medium">Se connecter</button></a>
                </div>
            </div>
        </nav>

        <!-- ZONE DE CONTENU -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="w-full mt-auto bg-[#1E1147] text-[#D8CFEF]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-10">

                    <!-- Marque -->
                    <div class="col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <img src="{{ asset('logo.png') }}" alt="Habit Tracker" class="h-9 w-9 object-contain rounded-lg">
                            <span class="text-white font-['Fraunces',serif] font-semibold text-lg">Habit Tracker</span>
                        </div>
                        <p class="text-sm text-[#A996D6] max-w-xs">
                            Petites habitudes, grands changements. L'outil simple pour suivre vos habitudes jour après jour.
                        </p>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="#" aria-label="Twitter" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#EF4444] flex items-center justify-center transition-colors duration-300">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#EF4444] flex items-center justify-center transition-colors duration-300">
                                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5" /><circle cx="12" cy="12" r="4" /><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" /></svg>
                            </a>
                            <a href="#" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#EF4444] flex items-center justify-center transition-colors duration-300">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.11 1 2.48 1s2.5 1.12 2.5 2.5zM.24 8.25h4.48V23H.24V8.25zM8.5 8.25h4.29v2.01h.06c.6-1.13 2.06-2.32 4.24-2.32 4.53 0 5.37 2.98 5.37 6.86V23h-4.48v-6.42c0-1.53-.03-3.5-2.13-3.5-2.14 0-2.47 1.67-2.47 3.39V23H8.5V8.25z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Produit -->
                    <div>
                        <h3 class="text-white font-semibold text-sm uppercase tracking-wide mb-4">Produit</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Fonctionnalités</a></li>
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Tarifs</a></li>
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Nouveautés</a></li>
                        </ul>
                    </div>

                    <!-- Ressources -->
                    <div>
                        <h3 class="text-white font-semibold text-sm uppercase tracking-wide mb-4">Ressources</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Blog</a></li>
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Centre d'aide</a></li>
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Légal -->
                    <div>
                        <h3 class="text-white font-semibold text-sm uppercase tracking-wide mb-4">Légal</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Confidentialité</a></li>
                            <li><a href="#" class="hover:text-[#EF4444] transition-colors duration-300">Conditions d'utilisation</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-[#A996D6] font-['IBM_Plex_Mono',monospace]">
                    <p>&copy; 2026 Habit Tracker — Mouhassin-ali project. Tous droits réservés.</p>
                    <p>Un jour à la fois.</p>
                </div>
            </div>
        </footer>

        <!-- INTERACTIVITÉ DU BURGER -->
        <script>
            document.getElementById('burger-btn').addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>

        <!-- LOADER DE TRANSITION ENTRE PAGES -->
        <div id="page-loader" class="fixed inset-0 z-[9999] bg-white/90 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
            <div class="relative w-20 h-20">
                <svg class="w-20 h-20 -rotate-90" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="#E4DFF5" stroke-width="8" />
                    <circle id="loader-circle" cx="50" cy="50" r="45" fill="none" stroke="#EF4444" stroke-width="8"
                        stroke-linecap="round" stroke-dasharray="282.6" stroke-dashoffset="282.6" />
                </svg>
                <span id="loader-percent" class="absolute inset-0 flex items-center justify-center text-sm font-semibold text-[#7C3AED] font-['IBM_Plex_Mono',monospace]">0%</span>
            </div>
        </div>

        <script>
            (function () {
                const loader = document.getElementById('page-loader');
                const circle = document.getElementById('loader-circle');
                const percentLabel = document.getElementById('loader-percent');
                const circumference = 282.6;
                const duration = 900;

                function updateCircle(value) {
                    const offset = circumference - (value / 100) * circumference;
                    circle.style.strokeDashoffset = offset;
                    percentLabel.textContent = Math.round(value) + '%';
                }

                function showLoaderThenNavigate(onComplete) {
                    updateCircle(0);
                    loader.classList.remove('opacity-0', 'pointer-events-none');
                    loader.classList.add('opacity-100');

                    const start = performance.now();

                    function tick(now) {
                        const elapsed = now - start;
                        const progress = Math.min((elapsed / duration) * 100, 100);
                        updateCircle(progress);

                        if (progress < 100) {
                            requestAnimationFrame(tick);
                        } else {
                            onComplete();
                        }
                    }

                    requestAnimationFrame(tick);
                }

                function hideLoader() {
                    loader.classList.remove('opacity-100');
                    loader.classList.add('opacity-0', 'pointer-events-none');
                }

                document.addEventListener('click', function (e) {
                    const link = e.target.closest('a');
                    if (!link) return;
                    if (link.target === '_blank' || link.hasAttribute('download')) return;
                    const href = link.getAttribute('href');
                    if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:')) return;
                    if (link.origin !== window.location.origin) return;

                    e.preventDefault();
                    showLoaderThenNavigate(() => {
                        window.location.href = href;
                    });
                });

                document.addEventListener('submit', function (e) {
                    const form = e.target;
                    if (form.hasAttribute('data-no-loader')) return;

                    e.preventDefault();
                    showLoaderThenNavigate(() => {
                        form.submit();
                    });
                });

                window.addEventListener('pageshow', hideLoader);
            })();
        </script>
    </body>
</html>