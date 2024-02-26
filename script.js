$(document).ready(function(){
    $('.chat_icon').click(function(event) {
        $('.chat_box').toggleClass('active');
    });

    $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
    
    // Agrega un evento submit al formulario dentro de la chat_box
    $('.chat_box form').on('submit', function(event) {
        // Previene que el formulario se envíe
        event.preventDefault();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var tooltips = document.querySelectorAll('.tooltip');

    tooltips.forEach(function(tooltip) {
        var tooltipText = tooltip.querySelector('.tooltiptext');

        tooltip.addEventListener('mouseover', function() {
            tooltipText.style.visibility = 'visible';
            tooltipText.style.opacity = '1';
        });

        tooltip.addEventListener('mouseout', function() {
            tooltipText.style.visibility = 'hidden';
            tooltipText.style.opacity = '0';
        });
    });


});

