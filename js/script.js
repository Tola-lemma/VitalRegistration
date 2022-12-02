//         // sticky navbar on scroll script

let nav = document.querySelector('nav')
window.onscroll=function(){ //window.onscroll=()=>{ possible like this
    if(window.scrollY > 30){
        nav.classList.add('sticky')
    }
    else{
        nav.classList.remove('sticky')
    }
}

let ch1 =document.querySelector('.menu')
console.log(ch1.classList.toggle('active'))
  

  // typing text animation script
  var imageA = ["Birth","Marriage","Death"];
  var index = 1;
  function showtext(){
      document.getElementById('typing').innerHTML='<p style="display:inline ;color:white;"><i> Registration of  </i></p>'+imageA[index];
      index++;
      if(index==3)
        index=0;
  }
  setInterval('showtext()',1000);

 
// registration page
var x=0;
function showBirth(){
  if(x==1)
  {
    document.getElementById("formBirth").style.display="none";
    return x=0;

  }
  
  else{
    document.getElementById("formBirth").style.display="block";
    return x=1;
  }
}
 
var y=0;
function showMarriage(){
  
  if(y==1)
  {
    document.getElementById("formMarriage").style.display="none";
    return y=0;

  }
  
  else{
    document.getElementById("formMarriage").style.display="block";
    return y=1;
  }
}
 
var z=0;
function showDeath(){
  
  if(z==1)
  {
    document.getElementById("formDeath").style.display="none";
    return z=0;

  }
  
  else{
    document.getElementById("formDeath").style.display="block";
    return z=1;
  }
}
 



