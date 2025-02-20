
    <h1>Ajouter un Nouveau Vinyle</h1>

    <form  method="POST" enctype="multipart/form-data">
        @csrf
        <label for="img">Image URL:</label>
        <input type="text" name="img" id="img" required><br><br>

        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="release_year">Année de sortie :</label>
        <input type="number" name="release_year" id="release_year" required><br><br>

        <label for="label">Label :</label>
        <input type="text" name="label" id="label" required><br><br>

        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea><br><br>


        <label for="description">Artiste :</label>
        <textarea name="artist_id" id="artist_id" required></textarea><br><br>

        <button type="submit">Ajouter</button>
    </form>

