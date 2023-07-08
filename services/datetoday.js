  
// Get the current date
var currentDate = new Date();

// Array of month names
var monthNames = [
    "January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"
];

// Array of weekday names
var weekdayNames = [
    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
];

// Format the date as desired ("Saturday, 8 July 2023")
var formattedDate = weekdayNames[currentDate.getDay()] + ', ' +
    currentDate.getDate() + ' ' +
    monthNames[currentDate.getMonth()] + ' ' +
    currentDate.getFullYear();

// Insert the formatted date into the <i> element
document.getElementById('current-date').innerText = formattedDate;
