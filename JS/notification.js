let notification = document.getElementById("notification");
let massage = document.getElementById("massage");
let notificationBox = document.getElementById("notification-box");
let msgBox = document.getElementById("msg-box");


massage.addEventListener("click",(e)=>{
    msgBox.classList.remove('displayNone');
});
notification.addEventListener("click",(e)=>{
    notificationBox.classList.remove('displayNone');
});
window.addEventListener("click",element =>{
    if(!notificationBox.contains(element.target) && element.target.id !== "nott"){
        notificationBox.classList.add('displayNone');
    }
    if(!msgBox.contains(element.target) && element.target.id !== "msgg"){
        msgBox.classList.add('displayNone');
    }
})

msgg