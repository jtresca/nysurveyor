//HEADER
$(document).ready(function(){ 
  
    $("#header").load('./includes/header.html');
    $("#hero").load('./includes/hero.html');
    $("#nav").load('./includes/nav.html');
    $("#areas-a").load('./includes/areas-a.html');
    $("#areas-b").load('./includes/areas-b.html');
    $("#moreservices").load('./includes/otherservice.html');
    $("#footer").load('./includes/footer.html');
  
}); 

$(window).load(function() {
  
var url = window.location;


$('.nav-pills li.active').removeClass('active');

// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');

})


//jQuery includes////

