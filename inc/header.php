<<<<<<< HEAD
<div class="row">
    <div class="navbar navbar-default" role="navigation">
        <a class="navbar-brand" href="#">Restaurant Atypique</a>
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/?page=contact">Contact</a></li>
        </ul>
=======
<nav class="navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#">Logo</a>
            <h1 class="navbar-text">Restaurant Atypique</h1>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if($page == "index"){ echo 'class="active"'; } ?>><a href="/">Accueil</a></li>
                <li <?php if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="/?page=restaurant">Restaurants</a></li>
                <li <?php if($page == "franchise"){ echo 'class="active"'; } ?>><a href="/?page=franchise">Devenir Franchisé</a></li>
                <li <?php if($page == "contact"){ echo 'class="active"'; } ?>><a href="/?page=contact">Contact</a></li>
            </ul>
        </div>
>>>>>>> 52bfd07e1c44901600312295c9cab0edb47a84c1
    </div>
</nav>
