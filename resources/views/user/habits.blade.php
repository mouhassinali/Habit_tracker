@extends('user.app')

    @section('content')

        <div class="bg-white rounded-2xl border border-[#E4DFF5] p-6">

            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="font-['Fraunces',serif] font-semibold text-xl">Mes habitudes</h1>
                    <p class="text-sm text-[#8B7BAE]">8 habitudes · 4 actives aujourd'hui</p>
                </div>
                <a href="{{ route('add-habits.index') }}" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#EF4444] text-white text-sm font-semibold hover:bg-[#DC2626] transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Ajouter
                </a>
            </div>

            @foreach ($habits as $habit)
            <div class="space-y-3">

                <div class="group flex items-center gap-4 p-5 rounded-2xl border border-[#E4DFF5] bg-[#F8F7FC] shadow-sm hover:shadow-md hover:border-[#7C3AED]/30 transition-all duration-300 mb-4">
                    <button class="w-8 h-8 rounded-full bg-[#7C3AED] ring-4 ring-[#7C3AED]/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </button>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-sm">{{$habit->nom}}</p>
                        <span class="inline-block text-xs text-[#7C3AED] bg-[#7C3AED]/10 px-2 py-0.5 rounded-full mt-1">{{$habit->categorie}}</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-[#EF4444] font-medium shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 2c.5 3-1 4.6-2.3 6-1.3 1.4-2.2 2.7-2.2 4.5 0 2.5 2 4.5 4.5 4.5s4.5-2 4.5-4.5c0-1.6-.6-2.6-1.2-3.6.7.2 1.6.9 2.2 2.1.5 1 .8 2.2.8 3.5 0 3.9-3.1 7-7 7s-7-3.1-7-7c0-2.4 1-4.2 2.3-5.9C9.5 6.7 11.8 5 13.5 2z"/></svg>
                        12
                    </div>
                    <div class="flex items-center gap-2 shrink-0 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                        <a href="{{route('edit-habit', $habit->id)}}" class="w-9 h-9 rounded-lg flex items-center justify-center text-[#8B7BAE] hover:bg-[#7C3AED]/10 hover:text-[#7C3AED] transition-colors duration-300" title="Modifier">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.4-9.4a2.1 2.1 0 013 3L12 15l-4 1 1-4 9.6-9.4z"/></svg>
                        </a>
                        <form action="{{route('delete-habit', $habit->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-9 h-9 rounded-lg flex items-center justify-center text-[#8B7BAE] hover:bg-[#EF4444]/10 hover:text-[#EF4444] transition-colors duration-300" title="Supprimer" onSubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette habitude ?')" >
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 7h12M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2m2 0v13a2 2 0 01-2 2H8a2 2 0 01-2-2V7h12zM10 11v6m4-6v6"/></svg>
                            </button>
                        </form>
                    </div>
                </div>

                

            </div>
            @endforeach

        </div>

    @endsection