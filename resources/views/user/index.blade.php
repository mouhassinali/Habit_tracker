@extends('user.app')

@section('content')

    <!-- CARTES STATISTIQUES -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">6</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Habitudes actives</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">12</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Jours de série en cours</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#7C3AED]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">89%</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Taux de réussite (7j)</p>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5">
            <div class="w-10 h-10 rounded-xl bg-[#EF4444]/10 flex items-center justify-center mb-3">
                <svg class="w-5 h-5 text-[#EF4444]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.3 6.9L21 10l-5.7 2.1L13 19l-2.3-6.9L5 10l5.7-2.1z"/></svg>
            </div>
            <p class="font-['Fraunces',serif] font-semibold text-2xl">45</p>
            <p class="text-sm text-[#8B7BAE] mt-0.5">Meilleure série</p>
        </div>

    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        <!-- HABITUDES DU JOUR -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h2 class="font-['Fraunces',serif] font-semibold text-xl">Habitudes du jour</h2>
                    <p class="text-sm text-[#8B7BAE]">Mercredi 26 août 2026</p>
                </div>
                <a href="{{route('add-habits.index')}}" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#EF4444] text-white text-sm font-semibold hover:bg-[#DC2626] transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Ajouter
                </a>
            </div>

            <div class="space-y-3">

                <div class="flex items-center gap-4 p-4 rounded-xl border border-[#E4DFF5] bg-[#F8F7FC]">
                    <button class="w-7 h-7 rounded-full bg-[#7C3AED] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </button>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-sm">Boire 2L d'eau</p>
                        <span class="inline-block text-xs text-[#7C3AED] bg-[#7C3AED]/10 px-2 py-0.5 rounded-full mt-1">Santé</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-[#EF4444] font-medium shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        12
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-xl border border-[#E4DFF5] bg-[#F8F7FC]">
                    <button class="w-7 h-7 rounded-full bg-[#7C3AED] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </button>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-sm">Lire 20 minutes</p>
                        <span class="inline-block text-xs text-[#EF4444] bg-[#EF4444]/10 px-2 py-0.5 rounded-full mt-1">Développement</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-[#EF4444] font-medium shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        7
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-xl border border-[#E4DFF5]">
                    <button class="w-7 h-7 rounded-full border-2 border-[#D8CFEF] shrink-0"></button>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-sm text-[#5B4A7A]">Séance de sport</p>
                        <span class="inline-block text-xs text-[#7C3AED] bg-[#7C3AED]/10 px-2 py-0.5 rounded-full mt-1">Fitness</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-[#8B7BAE] font-medium shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        3
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-xl border border-[#E4DFF5]">
                    <button class="w-7 h-7 rounded-full border-2 border-[#D8CFEF] shrink-0"></button>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-sm text-[#5B4A7A]">Méditer 10 minutes</p>
                        <span class="inline-block text-xs text-[#EF4444] bg-[#EF4444]/10 px-2 py-0.5 rounded-full mt-1">Bien-être</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-[#8B7BAE] font-medium shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        0
                    </div>
                </div>

            </div>

            <div class="mt-5 pt-4 border-t border-[#E4DFF5] flex items-center justify-between">
                <span class="text-sm text-[#8B7BAE]">2 sur 4 habitudes complétées aujourd'hui</span>
                <div class="w-32 h-2 rounded-full bg-[#E4DFF5] overflow-hidden">
                    <div class="h-full w-1/2 bg-gradient-to-r from-[#7C3AED] to-[#EF4444] rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- COLONNE DROITE -->
        <div class="space-y-6">

            <!-- PROGRESSION DE LA SEMAINE -->
            <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">
                <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-5">Progression de la semaine</h2>

                <div class="flex items-end justify-between gap-2 h-32">
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 40%"></div>
                        <span class="text-xs text-[#8B7BAE]">L</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 70%"></div>
                        <span class="text-xs text-[#8B7BAE]">M</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 55%"></div>
                        <span class="text-xs text-[#8B7BAE]">M</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#EF4444]" style="height: 90%"></div>
                        <span class="text-xs text-[#8B7BAE]">J</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 65%"></div>
                        <span class="text-xs text-[#8B7BAE]">V</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#D8CFEF]" style="height: 25%"></div>
                        <span class="text-xs text-[#8B7BAE]">S</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-[#D8CFEF]" style="height: 15%"></div>
                        <span class="text-xs text-[#8B7BAE]">D</span>
                    </div>
                </div>
            </div>

            <!-- CITATION DU JOUR -->
            <div class="relative overflow-hidden rounded-2xl bg-[#1E1147] p-6 text-white">
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-[#EF4444]/20 rounded-full blur-2xl"></div>
                <svg class="w-6 h-6 text-[#EF4444] mb-3 relative" fill="currentColor" viewBox="0 0 24 24"><path d="M9 7C6 7 4 9.5 4 12.5S6 18 9 18v-2c-1.7 0-3-1.5-3-3.5S7.3 9 9 9V7zm10 0c-3 0-5 2.5-5 5.5S16 18 19 18v-2c-1.7 0-3-1.5-3-3.5S17.3 9 19 9V7z"/></svg>
                <p class="font-['Fraunces',serif] text-lg leading-snug relative">« Ce n'est pas ce que nous faisons de temps en temps qui compte, mais ce que nous faisons chaque jour. »</p>
                <p class="text-sm text-white/60 mt-3 relative">— Habit Tracker</p>
            </div>

        </div>
    </div>

@endsection