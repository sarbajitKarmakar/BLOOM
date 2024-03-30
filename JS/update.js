let paid = document.getElementById("paid");
let invisible = document.getElementById("invsbl");
let amount = document.getElementById('amount');
let discount = document.getElementById('discount');
let netAmount = document.getElementById('netAmount');

if (paid.checked) {
    invisible.classList.remove("displayNone");
}

paid.addEventListener("click",()=>{
    if (paid.checked) {
        invisible.classList.remove("displayNone");
    } else {
        invisible.classList.add("displayNone");
    }
});

discount.addEventListener('input',(event)=>{
    if (amount.value != '') {
        if (amount.value - event.target.value < 0) {
            netAmount.value = '';
        }else{
            netAmount.value = amount.value - event.target.value;
        }

    }
});
amount.addEventListener('input',(event)=>{
    if (discount.value != '') {
        if (event.target.value - discount.value < 0) {
            netAmount.value = '';
        }else{
            netAmount.value = event.target.value - discount.value;
        }

    }
});