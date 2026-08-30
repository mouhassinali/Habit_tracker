@extends('user.app')

@section('content')

    <div class="max-w-xl mx-auto">
        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-8">

            <a href="{{ route('user.habits') }}" class="inline-flex items-center gap-2 text-sm text-[#8B7BAE] hover:text-[#7C3AED] transition-colors duration-300 mb-6">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                Retour à mes habitudes
            </a>

            <h1 class="font-['Fraunces',serif] font-semibold text-2xl">Ajouter une habitude</h1>
            <p class="text-sm text-[#8B7BAE] mt-1 mb-7">Renseignez les informations de votre nouvelle habitude à suivre.</p>

            <form action="{{ route('add-habits.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Nom de l'habitude</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        <input type="text" name="name" placeholder="Ex : Boire 2L d'eau" class="w-full pl-11 pr-4 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm placeholder:text-[#8B7BAE] focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#5B4A7A] uppercase tracking-wide mb-1.5">Catégorie</label>
                    <div class="relative">
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.5 0 1 .2 1.4.6l7 7a2 2 0 010 2.8l-5.6 5.6a2 2 0 01-2.8 0l-7-7A2 2 0 013 10V5a2 2 0 012-2z"/></svg>
                        <select name="category" class="w-full pl-11 pr-10 py-3 rounded-xl bg-[#F8F7FC] border border-[#E4DFF5] text-sm text-[#241B3A] appearance-none focus:outline-none focus:ring-2 focus:ring-[#7C3AED]/30 focus:border-[#7C3AED]">
                            <option value="sante">Santé</option>
                            <option value="developpement">Développement</option>
                            <option value="fitness">Fitness</option>
                            <option value="bien-etre">Bien-être</option>
                            <option value="autre">Autre</option>
                        </select>
                        <svg class="w-4 h-4 text-[#8B7BAE] absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>

                <div class="flex gap-3 pt-2">
                    <a href="{{ route('user.habits') }}" class="flex-1 py-3 rounded-xl border border-[#E4DFF5] text-[#241B3A] font-semibold text-sm text-center hover:bg-[#F8F7FC] transition-colors duration-300">
                        Annuler
                    </a>
                    <button type="submit" class="flex-1 py-3 rounded-xl bg-[#EF4444] text-white font-semibold text-sm hover:bg-[#DC2626] transition-colors duration-300 shadow-lg shadow-[#EF4444]/20">
                        Ajouter
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection