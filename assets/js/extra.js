/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function(arg) {
    return function( elem ) {
        console.log(arg.toUpperCase());
        return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});
 
$(document).ready(function(){ 
    $( 'section.sidebar #keywords' ).keyup( function() {
        if($( this ).val().length > 0) {
            $( 'ul.sidebar-menu' ).find( 'ul.treeview-menu' ).addClass('menu-open').css("display","block");
            var matches = $( 'ul.sidebar-menu' ).find( 'li:Contains('+ $( this ).val() +') ' );
            $( 'li', 'ul.sidebar-menu' ).not( matches ).slideUp();
            matches.slideDown();
        } else {
            $( 'li', 'ul.sidebar-menu' ).slideDown();
            $( 'ul.sidebar-menu' ).find( 'ul.treeview-menu' ).removeClass('menu-open').css("display","none");
        }
    });
}) 
