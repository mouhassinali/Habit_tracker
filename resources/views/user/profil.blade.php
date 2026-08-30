@extends('user.app')

@section('content')

    <div class="max-w-3xl mx-auto space-y-6">

        <!-- EN-TÊTE PROFIL -->
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6 flex items-center gap-5">
            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#EF4444] flex items-center justify-center font-['Fraunces',serif] font-semibold text-2xl text-white shrink-0">
                {{ substr($user->name, 0, 1) }}
            </div>
            <div class="min-w-0">
                <h1 class="font-['Fraunces',serif] font-semibold text-xl truncate">{{ $user->name }}</h1>
                <p class="text-sm text-[#8B7BAE] truncate">{{ $user->email }}</p>
            </div>
        </div>

        <!-- STATISTIQUES -->
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5 text-center">
                <p class="font-['Fraunces',serif] font-semibold text-2xl text-[#7C3AED]">6</p>
                <p class="text-xs text-[#8B7BAE] mt-1">Habitudes actives</p>
            </div>
            <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5 text-center">
                <p class="font-['Fraunces',serif] font-semibold text-2xl text-[#EF4444]">12</p>
                <p class="text-xs text-[#8B7BAE] mt-1">Série en cours</p>
            </div>
            <div class="bg-white rounded-2xl border border-[#E4DFF5] p-5 text-center">
                <p class="font-['Fraunces',serif] font-semibold text-2xl text-[#7C3AED]">89%</p>
                <p class="text-xs text-[#8B7BAE] mt-1">Taux de réussite</p>
            </div>
        </div>

        <!-- INFORMATIONS DU COMPTE -->
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-1">Informations du compte</h2>
            <p class="text-sm text-[#8B7BAE] mb-6">Mettez à jour votre nom et votre adresse email.</p>

            <form action="" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Nom complet</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5z"/></svg>
                        <input type="text" name="name" value="{{ $user->name }}" class="w-full pl-11 pr-4 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Adresse email</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-3.5 7.13"/></svg>
                        <input type="email" name="email" value="{{ $user->email }}" class="w-full pl-11 pr-4 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-[#EF4444] text-white font-semibold text-sm hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/20">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>

        <!-- CHANGER LE MOT DE PASSE -->
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg mb-1">Changer le mot de passe</h2>
            <p class="text-sm text-[#8B7BAE] mb-6">Choisissez un mot de passe sécurisé que vous n'utilisez sur aucun autre site.</p>

            <form action="" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Mot de passe actuel</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input id="current_password" type="password" name="current_password" class="w-full pl-11 pr-11 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                        <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300" data-target="current_password" aria-label="Afficher le mot de passe">
                            <svg class="w-4 h-4 icon-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7S2.5 12 2.5 12z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-4 h-4 icon-eye-off hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.24 4.24M9.9 5.1A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.6 13.6 0 01-2.1 3.03M6.6 6.6C4.16 8.1 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 004.1-.9"/></svg>
                        </button>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Nouveau mot de passe</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input id="new_password" type="password" name="password" class="w-full pl-11 pr-11 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                        <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300" data-target="new_password" aria-label="Afficher le mot de passe">
                            <svg class="w-4 h-4 icon-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7S2.5 12 2.5 12z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-4 h-4 icon-eye-off hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.24 4.24M9.9 5.1A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.6 13.6 0 01-2.1 3.03M6.6 6.6C4.16 8.1 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 004.1-.9"/></svg>
                        </button>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Confirmer le nouveau mot de passe</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input id="new_password_confirmation" type="password" name="password_confirmation" class="w-full pl-11 pr-11 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                        <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300" data-target="new_password_confirmation" aria-label="Afficher le mot de passe">
                            <svg class="w-4 h-4 icon-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7S2.5 12 2.5 12z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-4 h-4 icon-eye-off hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.24 4.24M9.9 5.1A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.6 13.6 0 01-2.1 3.03M6.6 6.6C4.16 8.1 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 004.1-.9"/></svg>
                        </button>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-[#EF4444] text-white font-semibold text-sm hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/20">
                        Mettre à jour le mot de passe
                    </button>
                </div>
            </form>
        </div>

        <!-- ZONE DANGER -->
        <div class="bg-white rounded-2xl border border-[#EF4444]/30 p-6">
            <h2 class="font-['Fraunces',serif] font-semibold text-lg text-[#EF4444] mb-1">Supprimer le compte</h2>
            <p class="text-sm text-[#8B7BAE] mb-5">Cette action est définitive et supprimera toutes vos habitudes et données associées.</p>
            <button type="button" class="px-5 py-2.5 rounded-xl border border-[#EF4444] text-[#EF4444] font-semibold text-sm hover:bg-[#EF4444] hover:text-white transition-colors duration-300">
                Supprimer mon compte
            </button>
        </div>

    </div>

    <script>
        document.querySelectorAll('.toggle-password').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const input = document.getElementById(btn.dataset.target);
                const isHidden = input.type === 'password';
                input.type = isHidden ? 'text' : 'password';
                btn.querySelector('.icon-eye').classList.toggle('hidden', isHidden);
                btn.querySelector('.icon-eye-off').classList.toggle('hidden', !isHidden);
            });
        });
    </script>

@endsection