  //SIDENAVBAR  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, null);
  });

  //PARALLAX
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, null);
  });

  //jquery CAROUSEL
  
  $(document).ready(function(){$('.carousel').carousel();});

  //select premium
  $(document).ready(function(){
    $('select').formSelect();
  });

  //modal
  $(document).ready(function(){
    $('.modal').modal();
  });