<nav id="menu">        
    <div class="element_menu">
                     <h3>   <a class="nav-link" href="index.php">Accueil</a> </h3>
                    
        <ul>
            <li><a href="form_contact.php">Contact</a></li>
            <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="recipes_create.php">Ajoutez une recette !</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                    </li>
                <?php endif; ?>
            
            

        </ul>
    </div>    
</nav>