@extends('user.app')

@section('content')

    <!-- EN-TÊTE + FILTRE PÉRIODE -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="font-['Fraunces',serif] font-semibold text-xl">Statistiques</h1>
            <p class="text-sm text-[#8B7BAE]">Votre régularité en un coup d'œil</p>
        </div>
        <div class="inline-flex bg-white border border-[#E4DFF5] rounded-xl p-1 self-start">
            <button class="px-4 py-1.5 rounded-lg bg-[#7C3AED] text-white text-sm font-semibold">Semaine</button>
            <button class="px-4 py-1.5 rounded-lg text-[#5B4A7A] text-sm font-medium hover:bg-[#F8F7FC] transition-colors duration-300">Mois</button>
            <button class="px-4 py-1.5 rounded-lg text-[#5B4A7A] text-sm font-medium hover:bg-[#F8F7FC] transition-colors duration-300">Année</button>
        </div>
    </div>

    <!-- CARTES STATISTIQUES -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">89%</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Taux de réussite global</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">45</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Meilleure série</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">142</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Jours actifs</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">318</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Habitudes complétées</p>
        </div>

    </div>

    <div class="grid lg:grid-cols-3 gap-6 mb-6">

        <!-- PROGRESSION HEBDOMADAIRE -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-6">Progression de la semaine</h2>

            <div class="flex items-end justify-between gap-3 h-48">
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">40%</span>
                    <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 40%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Lun</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">70%</span>
                    <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 70%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Mar</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">55%</span>
                    <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 55%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Mer</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#EF4444] font-['IBM_Plex_Mono',monospace] font-semibold">90%</span>
                    <div class="w-full rounded-t-lg bg-[#EF4444]" style="height: 90%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Jeu</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">65%</span>
                    <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 65%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Ven</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">25%</span>
                    <div class="w-full rounded-t-lg bg-[#D8CFEF]" style="height: 25%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Sam</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-2">
                    <span class="text-xs text-[#8B7BAE] font-['IBM_Plex_Mono',monospace]">15%</span>
                    <div class="w-full rounded-t-lg bg-[#D8CFEF]" style="height: 15%"></div>
                    <span class="text-xs text-[#5B4A7A] font-medium">Dim</span>
                </div>
            </div>
        </div>

        <!-- RÉPARTITION PAR CATÉGORIE -->
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-6">Par catégorie</h2>

            <div class="space-y-5">
                <div>
                    <div class="flex items-center justify-between text-sm mb-1.5">
                        <span class="font-medium">Santé</span>
                        <span class="text-[#8B7BAE]">92%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#E4DFF5] overflow-hidden">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 92%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between text-sm mb-1.5">
                        <span class="font-medium">Développement</span>
                        <span class="text-[#8B7BAE]">68%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#E4DFF5] overflow-hidden">
                        <div class="h-full rounded-full bg-[#EF4444]" style="width: 68%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between text-sm mb-1.5">
                        <span class="font-medium">Fitness</span>
                        <span class="text-[#8B7BAE]">45%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#E4DFF5] overflow-hidden">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 45%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between text-sm mb-1.5">
                        <span class="font-medium">Bien-être</span>
                        <span class="text-[#8B7BAE]">58%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#E4DFF5] overflow-hidden">
                        <div class="h-full rounded-full bg-[#EF4444]" style="width: 58%"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        <!-- CLASSEMENT DES HABITUDES -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-5">Vos habitudes les plus régulières</h2>

            <div class="space-y-3">
                <div class="flex items-center gap-4">
                    <span class="w-6 text-sm font-semibold text-[#8B7BAE]">1</span>
                    <span class="flex-1 text-sm font-medium">Dormir avant 23h</span>
                    <div class="w-32 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden hidden sm:block">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 95%"></div>
                    </div>
                    <span class="flex items-center gap-1 text-sm text-[#EF4444] font-semibold w-12 justify-end">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        20
                    </span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="w-6 text-sm font-semibold text-[#8B7BAE]">2</span>
                    <span class="flex-1 text-sm font-medium">Boire 2L d'eau</span>
                    <div class="w-32 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden hidden sm:block">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 80%"></div>
                    </div>
                    <span class="flex items-center gap-1 text-sm text-[#EF4444] font-semibold w-12 justify-end">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        12
                    </span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="w-6 text-sm font-semibold text-[#8B7BAE]">3</span>
                    <span class="flex-1 text-sm font-medium">Lire 20 minutes</span>
                    <div class="w-32 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden hidden sm:block">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 47%"></div>
                    </div>
                    <span class="flex items-center gap-1 text-sm text-[#EF4444] font-semibold w-12 justify-end">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        7
                    </span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="w-6 text-sm font-semibold text-[#8B7BAE]">4</span>
                    <span class="flex-1 text-sm font-medium">Écrire dans un journal</span>
                    <div class="w-32 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden hidden sm:block">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 33%"></div>
                    </div>
                    <span class="flex items-center gap-1 text-sm text-[#EF4444] font-semibold w-12 justify-end">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        5
                    </span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="w-6 text-sm font-semibold text-[#8B7BAE]">5</span>
                    <span class="flex-1 text-sm font-medium">Séance de sport</span>
                    <div class="w-32 h-1.5 rounded-full bg-[#E4DFF5] overflow-hidden hidden sm:block">
                        <div class="h-full rounded-full bg-[#7C3AED]" style="width: 20%"></div>
                    </div>
                    <span class="flex items-center gap-1 text-sm text-[#EF4444] font-semibold w-12 justify-end">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        3
                    </span>
                </div>
            </div>
        </div>

        <!-- ACTIVITÉ RÉCENTE (HEATMAP) -->
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-1">Activité</h2>
            <p class="text-xs text-[#8B7BAE] mb-5">6 dernières semaines</p>

            <div class="grid grid-cols-7 gap-1.5">
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>

                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>

                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>

                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>

                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>

                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/30"></div>
                <div class="aspect-square rounded-sm bg-[#E4DFF5]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]"></div>
                <div class="aspect-square rounded-sm bg-[#7C3AED]/60"></div>
            </div>

            <div class="flex items-center justify-end gap-1.5 mt-4 text-xs text-[#8B7BAE]">
                <span>Moins</span>
                <div class="w-3 h-3 rounded-sm bg-[#E4DFF5]"></div>
                <div class="w-3 h-3 rounded-sm bg-[#7C3AED]/30"></div>
                <div class="w-3 h-3 rounded-sm bg-[#7C3AED]/60"></div>
                <div class="w-3 h-3 rounded-sm bg-[#7C3AED]"></div>
                <span>Plus</span>
            </div>
        </div>

    </div>

@endsection