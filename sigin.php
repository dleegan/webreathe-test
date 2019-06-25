<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles/signin.css">
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Connexion</title>
    </head>
    <body>
        <form class="form-signin" action="user-profile-link.php">
            <h2 style="text-align:center">Connectez-vous</h2>
            <!--<input type="nom" id="inputEmail" class="form-control" placeholder="Email">
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de Passe">-->
            <div class="checkbox mb-3 form-group">
                <select required name="user-profile" class="custom-select">
                    <option selected="" value="">Sélectionner votre profile</option>
                    <option value="Administrateur">Administrateur</option>
                    <option value="Gestionnaire">Gestionnaire</option>
                    <option value="Technicien">Technicien</option>
                </select>
            </div>
            <input class="btn btn-primary btn-mg" type="submit" name="formValidate" value="Valider">
        </form>
    </body>
</html>
