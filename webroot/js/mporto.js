/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($){
    $('#file').submit(function(){
        $(this).ajaxSubmit();
    });
    
    $('#myCarousel').carousel({
        interval: 5000
    });
    
    $('#partners').carousel({
        interval: 5000,
        pause: 'hover',
        wrap: true
    });
    
    $('#partners .item').each(function(){
        var next = $(this);
        var last;
        for (var i=0;i<5;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            last=next.children(':first-child').clone().appendTo($(this));
        }
        last.addClass('rightest');

    });
    

});


