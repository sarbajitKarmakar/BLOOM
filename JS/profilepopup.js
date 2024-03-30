let profile = document.getElementById("profileDiv");
let profileBtn = document.getElementById("profileBtn");

profileBtn.addEventListener("click",()=>{
    profile.classList.toggle("displayNone");
});