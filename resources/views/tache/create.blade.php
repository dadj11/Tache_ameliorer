@extends('layout.base')
@section('content')
    <div class="max-w-md mx-auto my-10 p-6 border border-gray-300 rounded-xl shadow-lg bg-white font-sans">

        <h2 class="flex items-center gap-2 text-xl font-semibold text-gray-900 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#4f46e5"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Nouvelle Tâche
        </h2>

        <form action="/taches/create" method="POST"
            class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md font-sans space-y-6">
            <!-- Champ titre -->
            <div>
                <label for="titre" class="block mb-2 font-semibold text-gray-700">Titre :</label>
                <input type="text" id="titre" name="titre" required minlength="3"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <!-- Champ description -->
            <div>
                <label for="description" class="block mb-2 font-semibold text-gray-700">Description :</label>
                <textarea id="description" name="description" minlength="5" rows="4"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 font-sans focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <!-- Champ date + heure -->
            <div>
                <label for="date" class="block mb-2 font-semibold text-gray-700">Date et heure :</label>
                <input type="datetime-local" id="date" name="date" required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <!-- Champ durée -->
            <div>
                <label for="duree" class="block mb-2 font-semibold text-gray-700">Durée (en minutes) :</label>
                <input type="number" id="duree" name="duree" required min="1"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            </div>

            <button type="submit"
                class="w-full rounded-md bg-indigo-600 px-4 py-3 font-bold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Envoyer
            </button>
        </form>

    </div>
@endsection
