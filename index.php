<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Devis Ecosolar</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/test.css" rel="stylesheet">
  <link href="css/listtest.css" rel="stylesheet">
  <link rel="stylesheet" href="css/maison.css" />
  <link href="css/angle_toit.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="carte.css" rel="stylesheet">
</head>

<body>
  <header>
  </header>
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <img class="logo rounded mx-auto d-block" src="img/icone-pastille-ecosolar-rvb.png" />
    </div>
  </div>

  

  <!-- MultiStep Form -->
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <form id="msform" method="post" action="resultat.php">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Consommation</li>
          <li>Toiture</li>
          <li>Localisation bâtiment</li>
          <li>Informations bâtiment</li>
          <li>Vos appareils</li>
          <li>Informations personnelles</li>
        </ul>
        <!-- fieldsets -->

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur la consommation</h2>
            <hr class="hr2">
          </div>
          <div class="display_conso">
            <div class="form-group d-flex flex-column conso">
              <label for="consommation" class=data-toggle="tooltip" data-placement="top"
                title="obligatoire">Consommation*:</label>
              <div class="custom-control custom-radio">
                <input class="form-control" placeholder="Montant facture annuelle" type="text" name="montant_facture"
                  id="input_conso">
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="montant_facture" value="pas de facture" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">
                  Je n'ai pas ma facture d'électricité.
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="fournisseur">Fournisseur</label> : </br>
              <div class="btn-group-toggle d-flex column" data-toggle="buttons">
                <label class="btn button_edf"><img src="img/EDF_energy.png" alt="edf"
                      style="max-height: 4em;"></label>
              <input type="radio" checked autocomplete="off" name="fournisseur" value="edf"></input>
