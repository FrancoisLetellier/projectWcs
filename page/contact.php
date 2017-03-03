<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        print_r('<pre>');
        var_dump($_POST);
        print_r('</pre>');
    }else{
    ?>


<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="" method="post" role="form">
                <legend>Formulaire de contact</legend>

                <div class="form-group">
                    <label for="">Nom restaurant</label>
                    <input type="text" class="form-control" name="nomrestaurant" id="nomrestaurant"
                           placeholder="Entrez votre nom de restaurant">
                </div>

                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname"
                           placeholder="Entrez votre prénom">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Entrez votre email">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="téléphone" id="téléphone"
                           placeholder="Entrez votre n° téléphone">
                </div>
                <div>
                    <textarea type="text" class="form-control" name="commentaires" id="commentaires" cols="40" rows="4"
                              placeholder="Posez vos questions, expliquez le coté atypique de votre restaurant"></textarea>
                </div>



                <button type="submit" class="btn btn-primary">Envoi du formulaire</button>
            </form>
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>
<?php } ?>