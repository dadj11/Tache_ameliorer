@extends('layout.base')
@section('content')
    <div>

        <div class="px-2 font-sans">
            <!-- Bouton d'action -->
            <div class="mb-5">
                <a href="taches/create"
                    class="inline-block rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-md transition hover:bg-indigo-700">
                    + Nouvelle Tâche
                </a>
            </div>

            <!-- Conteneur de la liste -->
            <div class="flex flex-col gap-4">
                @foreach ($all as $one)
                    <div
                        class="flex items-center justify-between rounded-2xl border border-gray-200 bg-white p-4 shadow-sm transition hover:shadow-md">

                        <div class="space-y-1">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $one->titre }}</h3>

                            <small class="block text-sm text-gray-500">
                                Prévu le : {{ $one->date }} à {{ $one->heur }}
                            </small>

                            <span
                                class="inline-flex rounded-full px-3 py-1 text-xs font-bold
                        {{ $one->status == 'terminé' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ ucfirst($one->status) }}
                            </span>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="flex items-center gap-3">
                            <!-- Ajouter une note -->
                            <a href="/taches/{{ $one->id }}/notes/create" title="Ajouter une note"
                                class="text-indigo-600 transition hover:text-indigo-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15.5 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8.5" />
                                    <path d="M9 18h6" />
                                    <path d="M10 14h4" />
                                    <path d="m21 2-5 5" />
                                    <path d="m22 3-1 1" />
                                </svg>
                            </a>

                            <!-- Consulter -->
                            <a href="/taches/{{ $one->id }}" title="Consulter"
                                class="text-gray-500 transition hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </a>

                            <!-- Modifier -->
                            <a href="/taches/{{ $one->id }}/edit" title="Modifier"
                                class="text-amber-500 transition hover:text-amber-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z" />
                                    <path d="m15 5 4 4" />
                                </svg>
                            </a>

                            <!-- Supprimer -->
                            <form action="/taches/{{ $one->id }}" method="POST" class="m-0"
                                onsubmit="return confirm('Supprimer cette tâche ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 transition hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