<div class="btn-group-toggle" data-toggle="buttons">
  <label class="btn button_autre">
                <input type="radio" cheked autocomplete="off" name="fournisseur" value="autre"><img src="img/autre_logo.png" alt="autre"
                    style="height:2em;"><br>Autre</input>
                  </div>
                </label>
              </div>
            </div>
          </div>
          </br>
          <div class="display_chauff">
            <div class="form-group chauff_colonne" id="chauffage">
              <img class="img_chauff1" src="icons/chauffage.png" style="width:24%;">
              <label for="exampleFormControlSelect2">Chauffage</label>
              <select class="form-control" name="chauffage" id="exampleFormControlSelect2">
                <option>Chauffage électrique</option>
                <option>Climatisation (PAC Air/Air)</option>
                <option>Pompe à chaleur Air/Eau</option>
                <option>Chauffage gaz, fioul ou bois</option>
              </select>
            </div>
            <div class="form-group chauff_colonne">
              <img class="img_chauff1" src="icons/logo-eau.png" style="width:30%;">
              <label for="exampleFormControlSelect1">Chauffage-eau</label>
              <select class="form-control" name="chauffage_eau" id="exampleFormControlSelect1">
                <option>Résistance électrique</option>
                <option>Pompe à chaleur</option>
                <option>Chaudière bois</option>
                <option>Chaudière gaz</option>
                <option>Chaudière fuel</option>
              </select>
            </div>
          </div>



          <input type="button" name="next" class="next action-button" value="Suivant" />
        </fieldset>

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur la toiture</h2>
            <hr class="hr2">
          </div>
          <div class="container toiture">
            <div class="row">
              <div class="col">
                <div class="form-group orientation">
                  <label for="orientation" data-toggle="tooltip" data-placement="top"
                    title="Obligatoire">Orientation*</label> : <br>
                  <!-- ligne contenant l'orientation avec les triangles animer en jquery -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex flex-column bloc_orientation">
                    <div class="maison d-flex justify-content-center">
                      <img id="ouest" src="img/ouest.png" />
                      <img id="Sud_ouest" src="img/Sud_ouest.png" />
                      <img id="Sud" src="img/Sud.png" />
                      <img id="est" src="img/est.png" />
                      <img id="Sud_est" src="img/Sud-est.png" />
                    </div>
                    <div class="button">
                      <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                      <input type="radio" cheked autocomplete="off" id="button_ouest" type="button" name="orientation" value="ouest"
                        class="btn btn-primary">Ouest</input>
                      </div>
                    </label>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                      <input type="radio" id="button_Sud_ouest" type="button" name="orientation" value="sud_ouest"
                        class="btn btn-primary">Sud_ouest</input>
                      </div>
                    </label>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                      <input type="radio" cheked autocomplete="off" id="button_Sud" type="button" name="orientation" value="sud"
                        class="btn btn-primary">Sud</input>
                      </div>
                    </label>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                      <input type="radio" cheked autocomplete="off" id="button_est" type="button" name="orientation" value="est"
                        class="btn btn-primary">Est</input>
                      </div>
                    </label>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                      <input type="radio" cheked autocomplete="off" id="button_Sud_est" type="button" name="orientation" value="sud_est"
                        class="btn btn-primary">Sud_est</input>
                      </div>
                    </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- fin du bloc orientation -->
              <div class="col">
                <div id="angle_form" class="d-flex flex-column">

                  <div>
                    <label for="inclinaison" data-toggle="tooltip" data-placement="top"
                      title="obligatoire">Inclinaison*</label> : <br>
                  </div>

                  <canvas class="moncanvas d-flex" id="canvas" width="500" height="500"></canvas>


                  <label>Angle d'inclinaison approximatif de votre toiture en °</label><br />
                  <div class="d-flex justify-content-center">
                    <div class="form-check form-check-inline">
                      <!--!!!!!!!!!!!!!!!!!!! le onclick est nécessaire pour récupérer la valeur de l'input -->

                      <div class="d-flex flex-column">
                        <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                          name="inclinaison" id="angle1" value="5">
                        <label class="form-check-label" for="inlineRadio1">05</label>
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="d-flex flex-column">
                        <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                          name="inclinaison" id="angle2" value="20">
                        <label class="form-check-label" for="inlineRadio2">20</label>
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="d-flex flex-column">
                        <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                          name="inclinaison" id="angle3" value="35">
                        <label class="form-check-label" for="inlineRadio3">35</label>
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="d-flex flex-column">
                        <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                          name="inclinaison" id="angle4" value="45">
                        <label class="form-check-label" for="inlineRadio4">45</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" Suivant" />
        </fieldset>
        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations pour le calcul d'énergie</h2>
            <hr class="hr2">
          </div>
          <div class="container batiment">
            <div class="row">
              <div class="col">
                <div class="form-group orientation">
                  <div class="form-group">
                    <label for="couverture" ata-toggle="tooltip" data-placement="top" title="Obligatoire">carte*</label>
                    :
                  </div>
                  <?php include ('carte.html'); ?>

                </div>
              </div>

              <!-- fin du bloc orientation -->
              <div class="col d-flex">
                <div class="surface_toiture">
                  <div class="form-group surface">
                    <label for="surface" data-toggle="tooltip" data-placement="top" title="Obligatoire">Surface*</label>
                    :
                  </div>
                  <div class="button_toiture">
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                                    <input type="radio" cheked autocomplete="off"
                     value="<35m" name="surface"><img class="toiture_svg"
                        src="img/house-roof.svg">
                      <p>
                        < 35m</p> </input>
                      </div>
                    </label>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                                    <input type="radio" cheked autocomplete="off"
                       value="35m<valeur<50m" name="surface"><img
                            class="toiture_svg2" src="img/house-roof.svg" />
                          <p>35 - 50m</p>
                    </input>
                  </div>
                </label>
                <div class="btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                                <input type="radio" cheked autocomplete="off"
                   value=">50m" name="surface"><img class="toiture_svg3"
                        src="img/house-roof.svg">
                      <p>> 50m</p>
                    </input>
                  </div>
                </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" Suivant" />
        </fieldset>

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur le bâtiment</h2>
            <hr class="hr2">
          </div>
          <div class="container-fluid d-flex justify-content-center">
            <div class="form-group p-3">
              <label for="cotation">cotation:</label>
              <div class="row d-flex justify-content-center cotation">
                <img src="img/cotation.png" class="img-thumbnail" style="height:12em; width:15em;">
              </div>
            </div>

            <div class="form-group d-flex flex-column string optional study_roof_height hauteur"><label
                class="string optional" for="study_roof_height">Hauteur du bâtiment</label>

              <div class="input-group h-25">
                <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                  value="3" name="hauteur" id="study_roof_height">
                <div class="input-group-append">
                  <label class="input-group-text" for="inputGroupSelect02">m</label>
                </div>
              </div>
              <label for="age">age:</label> <input type="text" name="age" id="age" />
            </div>

          </div>


          <div class="form-group">
            <label for="couverture">Couverture</label> :
            <?php include ('checkbox.php'); ?>
          </div>



          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" Suivant" />
        </fieldset>

        <fieldset>
          <?php include ('listtest.html'); ?>
          <h3 class="fs-subtitle">Cochez ce qui vous correspond</h3>
          <!-- ajouter une liste d'appareils électriques à cocher le nombre possedé -->
          <div class="form-group">
            <label for="Nombre_personnes_foyer">Nombre personnes foyer</label> :
            <div class="input-group">
              <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                value="10" name="nombre_personne_foyer" id="nombre_personnes_foyer">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="photo">Photo du bâtiment</label>
            <input type="file" class="form-control-file" name="photo_batiment" id="photo" />
          </div>

          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value="Suivant" />

        </fieldset>

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="modal-title">Information personnel</h2>
            <hr class="hr2">
          </div>
          <div class="form-row">
            <div class="col-7 mb-3 d-flex align-items-center">
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="" name="civilite" id="Monsieur">
                <label class="custom-control-label" for="Monsieur">Monsieur</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="" name="civilite" id="Madame">
                <label class="custom-control-label" for="Madame">Madame</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="nom" type="text" name="nom" id="nom">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="prenom" type="text" name="prenom" id="prenom">
            </div>
          </div>


          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="email" type="email" name="email" id="mail">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="Telephone" type="text" name="telephone" id="telephone">
            </div>
          </div>

          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="Adresse" type="text" name="adresse" id="adresse">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="code postal" type="text" name="code_postal" id="code_postal">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="Ville" type="text" name="ville" id="ville">
            </div>

          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Plus d'informations</label>
            <textarea class="form-control" name="info_complementaire" id="exampleFormControlTextarea1"
              rows="3"></textarea>
          </div>
          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="submit" name="submit" class="submit action-button" value="Envoyer" />
        </fieldset>
      </form>
    </div>
  </div>
  <!-- /.MultiStep Form -->



  </main>


  <footer>
    <div class="copyright">
      <a href="http://ecosolar.energy/mentions-legales/" target="_blank">Mentions Légales</a>
      <a href="http://ecosolar.energy/rgpd/" target="_blank">Protection des données</a>
      <p>© Création du Formulaire Lilian, Mohamed, Axel</p>
    </div>



  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/test.js"></script>
  <script src="js/maison.js"></script>
  <script src="js/angle.js"></script>
  <script src="js/checkbox.js"></script>
  <script src="carte.js"></script>

</body>

<script>




</script>

</html>
