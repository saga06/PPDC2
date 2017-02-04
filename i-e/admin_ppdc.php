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
                    <li class="one principal_li logo_candidat logo_users"><a class="white bold" href="interface-liste-utilisateur.php">Utilisateurs</a></li>
                    <li id="new_users">
                        <span class="fa fa-plus-circle logo_add"></span>
                        <a class="blue" href="interface-creation-utilisateur.php">Crée un utilisateur</a>
                    </li>
                    <li id="test" class="two bold principal_li logo_test">Tests
                        <span id="arrow1" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                    </li>
                    <li id="new_test">
                        <span class="fa fa-plus-circle logo_add"></span>
                        <a class="blue" href="test.php">Crée un nouveau test</a>
                    </li>
                    <ul id="second_ul" class="hide">
                        <li id="web" class="toggle">
                            <a class="black bold" href="">WEB</a>
                            <span id="arrow2" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                        </li>
                        <ul id="third_ul">
                            <li class="toggle3"><a class="black" href="./test/web/html/testHTML.php">HTML5</a></li>
                            <li class="toggle3"><a class="black" href="./test/web/css/testCSS.php">CSS3</a></li>
                            <li class="toggle3"><a class="black" href="./test/web/php/testPHP.php">PHP5/7</a></li>
                            <li class="toggle3"><a class="black" href="./test/web/js/testJS.php">JS</a></li>
                        </ul>
                        <li id="java" class="toggle">
                            <a class="black bold" href="">JAVA</a>
                            <span id="arrow3" class="fa fa-caret-down logo_arrow" aria-hidden="true"></span>
                        </li>
                        <ul id="fourth_ul">
                            <li class="toggle4"><a class="black" href="./test/java/j2ee/testJ2EE.php">J2EE</a></li>
                            <li class="toggle4"><a class="black" href="./test/java/maven/testMaven.php">MAVEN</a></li>
                            <li class="toggle4"><a class="black" href="./test/java/hibernate/testHibernate.php">HIBERNATE</a></li>
                        </ul>
                    </ul>
                    <li class="one principal_li logo_statistic"><a class="white bold" href="">Statistiques</a></li>
                </ul>
            </nav>
        </div>
