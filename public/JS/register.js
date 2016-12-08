 function validateForm(){
 var x = document.forms["register"]["sname"].value;
 var y = document.forms["register"]["sid"].value;
 var z = document.forms["register"]["email"].value;

 if (x == "" ) {
     document.getElementById('no_name').innerHTML = "*Name must be filled out";
 }

 if(y == ""){
   document.getElementById('no_ID').innerHTML = "*ID must be filled out";
 }
 if(z == ""){
   document.getElementById('no_email').innerHTML = "*email must be filled out";
 }
 if(x=="" || y=="" || z==""){
   return false;
 }
 else{
   if(isNaN(y)){
     document.getElementById('no_ID').innerHTML = "*enter a valid ID!";
     return false;
   }

 else{
 var atpos = z.indexOf("@");
 var dotpos = z.lastIndexOf(".");
 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
     document.getElementById('no_email').innerHTML = "*enter a valid email!";
     return false;
 }
}
}
}
