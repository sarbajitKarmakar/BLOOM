let searchBar = document.getElementById('searchBar');
let searchHistory = document.getElementById('searchHistory');
let afterSearchRow = document.getElementsByClassName('afterSearchRow');


searchBar.addEventListener('input',(event)=>{
    if (event.target.value === '') {
        searchHistory.classList.add('displayNone');
    } else {
        searchHistory.classList.remove('displayNone');
        let value = event.target.value.toUpperCase();
        for (let i = 0; i < afterSearchRow.length; i++) {
            let indexVal = afterSearchRow[i].innerText.toUpperCase();
            if(indexVal.indexOf(value) !== -1){
                afterSearchRow[i].classList.remove('displayNone');
            }else{
                afterSearchRow[i].classList.add('displayNone');
            }
        }
    }
})