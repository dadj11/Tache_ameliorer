<div style="font-family: sans-serif; max-width: 500px; margin: 40px auto; padding: 20px; border: 1px solid #e5e7eb; border-radius: 15px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); background: white;">

    <h2 style="color: #111827; margin-top: 0; display: flex; align-items: center; gap: 10px;">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 24px; height: 24px; color: #4f46e5;">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Nouvelle Tâche
    </h2>

    <form action="/taches" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
        @csrf {{-- Utilise la directive Laravel @csrf si possible --}}

        <div>
            <label for="titre" style="display: block; font-weight: 600; margin-bottom: 5px; color: #374151;">Titre</label>
            <input type="text" id="titre" name="titre" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
        </div>

        <div>
            <label for="description" style="display: block; font-weight: 600; margin-bottom: 5px; color: #374151;">Description</label>
            <textarea id="description" name="description" rows="3" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-family: sans-serif;"></textarea>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <div>
                <label for="date" style="display: block; font-weight: 600; margin-bottom: 5px; color: #374151;">Date</label>
                <input type="date" id="date" name="date" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            </div>
            <div>
                <label for="Heure" style="display: block; font-weight: 600; margin-bottom: 5px; color: #374151;">Heure</label>
                <input type="time" id="Heure" name="Heure" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            </div>
        </div>

        <div>
            <label for="duree" style="display: block; font-weight: 600; margin-bottom: 5px; color: #374151;">Durée estimée</label>
            <input type="time" id="duree" name="duree" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
        </div>

        <div style="display: flex; gap: 10px; margin-top: 10px;">
            <button type="submit" style="flex: 2; background-color: #4f46e5; color: white; border: none; padding: 12px; border-radius: 6px; cursor: pointer; font-weight: bold; transition: background 0.3s;">
                Enregistrer la tâche
            </button>
            <button type="button" onclick="window.location='/'" style="flex: 1; background-color: #f3f4f6; color: #374151; border: 1px solid #d1d5db; padding: 12px; border-radius: 6px; cursor: pointer; font-weight: bold;">
                Annuler
            </button>
        </div>
    </form>

</div>
