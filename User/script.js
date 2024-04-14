
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