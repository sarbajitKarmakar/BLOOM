let newPatientButton = document.getElementById("newPatientButton");
let container = document.getElementById("container");
let cross = document.getElementById("corssdiv");
let invisible = document.getElementById("invsbl");
let paid = document.getElementById("paid");
let amount = document.getElementById('amount');
let discount = document.getElementById('discount');
let netAmount = document.getElementById('netAmount');
let patientDlsForm = document.getElementById('patientDlsForm');
let filter = document.getElementById('filter');
let filterForm = document.getElementById('filterForm');
let corssdivFilter = document.getElementById('corssdivFilter');
let apply = document.getElementById('apply');
let filterPaid = document.getElementById('filterPaid');
let filterUnpaid = document.getElementById('filterUnpaid');
let filterRecovered = document.getElementById('filterRecovered');
let filterUnrecovered = document.getElementById('filterUnrecovered');
let tr = document.getElementsByTagName('tr');
let search = document.getElementById('search');
let rcvrValue;
let paidValue;
let i;
let searchId;


// functions
displayNone = (index,value) => {  //filter function (hide rows according to value)
    if (value) {
        tr[index].classList.add('displayNone');
    }
}

displayNoneBySearch = (value,value2) =>{
    for (let i = 1; i < tr.length; i++) {
        let thisId = tr[i].getElementsByTagName('td')[value].innerHTML.toUpperCase();
        if(thisId.indexOf(value2.toUpperCase()) !== -1){
            tr[i].classList.remove('displayNone');
        }
    }
}

// search
let th = tr[0].getElementsByTagName('th');
for (let i = 0; i < th.length; i++) {
    if(th[i].innerHTML == 'Patient ID'){
        searchId = i;
        break;
    }
}

search.addEventListener("input",event =>{
    let searchValue = event.target.value;
    for (let index = 1; index < tr.length; index++) {
        tr[index].classList.add('displayNone');
        
    }
    if (!isNaN(searchValue)) {   // if user search by patient id
        displayNoneBySearch(searchId,searchValue);
    } else { //if user search by name
        displayNoneBySearch(0,searchValue);
    }
});

// patient form 

newPatientButton.addEventListener("click", () => {
    container.style.visibility = "visible";
});

cross.addEventListener("click", () => {
    container.style.visibility = "hidden";
});

paid.addEventListener("click", () => {
    if (paid.checked) {
        invisible.classList.remove("displayNone");
    } else {
        invisible.classList.add("displayNone");
    }
});

discount.addEventListener('input', (event) => {
    if (amount.value != '') {
        if (amount.value - event.target.value < 0) {
            netAmount.value = '';
        } else {
            netAmount.value = amount.value - event.target.value;
        }

    }
});
amount.addEventListener('input', (event) => {
    if (discount.value != '') {
        if (event.target.value - discount.value < 0) {
            netAmount.value = '';
        } else {
            netAmount.value = event.target.value - discount.value;
        }

    }
});




// filter form 
let td = tr[1].getElementsByTagName('td');
for (let i = 0; i < td.length; i++) {
    if (td[i].innerHTML === 'Not Recovered' || td[i].innerHTML == 'Recovered') {
        rcvrValue = i;
        break;
    }
}

for (let i = 0; i < td.length; i++) {
    if (td[i].innerHTML === 'Paid' || td[i].innerHTML == 'Unpaid') {
        paidValue = i;
        break;
    }
}

filter.addEventListener("click", () => {     // filter form appire form
    filterForm.style.visibility = "visible";
});

corssdivFilter.addEventListener("click", () => {  // close option
    filterForm.style.visibility = "hidden";
    filterUnrecovered.checked = false;
    filterUnpaid.checked = false;
    filterRecovered.checked = false;
    filterPaid.checked = false;
});

apply.addEventListener("click", () => {     //filter submit button
for (let index = 0; index < tr.length; index++) {
    tr[index].classList.remove('displayNone');
    
}
    if (filterUnrecovered.checked && filterUnpaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Not Recovered' || tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Unpaid');
        }
        filterUnrecovered.checked = false;
        filterUnpaid.checked = false;

    } else if (filterUnrecovered.checked && filterPaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Not Recovered' || tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Paid');
        }
        filterUnrecovered.checked = false;
        filterPaid.checked = false;

    } else if (filterRecovered.checked && filterPaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Recovered' || tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Paid');
        }
        filterRecovered.checked = false;
        filterPaid.checked = false;

    } else if (filterRecovered.checked && filterUnpaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Recovered' || tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Unpaid');
        }
        filterRecovered.checked = false;
        filterUnpaid.checked = false;

    } else if (filterUnpaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Unpaid');
        }
        filterUnpaid.checked = false;

    } else if (filterRecovered.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Recovered');
        }
        filterRecovered.checked = false;

    } else if (filterUnrecovered.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[rcvrValue].innerHTML !== 'Not Recovered');
        }
        filterUnrecovered.checked = false;

    } else if (filterPaid.checked) {
        for (let i = 1; i < tr.length; i++) {
            displayNone(i,tr[i].getElementsByTagName('td')[paidValue].innerHTML !== 'Paid');
        }
        filterPaid.checked = false;
    }
    filterForm.style.visibility = "hidden";
});    



