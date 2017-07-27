<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r('<pre>');
    var_dump($_POST);
    print_r('</pre>');
} else {
    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="background-carousel">
                <img src="img/devenir2.jpg" alt="restaurant lyon">
            </div>
        </div>

        <div class="container devenir">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="titreDevenir">Comment devenir franchisé ? </h1>
                <p class="comment">Devenir franchisé vous permet de mettre en avant votre restaurant.
                    Nous vous accompagnons dans votre projet de A à Z. Notre souhait est de partager
                    notre savoir faire et agrandir notre réseau de restaurateur. Le but est de répondre au maximum aux
                    exigences de vos futurs clients.
                    Pour cela il suffit de remplir le formulaire ci-dessous et nous vous contacterons pour discuter de
                    votre projet.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2  col-sm-8 col-sm-offset-2 col-md-8 col-lg-4 col-lg-offset-4 formulaire">
                <form action="" method="post" role="form">

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
                        <input type="text" class="form-control" name="lastname" id="lastname"
                               placeholder="Entrez votre nom">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                               placeholder="Entrez votre email">
                    </div>

                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" class="form-control" name="téléphone" id="téléphone"
                               placeholder="Entrez votre n° téléphone">
                    </div>

                    <div>
                        <textarea type="text" class="form-control" name="commentaires" id="commentaires" cols="40"
                                  rows="4"
                                  placeholder="Posez vos questions, expliquez le coté atypique de votre restaurant"></textarea>
                    </div>

                    <div class="row envoi">
                        <div class="col-xs-4 col-xs-offset-4 col-sm-8 col-sm-offset-2
                                            col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">

                            <a href="" class="btn btn-primary btn-lg send"
                               role="button"><b>Envoi</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php } ?>

