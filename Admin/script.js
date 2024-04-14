
// // toggle on profile button
const toggleBtn=document.getElementById("profile-btn")
document.body.addEventListener("click",(e)=>{
    console.log(e.target.className)
    const menu=document.getElementById("menu");
    if(e.target.className=="profile-btn"){
        if(menu.style.display=="flex"){
            menu.style.display="none";
            toggleBtn.style.border="none";
        }
        else{
            menu.style.display="flex";
            toggleBtn.style.border="2px solid white"
        }
    }
    else if(e.target.className=='menu'){
        menu.style.display="flex";
    }
    else{
        if(menu.style.display=="flex" && e.target.className!='menu'){
            menu.style.display="none";
            toggleBtn.style.border="2px solid white"
           }
    }
})

function printPage(){
    let printBtn=document.getElementById("printBtn");
        let header=document.getElementById("header");
        let left_container=document.getElementById("left_container");
        let footer=document.getElementById("footer");
        let right_container=document.getElementById("right_container");
        header.style.display="none";
        left_container.style.display="none";
        right_container.style.width="100%";
        right_container.style.overflow="hidden";
        footer.style.display="none";
        printBtn.style.display="none";
        window.print();
}