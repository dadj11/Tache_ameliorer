<header style="background-color: #f8f9fa; padding: 20px; border-bottom: 1px solid #ddd; border-radius: 10px; margin-bottom: 20px;">
    <h1 style="display: flex; align-items: center; gap: 12px; margin: 0; font-family: sans-serif; color: #333;">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 32px; height: 32px;">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
        </svg>
        Gestionnaire de Tâches
    </h1>
</header>

<div style="font-family: sans-serif; padding: 10px;">
    <!-- Bouton d'action -->
    <div style="margin-bottom: 20px;">
        <a href="taches/create">
            <button style="background-color: #4f46e5; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold;">
                + Nouvelle Tâche
            </button>
        </a>
    </div>

    <!-- Conteneur de la liste -->
    <div style="display: flex; flex-direction: column; gap: 15px;">
        @foreach ($all as $one)
            <div style="border: 1px solid #e5e7eb; border-radius: 10px; padding: 15px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); background: white; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h3 style="margin: 0; color: #111827;">{{ $one->titre }}</h3>
                    <small style="color: #6b7280;">Prévu le : {{ $one->date }} à {{ $one->heur }}</small>
                <span style="
                    padding: 4px 12px;
                    border-radius: 20px;
                    font-size: 0.8rem;
                    font-weight: bold;
                    background-color: {{ $one->status == 'terminé' ? '#dcfce7' : '#fef9c3' }};
                    color: {{ $one->status == 'terminé' ? '#166534' : '#854d0e' }};
                ">
                    {{ ucfirst($one->status) }}
                </span>
                </div>

                <!--  bouton d'action -->
          <div style="display: flex; gap: 10px; align-items: center;">

                <!-- Ajouter une note -->
                <a href="/taches/{{ $one->id }}/notes/create" title="Ajouter une note" style="color: #4f46e5;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.5 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8.5"/><path d="M9 18h6"/><path d="M10 14h4"/><path d="m21 2-5 5"/><path d="m22 3-1 1"/></svg>
                </a>

                <!-- Consulter -->
                <a href="/taches/{{ $one->id }}" title="Consulter" style="color: #6b7280;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                </a>

                <!-- Modifier -->
                <a href="/taches/{{ $one->id }}/edit" title="Modifier" style="color: #f59e0b;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                </a>

                <!-- Supprimer -->
                <form action="/taches/{{ $one->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Supprimer cette tâche ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                    </button>
                </form>

            </div>
            </div>
        @endforeach
    </div>
</div>
