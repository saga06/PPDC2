        <div id="colonne1">
            <p>LOGO</p> <!-- mettre le logo de l'entreprise -->

            <!--
            - Colone de gauche où s'affiche
            - utlisateurs
                - créer un nouvel utilisateur pour les recruteurs et admin
            - tests
                - créer un nouveau test pour les admins uniquement
            - statistiques
          -->
            <nav>
                <ul class="first_ul">
                    <li class="one principal_li logo_candidat"><a class="white bold" href="interface-liste-candidats.php">Candidats</a></li>
                    <li id="new_candidat">
                        <span class="fa fa-plus-circle logo_add"></span>
                        <a class="blue" href="">Crée un candidat</a>
                    </li>
                    <li id="test" class="two bold principal_li logo_test">Test
                        <span id="arrow1" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                    </li>
                    <ul id="second_ul" class="hide">
                        <li id="web" class="toggle">
                            <a class="black bold" href="">WEB</a>
                            <span id="arrow2" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                        </li>
                        <ul id="third_ul">
                            <li class="toggle3"><a class="black" href="">HTML5</a></li>
                            <li class="toggle3"><a class="black" href="">CSS3</a></li>
                            <li class="toggle3"><a class="black" href="">PHP5/7</a></li>
                            <li class="toggle3"><a class="black" href="">JS</a></li>
                        </ul>
                        <li id="java" class="toggle">
                            <a class="black bold" href="">JAVA</a>
                            <span id="arrow3" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                        </li>
                        <ul id="fourth_ul">
                            <li class="toggle4"><a class="black" href="">J2EE</a></li>
                            <li class="toggle4"><a class="black" href="">MAVEN</a></li>
                            <li class="toggle4"><a class="black" href="">HIBERNATE</a></li>
                        </ul>
                    </ul>
                    <li class="one principal_li logo_statistic"><a class="white bold" href="">Statistique</a></li>
                </ul>
            </nav>
        </div>
