/**************************** FONCTION TOGGLE TREEVIEW TEST ****************************/

$(document).ready(function() {
    
    $('#test').on('click', function() { //  quand on clique sur 1er logo down arrow
        if($('#second_ul').hasClass('hide')) // si sous catégorie est caché
        {   // on montre la sous catégorie
            $('#second_ul').removeClass('hide');
            $('.toggle').hide();
            $('.toggle').toggle(500); // animation en ms
            $('#third_ul').addClass('hide');
            $('#fourth_ul').addClass('hide');
        }
        else
        {   // on cache la sous catégorie
            $('#second_ul').toggle(500); // animation en ms
        }
    });
    
    $('#web').on('click', function() { //  quand on clique sur 2eme logo fleche en bas
        if($('#third_ul').hasClass('hide')) // si sous catégorie est caché
        {   // on montre la sous catégorie
            $('#third_ul').removeClass('hide'); 
            $('.toggle3').hide();
            $('.toggle3').toggle(500); // animation en ms
        }
        else
        {   // on cache la sous catégorie
            $('.toggle3').toggle(500); // animation en ms
        }
        
    });
    
    $('#java').on('click', function() { //  quand on clique sur 3eme logo fleche en bas
        if($('#fourth_ul').hasClass('hide')) // si sous catégorie est caché
        {   // on montre la sous catégorie
            $('#fourth_ul').removeClass('hide'); 
            $('.toggle4').hide();
            $('.toggle4').toggle(500); // animation en ms
        }
        else
        {   // on cache la sous catégorie
            $('.toggle4').toggle(500); // animation en ms
        }
        
    });
    
/**************************** FUNCTION NAV LATERAL ARROW CHANGE ****************************/
    
    $('#test').on('click', function() {
        if($('#arrow1').hasClass('fa-caret-down'))
        {
            $('#arrow1').removeClass('fa-caret-down');
            $('#arrow1').addClass('fa-caret-up');
        }
        else
        {
            $('#arrow1').removeClass('fa-caret-up');
            $('#arrow1').addClass('fa-caret-down');
        }
    });
    
    $('#web').on('click', function() {
        if($('#arrow2').hasClass('fa-caret-down'))
        {
            $('#arrow2').removeClass('fa-caret-down');
            $('#arrow2').addClass('fa-caret-up');
        }
        else
        {
            $('#arrow2').removeClass('fa-caret-up');
            $('#arrow2').addClass('fa-caret-down');
        }
    });
    
    $('#java').on('click', function() {
        if($('#arrow3').hasClass('fa-caret-down'))
        {
            $('#arrow3').removeClass('fa-caret-down');
            $('#arrow3').addClass('fa-caret-up');
        }
        else
        {
            $('#arrow3').removeClass('fa-caret-up');
            $('#arrow3').addClass('fa-caret-down');
        }
    });
    
});
