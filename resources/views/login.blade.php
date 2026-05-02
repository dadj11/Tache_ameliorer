<div style="display: flex; justify-content: center; align-items: center; height: 80vh; font-family: sans-serif;">
    <div style="width: 100%; max-width: 400px; padding: 30px; background: white; border-radius: 15px; border: 1px solid #e5e7eb; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">

        <div style="text-align: center; margin-bottom: 25px;">
            <h2 style="margin: 0; color: #111827;">Connexion</h2>
            <p style="color: #6b7280; font-size: 0.9rem;">Accédez à votre gestionnaire de tâches</p>
        </div>

        <form action="/autentiquate" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            @csrf

            <!-- Champ Email -->
            <div>
                <label for="email" style="display: block; font-weight: 600; margin-bottom: 8px; color: #374151;">Email</label>
                <input type="email" id="email" name="email" required placeholder="exemple@mail.com"
                    style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; outline-color: #4f46e5;">
            </div>

            <!-- Champ Mot de passe -->
            <div>
                <label for="password" style="display: block; font-weight: 600; margin-bottom: 8px; color: #374151;">Mot de passe</label>
                <input type="password" name="password" id="password" required placeholder="••••••••"
                    style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; outline-color: #4f46e5;">
            </div>

            <!-- Bouton Login -->
            <button type="submit" style="background-color: #4f46e5; color: white; border: none; padding: 14px; border-radius: 8px; cursor: pointer; font-weight: bold; font-size: 1rem; transition: background 0.3s;">
                Se connecter
            </button>

        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="/register" style="color: #4f46e5; text-decoration: none; font-size: 0.85rem;">Pas encore de compte ? S'inscrire</a>
        </div>
    </div>
</div>
