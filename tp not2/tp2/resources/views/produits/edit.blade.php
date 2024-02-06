<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Modifier le produit</title>
    <style>
        body {
            background-color: #e2e2e2; /* Changer la couleur de fond */
            font-family: Arial, sans-serif; /* Changer la police du texte */
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-container {
            border: 2px solid #3498db; /* Changer la couleur de la bordure */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 8px; /* Ajouter des coins arrondis */
        }
        .form-container label {
            margin-bottom: 10px; /* Ajuster la marge sous les labels */
            display: block; /* Pour ajouter une marge au-dessus du label */
            font-weight: bold; /* Rendre le texte en gras */
        }
        .form-container input {
            width: 100%;
            padding: 10px; /* Ajuster la taille du padding */
            margin-bottom: 20px; /* Ajuster la marge sous les champs de saisie */
            border: 2px solid #3498db;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 12px; /* Ajuster la taille du padding */
            background-color: #3498db; /* Changer la couleur du bouton */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9; /* Changer la couleur au survol */
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px; /* Ajuster la marge en haut du lien */
            color: #3498db;
            text-decoration: none;
            font-weight: bold; /* Rendre le texte en gras */
        }
        a:hover {
            color: #2980b9; /* Changer la couleur au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="mb-4">Modifier le produit</h1>
            <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <label for="libelle">Libellé:</label>
                <input type="text" class="form-control" name="libelle" value="{{  $produit->libelle }}" required>

                <label for="marque">Marque:</label>
                <input type="text" class="form-control" name="marque" value="{{  $produit->marque }}" required>

                <label for="prix">Prix:</label>
                <input type="number" class="form-control" name="prix" value="{{  $produit->prix }}" step="0.01" required>

                <label for="stock">Stock:</label>
                <input type="number" class="form-control" name="stock" value="{{  $produit->stock }}" required>

                <label for="image">Image:</label>
                <input type="file" class="form-control" name="image">

                <button type="submit" class="btn btn-primary mt-3">Enregistrer les modifications</button>
            </form>

            <a href="{{ route('produits.index') }}">Retour à la liste des produits</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
