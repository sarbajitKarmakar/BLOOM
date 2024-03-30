let dayArr = [];
let amountArr = [];
let sDayArr = [];
let admsnArr = [];
let rcvrArr = [];
let dept = [];
let deptVal = [];

let datenumb = (thisDate)=>{
    let dateObject = new Date(thisDate);

    let dayOfWeek = dateObject.getDay();
    return dayOfWeek;
}

let day = (thisDate)=>{
    let dayOfWeek = datenumb(thisDate);
    // Array of days
    let daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    dayArr.push(daysOfWeek[dayOfWeek]);
}

// line chart 

let sDay = (thisDate)=>{
    let dayOfWeek = datenumb(thisDate);
    // Array of days
    let daysOfWeek = ["S", "M", "T", "W", "T", "F", "S"];
    sDayArr.push(daysOfWeek[dayOfWeek]);
}