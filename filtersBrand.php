<div id="filtersBrandCode">

    <?php
    require_once 'databaseConnexion.php';

    // Récupération des marques de voitures depuis la base de données
    $sql = "SELECT DISTINCT marque FROM cars";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Création des options du select en utilisant les marques de voitures
    $options = '<option value="">Toutes</option>';
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $marque = $row['marque'];
        $options .= "<option value=\"$marque\">$marque</option>";
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
    ?>
    <div class="row">
        <div class="container catalogue text-center">
            <p class="my-auto">
                <a class="no-underline text-danger text-p" href="catalogue.php">Consultez notre catalogue jusqu'à 1500
                    véhicules disponibles</a>
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="filtres my-3 px-2 text-center">
            <p>
            <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="marque" name="marque" style="width: 200px;" class="mx-auto">
                        <option value="">Marque</option>
                        <?php echo $options; ?>
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="modele" style="width: 200px;" class="mx-auto">
                        <option value="">Modèle</option>

                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="prix" style="width: 200px;" class="mx-auto">
                        <option value="">Prix</option>
                        <option value="de 0 à 10.000 €">de 0 à 10.000 €</option>
                        <option value="de 10.000 à 20.000 €">de 10.000 à 20.000 €</option>
                        <option value="de 20.000 à 30.000 €">de 20.000 à 30.000 €</option>
                        <option value="de 30.000 à 40.000 €">de 30.000 à 40.000 €</option>
                        <option value="de 40.000 à 50.000 €">de 40.000 à 50.000 €</option>
                        <option value="de 50.000 à 75.000 €">de 50.000 à 75.000 €</option>
                        <option value="de 75.000 à 100.000 €">de 75.000 à 100.000 €</option>
                        <option value="+ de 100.000 €">+ de 100.000 €</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="kilometres" style="width: 200px;" class="mx-auto">
                        <option value="">Kilométrage</option>
                        <option value="de 0 à 50.000km">0-50.000km</option>
                        <option value="de 50.000 à 100.000 km">50.000-100.000km</option>
                        <option value="de 100.000 à 150.000 km">100.000-150.000km</option>
                        <option value="de 150.000 à 200.000 km">150.000-200.000km</option>
                        <option value="+ de 200.000 km">+ de 200.000km</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="annee" name="annee" style="width: 200px;" class="mx-auto">
                        <option value="">Année</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="carburant" name="carburant" style="width: 200px;" class="mx-auto">
                        <option value="">Carburant</option>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electrique">Electrique</option>
                        <option value="Hybride">Hybride</option>
                        <option value="GPL">GPL</option>

                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="boite_de_vitesse" name="boite_de_vitesse" style="width: 200px;" class="mx-auto">
                        <option value="">Transmission</option>
                        <option value="Manuelle">Manuelle</option>
                        <option value="Automatique">Automatique</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                    <select id="tri" style="width: 200px;" class="mx-auto">
                        <option value="">Trier par</option>
                        <option value="prix_asc">Prix croissant</option>
                        <option value="prix_desc">Prix décroissant</option>
                        <option value="kilometres_asc">KM croissant</option>
                        <option value="kilometres_desc">KM décroissant</option>
                    </select>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>