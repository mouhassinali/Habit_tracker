@extends('app')

@section('content')

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-2 rounded-3xl overflow-hidden shadow-2xl shadow-[#7C3AED]/10 border border-[#E4DFF5]">

            <!-- Panneau formulaire -->
            <div class="order-2 md:order-1 bg-white p-10 md:p-12 flex flex-col justify-center">
                <h1 class="font-['Fraunces',serif] font-semibold text-2xl sm:text-3xl text-center text-[#241B3A]">Créer un compte</h1>

                <div class="flex items-center justify-center gap-3 mt-6">
                    <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full border border-[#E4DFF5] flex items-center justify-center text-[#5B4A7A] hover:border-[#7C3AED] hover:text-[#7C3AED] transition-colors duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.15 8.44 9.94v-7.03H7.9v-2.9h2.54V9.85c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.9h-2.34V22c4.78-.79 8.44-4.94 8.44-9.94z"/></svg>
                    </a>
                    <a href="#" aria-label="Google" class="w-10 h-10 rounded-full border border-[#E4DFF5] flex items-center justify-center text-[#5B4A7A] hover:border-[#EF4444] hover:text-[#EF4444] transition-colors duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M21.35 11.1h-9.17v2.92h5.27c-.23 1.4-1.6 4.1-5.27 4.1-3.17 0-5.76-2.62-5.76-5.85s2.59-5.85 5.76-5.85c1.8 0 3.01.77 3.7 1.43l2.52-2.43C16.87 3.7 14.7 2.7 12 2.7 6.98 2.7 2.9 6.78 2.9 11.8s4.08 9.1 9.1 9.1c5.25 0 8.74-3.7 8.74-8.9 0-.6-.07-1.06-.14-1.5z"/></svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-full border border-[#E4DFF5] flex items-center justify-center text-[#5B4A7A] hover:border-[#7C3AED] hover:text-[#7C3AED] transition-colors duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.11 1 2.48 1s2.5 1.12 2.5 2.5zM.24 8.25h4.48V23H.24V8.25zM8.5 8.25h4.29v2.01h.06c.6-1.13 2.06-2.32 4.24-2.32 4.53 0 5.37 2.98 5.37 6.86V23h-4.48v-6.42c0-1.53-.03-3.5-2.13-3.5-2.14 0-2.47 1.67-2.47 3.39V23H8.5V8.25z"/></svg>
                    </a>
                </div>

                <p class="text-center text-xs text-[#8B7BAE] mt-6 mb-6">ou utilisez votre email pour vous inscrire</p>

                <form action="{{route('inscription.store')}}" method="POST" class="space-y-4">
                    @csrf
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5z"/></svg>
                        <input type="text" name="name" placeholder="Nom complet" class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm placeholder:text-[#8B7BAE] focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                    </div>

                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-3.5 7.13"/></svg>
                        <input type="email" name="email" placeholder="Adresse email" class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm placeholder:text-[#8B7BAE] focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                    </div>

                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input id="password" type="password" name="password" placeholder="Mot de passe" class="w-full pl-11 pr-11 py-3.5 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm placeholder:text-[#8B7BAE] focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                        <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300" data-target="password" aria-label="Afficher le mot de passe">
                            <svg class="w-4 h-4 icon-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7S2.5 12 2.5 12z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-4 h-4 icon-eye-off hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.24 4.24M9.9 5.1A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.6 13.6 0 01-2.1 3.03M6.6 6.6C4.16 8.1 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 004.1-.9"/></svg>
                        </button>
                    </div>

                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmer le mot de passe" class="w-full pl-11 pr-11 py-3.5 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm placeholder:text-[#8B7BAE] focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                        <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300" data-target="password_confirmation" aria-label="Afficher le mot de passe">
                            <svg class="w-4 h-4 icon-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7S2.5 12 2.5 12z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-4 h-4 icon-eye-off hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.24 4.24M9.9 5.1A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.6 13.6 0 01-2.1 3.03M6.6 6.6C4.16 8.1 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 004.1-.9"/></svg>
                        </button>
                    </div>

                    <div class="rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] px-4 py-3.5">
                        <p class="text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-2">Le mot de passe doit contenir</p>
                        <ul class="space-y-1.5 text-sm">
                            <li data-rule="length" class="requirement flex items-center gap-2 text-[#8B7BAE] transition-colors duration-200">
                                <svg class="w-3.5 h-3.5 icon-empty shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
                                <svg class="w-3.5 h-3.5 icon-done shrink-0 hidden text-[#16A34A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Au moins 8 caractères
                            </li>
                            <li data-rule="case" class="requirement flex items-center gap-2 text-[#8B7BAE] transition-colors duration-200">
                                <svg class="w-3.5 h-3.5 icon-empty shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
                                <svg class="w-3.5 h-3.5 icon-done shrink-0 hidden text-[#16A34A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Une lettre majuscule et une minuscule
                            </li>
                            <li data-rule="digit" class="requirement flex items-center gap-2 text-[#8B7BAE] transition-colors duration-200">
                                <svg class="w-3.5 h-3.5 icon-empty shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
                                <svg class="w-3.5 h-3.5 icon-done shrink-0 hidden text-[#16A34A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Au moins un chiffre
                            </li>
                            <li data-rule="special" class="requirement flex items-center gap-2 text-[#8B7BAE] transition-colors duration-200">
                                <svg class="w-3.5 h-3.5 icon-empty shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
                                <svg class="w-3.5 h-3.5 icon-done shrink-0 hidden text-[#16A34A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Un caractère spécial (!, @, #, $...)
                            </li>
                        </ul>
                    </div>

                    <label class="flex items-start gap-2 text-sm text-[#5B4A7A] pt-1">
                        <input type="checkbox" name="terms" class="mt-0.5 rounded border-[#E4DFF5] text-[#7C3AED] focus:ring-[#7C3AED]/30">
                        J'accepte les <a href="#" class="text-[#7C3AED] hover:text-[#EF4444] font-medium transition-colors duration-300">conditions d'utilisation</a>
                    </label>

                    <button type="submit" class="w-full mt-2 py-3.5 rounded-xl bg-[#EF4444] text-white font-semibold text-sm uppercase tracking-wide hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/20">
                        S'inscrire
                    </button>

                </form>

                <p class="text-center text-sm text-[#5B4A7A] mt-6 md:hidden">
                    Déjà un compte ?
                    <a href="{{route('connexion')}}" class="text-[#7C3AED] font-semibold hover:text-[#EF4444] transition-colors duration-300">Se connecter</a>
                </p>
            </div>

            <!-- Panneau coloré -->
            <div class="order-1 md:order-2 relative bg-gradient-to-br from-[#EF4444] to-[#7C3AED] p-10 md:p-12 flex flex-col justify-center text-white overflow-hidden">
                <div class="absolute -top-10 -left-10 w-40 h-40 border border-white/20 rounded-3xl -rotate-12"></div>
                <div class="absolute bottom-10 -right-6 w-24 h-24 bg-white/10 rounded-full"></div>
                <div class="absolute top-1/2 left-6 w-14 h-14 bg-white/10 rounded-2xl rotate-45"></div>

                <div class="relative">
                    <img src="{{ asset('logo.png') }}" alt="Habit Tracker" class="h-12 w-12 object-contain rounded-xl mb-8">

                    <h2 class="font-['Fraunces',serif] font-semibold text-3xl sm:text-4xl leading-tight">Rejoignez-nous !</h2>
                    <p class="text-white/85 mt-4 max-w-xs">Créez votre compte et commencez à construire vos habitudes dès aujourd'hui.</p>

                    <a href="{{ route('connexion') }}">
                        <button class="mt-9 px-7 py-3 rounded-full border-2 border-white text-white font-semibold text-sm uppercase tracking-wide hover:bg-white hover:text-[#EF4444] transition-colors duration-300">
                            Se connecter
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </section>

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

        const passwordInput = document.getElementById('password');
        const requirements = {
            length: (v) => v.length >= 8,
            case: (v) => /[a-z]/.test(v) && /[A-Z]/.test(v),
            digit: (v) => /[0-9]/.test(v),
            special: (v) => /[^A-Za-z0-9]/.test(v),
        };

        passwordInput.addEventListener('input', function () {
            const value = passwordInput.value;
            Object.keys(requirements).forEach(function (rule) {
                const li = document.querySelector('.requirement[data-rule="' + rule + '"]');
                const met = requirements[rule](value);
                li.classList.toggle('text-[#8B7BAE]', !met);
                li.classList.toggle('text-[#16A34A]', met);
                li.querySelector('.icon-empty').classList.toggle('hidden', met);
                li.querySelector('.icon-done').classList.toggle('hidden', !met);
            });
        });
    </script>

@endsection