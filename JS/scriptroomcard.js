const roomText1 = document.querySelector("#roomtext1");
const roomText2 = document.querySelector("#roomtext2");
const roomText3 = document.querySelector("#roomtext3");
const roomCard = document.querySelectorAll(".roomcard");
const closeModal = document.querySelectorAll(".closemodal")
const roomSet = document.querySelector(".roomset")


    roomCard[0].addEventListener("click",function(){
    if(roomText1.style.display === "none"){
        roomText1.style.display = "inline-block";
    } else {
        roomText1.style.display = "none"}
    }) 

    closeModal[0].addEventListener("click", function(){
        roomText1.style.display = "none";
    })

    roomCard[1].addEventListener("click",function(){
    if(roomText2.style.display === "none"){
       roomText2.style.display = "inline-block";
    } else {
        roomText2.style.display = "none"}
    })

    closeModal[1].addEventListener("click", function(){
        roomText2.style.display = "none";
    })


    roomCard[2].addEventListener("click",function(){
        if(roomText3.style.display === "none"){
           roomText3.style.display = "inline-block";
        } else {
            roomText3.style.display = "none"}
        })
    
        closeModal[2].addEventListener("click", function(){
            roomText3.style.display = "none";
        })

    roomSet.style.marginTop = "80px";


