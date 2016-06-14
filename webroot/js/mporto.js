/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($){
    $('#file').submit(function(){
        $(this).ajaxSubmit();
    });
    $('.carousel').carousel({
        interval: 5000
    });
});


