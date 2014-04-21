////////////////////////////////////////////////////////////
/////////// changement de couleur du menu naviguer /////////
///////////////////////////////////////////////////////////

// Declaration des variables
// Couleurs
glisseecolo_col = "#cdeecd";
surf_col = "#a0cce1";
kite_col = "#cff6f3";
snow_col = "#feaf6f";
ski_col = "#DAA520";
skate_col = "#D3D3D3";
lb_col = "#b9b9ba";
trot_col = "";
autres_col = "";

// onglet naviguer
nav_glisseecolo = "nav_glissecolo";
nav_surf = "nav_surf";
nav_kite = "nav_kite";
nav_snow = "nav_snowboard";
nav_ski = "nav_ski";
nav_skate = "nav_skate";
nav_lb = "nav_longboard";
nav_trot = "nav_trotinnette";
nav_autres = "nav_autres";

// Fonction changement de couleur
function color_switch(div, color) {
    $('#' + div).mouseover(function() {
        $(this).css({
            backgroundColor: color,
            WebkitTransition: 'background-color 0.1s ease-in-out',
            MozTransition: 'background-color 1s ease-in-out',
            MsTransition: 'background-color 1s ease-in-out',
            OTransition: 'background-color 1s ease-in-out'
        });
        $('body').css({
            background: 'linear-gradient(#dbffff,'+color+')',
            WebkitTransition: 'background 0.1s ease-in-out',
            MozTransition: 'background 1s ease-in-out',
            MsTransition: 'background 1s ease-in-out',
            OTransition: 'background 1s ease-in-out'
        });
    });
    $('#' + div).mouseout(function() {
        $(this).css({
            backgroundColor: 'white',
            WebkitTransition: 'background-color 0.1s ease-in-out',
            MozTransition: 'background-color 1s ease-in-out',
            MsTransition: 'background-color 1s ease-in-out',
            OTransition: 'background-color 1s ease-in-out'
        });
    });
}
// Activation du changement de couleur
$(function() {
    color_switch(nav_glisseecolo, glisseecolo_col);
    color_switch(nav_surf, surf_col);
    color_switch(nav_kite, kite_col);
    color_switch(nav_snow, snow_col);
    color_switch(nav_ski, ski_col);
    color_switch(nav_skate, skate_col);
    color_switch(nav_lb, lb_col);
});