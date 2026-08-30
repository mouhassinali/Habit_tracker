@extends('app')

@section('content')

    <!-- HERO -->
    <section class="relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#7C3AED]/10 rounded-full blur-3xl"></div>
        <div class="absolute top-40 -left-24 w-72 h-72 bg-[#EF4444]/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative">
            <div class="grid md:grid-cols-2 gap-14 items-center">

                <!-- Texte -->
                <div>
                    <span class="inline-flex items-center gap-2 bg-[#EF4444]/10 text-[#EF4444] text-xs font-semibold uppercase tracking-wide px-3 py-1.5 rounded-full">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l1.8 5.4L19 9l-5.2 1.6L12 16l-1.8-5.4L5 9l5.2-1.6z"/></svg>
                        Nouveau · Suivi d'habitudes simplifié
                    </span>

                    <h1 class="font-['Fraunces',serif] font-semibold text-4xl sm:text-5xl lg:text-6xl leading-tight mt-6">
                        <span class="text-[#7C3AED]">Petites habitudes</span>,<br>
                        <span class="text-[#EF4444]">grands changements</span>
                    </h1>

                    <p class="text-lg text-[#5B4A7A] mt-6 max-w-lg">
                        Créez vos habitudes, cochez-les chaque jour et regardez vos séries grandir. Un dashboard clair pour rester constant, jour après jour.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <a href="#"><button class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-[#EF4444] text-white font-semibold hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/20">Commencer gratuitement</button></a>
                        <a href="#"><button class="w-full sm:w-auto px-6 py-3.5 rounded-xl border border-[#E4DFF5] bg-white text-[#241B3A] font-semibold hover:bg-[#241B3A] hover:text-white hover:border-[#241B3A] transition-colors duration-300">Se connecter</button></a>
                    </div>

                    <div class="flex items-center gap-6 mt-10 text-sm text-[#5B4A7A]">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Gratuit, sans carte bancaire
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Prêt en 2 minutes
                        </div>
                    </div>
                </div>

                <!-- Carte visuelle "Aujourd'hui" -->
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-br from-[#7C3AED]/20 to-[#EF4444]/10 rounded-3xl blur-2xl"></div>

                    <div class="relative bg-white rounded-2xl shadow-2xl shadow-[#7C3AED]/10 border border-[#E4DFF5] p-6">
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <p class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace] uppercase tracking-wide">Aujourd'hui</p>
                                <p class="font-['Fraunces',serif] font-semibold text-lg">Mercredi 26 août</p>
                            </div>
                            <div class="flex items-center gap-1.5 bg-[#EF4444]/10 text-[#EF4444] text-sm font-semibold px-3 py-1.5 rounded-full">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                                4 séries
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5]">
                                <div class="w-6 h-6 rounded-full bg-[#7C3AED] flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="flex-1 font-medium text-sm">Boire 2L d'eau</span>
                                <span class="text-xs font-['IBM_Plex_Mono',monospace] text-[#8B7BAE]">12 jours</span>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5]">
                                <div class="w-6 h-6 rounded-full bg-[#7C3AED] flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="flex-1 font-medium text-sm">Lire 20 minutes</span>
                                <span class="text-xs font-['IBM_Plex_Mono',monospace] text-[#8B7BAE]">7 jours</span>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5]">
                                <div class="w-6 h-6 rounded-full border-2 border-[#D8CFEF] shrink-0"></div>
                                <span class="flex-1 font-medium text-sm text-[#5B4A7A]">Séance de sport</span>
                                <span class="text-xs font-['IBM_Plex_Mono',monospace] text-[#8B7BAE]">3 jours</span>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5]">
                                <div class="w-6 h-6 rounded-full border-2 border-[#D8CFEF] shrink-0"></div>
                                <span class="flex-1 font-medium text-sm text-[#5B4A7A]">Méditer 10 minutes</span>
                                <span class="text-xs font-['IBM_Plex_Mono',monospace] text-[#8B7BAE]">0 jour</span>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-[#E4DFF5] flex items-center justify-between">
                            <span class="text-xs text-[#8B7BAE]">2 sur 4 complétées</span>
                            <div class="w-28 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden">
                                <div class="h-full w-1/2 bg-gradient-to-r from-[#7C3AED] to-[#EF4444] rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BANDEAU STATS -->
    <section class="border-y border-[#E4DFF5] bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="font-['Fraunces',serif] font-semibold text-3xl text-[#7C3AED]">12k+</p>
                <p class="text-sm text-[#5B4A7A] mt-1">Habitudes suivies</p>
            </div>
            <div>
                <p class="font-['Fraunces',serif] font-semibold text-3xl text-[#EF4444]">3 200</p>
                <p class="text-sm text-[#5B4A7A] mt-1">Utilisateurs actifs</p>
            </div>
            <div>
                <p class="font-['Fraunces',serif] font-semibold text-3xl text-[#7C3AED]">89%</p>
                <p class="text-sm text-[#5B4A7A] mt-1">Taux de réussite</p>
            </div>
            <div>
                <p class="font-['Fraunces',serif] font-semibold text-3xl text-[#EF4444]">45</p>
                <p class="text-sm text-[#5B4A7A] mt-1">Jours de série record</p>
            </div>
        </div>
    </section>

    <!-- FONCTIONNALITÉS -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20" id="fonctionnalités">
        <div class="max-w-2xl mx-auto text-center mb-14">
            <span class="text-[#EF4444] text-sm font-semibold uppercase tracking-wide">Fonctionnalités</span>
            <h2 class="font-['Fraunces',serif] font-semibold text-3xl sm:text-4xl mt-3">Tout ce qu'il faut pour tenir dans la durée</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Suivi quotidien</h3>
                <p class="text-sm text-[#5B4A7A]">Cochez vos habitudes en un clic chaque jour et gardez une vue d'ensemble claire de votre progression.</p>
            </div>

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Séries &amp; motivation</h3>
                <p class="text-sm text-[#5B4A7A]">Chaque jour tenu prolonge votre série. Visualisez votre régularité et gardez la motivation intacte.</p>
            </div>

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Statistiques claires</h3>
                <p class="text-sm text-[#5B4A7A]">Un dashboard qui résume votre taux de réussite et vos tendances, sans se noyer dans les chiffres.</p>
            </div>

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Rappels quotidiens</h3>
                <p class="text-sm text-[#5B4A7A]">Ne ratez plus une journée : un rappel doux vous relance quand une habitude n'est pas encore cochée.</p>
            </div>

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 3v4M17 3v4M6 21h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Calendrier mensuel</h3>
                <p class="text-sm text-[#5B4A7A]">Repérez d'un coup d'œil les jours réussis et les jours manqués sur l'ensemble du mois.</p>
            </div>

            <div class="p-6 rounded-2xl border border-[#E4DFF5] bg-white hover:shadow-xl hover:shadow-[#7C3AED]/5 transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06A1.65 1.65 0 009 4.6a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06A1.65 1.65 0 0019.4 9c.14.36.4.65.74.82.24.12.5.18.77.18H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Profil personnalisable</h3>
                <p class="text-sm text-[#5B4A7A]">Organisez vos habitudes par catégorie et adaptez votre dashboard à votre rythme de vie.</p>
            </div>

        </div>
    </section>

    <!-- COMMENT ÇA MARCHE -->
    <section class="bg-white border-y border-[#E4DFF5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="max-w-2xl mx-auto text-center mb-14">
                <span class="text-[#7C3AED] text-sm font-semibold uppercase tracking-wide">Comment ça marche</span>
                <h2 class="font-['Fraunces',serif] font-semibold text-3xl sm:text-4xl mt-3">Trois étapes, aucune friction</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-[#7C3AED] text-white font-['Fraunces',serif] font-semibold text-xl flex items-center justify-center mx-auto mb-5">01</div>
                    <h3 class="font-semibold text-lg mb-2">Créez votre compte</h3>
                    <p class="text-sm text-[#5B4A7A] max-w-xs mx-auto">Inscrivez-vous en quelques secondes et accédez à votre espace personnel.</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-[#7C3AED] text-white font-['Fraunces',serif] font-semibold text-xl flex items-center justify-center mx-auto mb-5">02</div>
                    <h3 class="font-semibold text-lg mb-2">Ajoutez vos habitudes</h3>
                    <p class="text-sm text-[#5B4A7A] max-w-xs mx-auto">Listez ce que vous voulez suivre : sport, lecture, hydratation, sommeil...</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-[#EF4444] text-white font-['Fraunces',serif] font-semibold text-xl flex items-center justify-center mx-auto mb-5">03</div>
                    <h3 class="font-semibold text-lg mb-2">Cochez chaque jour</h3>
                    <p class="text-sm text-[#5B4A7A] max-w-xs mx-auto">Revenez chaque jour, cochez, et regardez vos séries grandir sur le dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="relative overflow-hidden rounded-3xl bg-[#1E1147] px-8 py-16 text-center">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-[#7C3AED]/30 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-[#EF4444]/20 rounded-full blur-3xl"></div>

            <div class="relative">
                <h2 class="font-['Fraunces',serif] font-semibold text-3xl sm:text-4xl text-white">Prêt à construire vos habitudes ?</h2>
                <p class="text-[#D8CFEF] mt-4 max-w-lg mx-auto">Rejoignez Habit Tracker et transformez vos petites actions quotidiennes en grands résultats.</p>
                <a href="{{ route('inscription') }}"><button class="mt-8 px-8 py-3.5 rounded-xl bg-[#EF4444] text-white font-semibold hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/30">Créer mon compte gratuitement</button></a>
            </div>
        </div>
    </section>

@endsection