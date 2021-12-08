$(document).ready(function(){



    //mixtup (portfollio section)
    var mixer = mixitup('.container');
  
//stiky manu
$(".js--services-section").waypoint(function(direction){
if(direction=="down"){
$("nav").addClass("stiky");
}
else{$("nav").removeClass("stiky");

}
});


    
});

//start mobile manu

function openNav(){
    document.getElementById("mynav").style.width="100%"
}

function closeNav(){
    document.getElementById("mynav").style.width="0%"
}