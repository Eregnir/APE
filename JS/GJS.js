//Change Background Images
function changebg1(){
    $('body').css('background-image', 'url("../background.jpg")');
}

function changebg2(){
    $('body').css('background-image', 'url("../Images/bg2.jpg")');
}

function changebg3(){
    $('body').css('background-image', 'url("../Images/bg3.jpg")');
}
//---Load Header + footer---
$(function(){
    $("#headerph").load("header.html");
});

$(function(){
    $("#footerph").load("footer.html");
});

//---OUT OF SCOPE ALERT---
function nom(){
    window.alert("Action not supported in the project's scope.");
};

//---REVIEWS - FORM---
//Hide the form on load
$("#addyourown").hide();

//show the form after clicking the button
function openForm(){
    $("#addyourown").show();
};

//alert once submitted that the review has been added
function alertme(){
    alert("Thanks for adding a review! You will now be redirected to the reviews page to view it.")
};

//function to update the slider for user rating
function updateSlider(val){
    $("#rangeslider").html(val);
};

//---CART---
//Add to cart alert
function alt(){
    window.alert("Item successfully added to cart! you will now be redirected to it.")
}

//Calculate total order cost
function total(){
    var A = 50.00;
    var B = document.getElementById("q1").value;
    var C = document.getElementById("q2").value;
    document.getElementById("demo").innerHTML = B*A + C*A;
}

//---PODCASTS---
//Move to single podcast
$("#pd1").click(function(){
    window.location.href='Single Podcast.html';
});

//Canvas
    var canvas = document.getElementById("canvas");
    var ctx=canvas.getContext("2d");
    ctx.font="30px Comic Sans MS";
    ctx.fillStyle = "black";
    ctx.textAlign = "center";
    ctx.fillText("Our Game Podcasts", canvas.width/2, canvas.height/2);