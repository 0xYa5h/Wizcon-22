window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
    document.getElementById("nav").style.padding = "10px 10px";
    document.getElementById("icon").style.fontSize = "1.5em";
    var elements = document.getElementsByClassName("shrink"), i, len;
    for(i = 0, len= elements.length; i < len; i++){
      elements[i].style.padding = "10px";
    }
    // document.getElementsByClassName("shrink").style.padding = "10px 10px 10px 10px";
  }else{
    document.getElementById("nav").style.padding= "50px 10px";
    document.getElementById("icon").style.fontSize= "2.5em";
    var elements = document.getElementsByClassName("shrink"), i, len;
    for(i = 0, len= elements.length; i < len; i++){
      elements[i].style.padding = "20px";
    }
    // document.getElementsByClassName("shrink").style.padding = "30px 20px 20px 20px";
  }
}
