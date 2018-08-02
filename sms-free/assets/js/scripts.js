
//----Include-Function----
function include(url){ 
  document.write('<script src="js/'+ url + '"></script>'); 
  return false ;
}
/*========================================================*/
/* BOOTSTRAP.JS
========================================================*/
include('bootstrap.min.js');


/*========================================================*/
/* YEAR.JS
========================================================*/

var currentYear = (new Date).getFullYear();
$(document).ready(function() {
$("#copyright-year").text( (new Date).getFullYear() );
});






