let stts = document.getElementsByClassName("status");

let sttsarr = Array.from(stts);

sttsarr.forEach(element => {
    if (element.innerHTML === 'Paid') {
        element.style.color = '#57BD79';
    }else{
        element.style.color = '#FC5066';
    }
});