const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const t1 = document.getElementById("t1");
const t2 = document.getElementById("t2");


btn1.addEventListener('click', function(event) {
    t2.style.display = 'none';
    t1.style.display = 'inline-table';
})

btn2.addEventListener('click', function(event) {
    t1.style.display = 'none';
    t2.style.display = 'inline-table';
})

const goldCounts = document.querySelectorAll('.gc');
const appendH = document.querySelectorAll('.appendH');
const icon = document.createElement('img');
icon.src = 'gold-medal.svg'
icon.style.width = "10px"

$(document).ready( function () {
    $('#t1').DataTable({searching: false, paging: false, info: false, "order": [[ 2, "desc" ]]
    });
    $('#t2').DataTable({searching: false, paging: false, info: false, "order": [[ 2, "desc" ]]});

} );


