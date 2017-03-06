<nav class="navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Restaurant Atypique</a>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($page == "index"){ echo 'class="active"'; } ?>><a href="/?page=index">Accueil</a></li>
                <li <?php if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="/?page=restaurant">Restaurants</a></li>
                <li <?php if($page == "devenir"){ echo 'class="active"'; } ?>><a href="/?page=devenir">Devenir Franchisé</a></li>
                <li <?php if($page == "contact"){ echo 'class="active"'; } ?>><a href="/?page=contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
