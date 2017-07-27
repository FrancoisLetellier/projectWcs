<nav class="navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/?page=index">Restaurant Atypique</a>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($page == "index"){ echo 'class="active"'; } ?>><a href="/?page=index">Accueil</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurant<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="/?page=restaurant&&#restoLyon">Lyon</a></li>
                        <li <?php if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="/?page=restaurant&&#restoParis">Paris</a></li>
                        <li <?php if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="/?page=restaurant&&#restoMarseille">Marseille</a></li>
                    </ul>
                </li>
                <li <?php if($page == "devenir"){ echo 'class="active"'; } ?>><a href="/?page=devenir">Devenir Franchisé</a></li>
                <li><a href="#contact-footer">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
