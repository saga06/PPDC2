(function() {
    
    /*
    LORSQUE l'on clique sur un onglet
       * ON RETIRE la classe active de l'onglet actif
       * J'ajoute la classe active à l'onglet actuel

        * ON RETIRE la classe active sur le contenu actif
        J'ajoute la classe active sur le contenu correspondant à mon clic
    */

    var afficherOnglet = function (a, animations) {
        
        if (animations === undefined)
        {
            animations = true;
        }
        var li = a.parentNode;
        var div = a.parentNode.parentNode.parentNode;
        var  activeTab = div.querySelector('.tab-content.active');
        //contenu actif
        var aAfficher = div.querySelector(a.getAttribute('href'));
        //contenu a afficher

        if(li.classList.contains('active'))
        {
            return false;
        }
        // On retire la classe activ de l'onglet actif
        div.querySelector('.tabs .active').classList.remove('active');
        // J'ajoute la classe active à l'onglet actuel.
        li.classList.add('active');

        // ON RETIRE la classe active sur le contenu actif
        //div.querySelector('.tab-content.active').classList.remove('active');
        // J'ajoute la classe active sur le contenu correspondant à mon clic
        //div.querySelector(a.getAttribute('href')).classList.add('active'); 
        
        if (animations)
        {
            activeTab.classList.add('fade');
            activeTab.classList.remove('in');
            var finTransition = function() {
                this.classList.remove('fade');
                this.classList.remove('active');
                aAfficher.classList.add('active');
                aAfficher.classList.add('fade');
                aAfficher.offsetWidth;
                aAfficher.classList.add('in');
                activeTab.removeEventListener('transitionend', finTransition);
                activeTab.removeEventListener('webkitTransitionEnd', finTransition);
                activeTab.removeEventListener('otransitionend', finTransition);
            }
            activeTab.addEventListener('transitionend', finTransition );
            activeTab.addEventListener('webkitTransitionEnd', finTransition);
            activeTab.addEventListener('otransitionend', finTransition);
        }
        else
        {
            aAfficher.classList.add('active');
            activeTab.classList.remove('active');
        }
        
        // ON ajoute la class fade sur l'élement actif
        // A la fin de l'animation
        //  On retire la class fade et active
        //  On ajoute la classe activ et fade à l'élément à afficher
        //  ON ajoute la class in
    }

    var tabs = document.querySelectorAll('.tabs a');
    for (var i = 0; i < tabs.length; i++) 
    {
        tabs[i].addEventListener('click', function (e) {
            afficherOnglet(this);
        });
    }

    /*
    JE RECUPERE le hash
    AJOUTER LA CLASS active sur le lien href="hash"
    RETIRER LA CLASS active sur les autres onglets
    AFFICHER / MASQUER les contenus

    */
    
    var hashChange = function () {
        var hash = window.location.hash;
        var a = document.querySelector('a[href="' + hash + '"]');
        if( a !== null && !a.parentNode.classList.contains('active'))
        {
            afficherOnglet(a);
        }
    }
    
    window.addEventListener('hashchange', hashChange) 
    hashChange();
    
    
})();