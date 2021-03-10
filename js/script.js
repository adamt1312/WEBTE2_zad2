const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const t1 = document.getElementById("t1");
const t2 = document.getElementById("t2");


btn1.addEventListener('click', function(event) {
    t2.style.display = 'none';
    t1.style.display = 'block';
})

btn2.addEventListener('click', function(event) {
    t1.style.display = 'none';
    t2.style.display = 'block';
})

const goldCounts = document.querySelectorAll('.gc');
const appendH = document.querySelectorAll('.appendH');
const icon = document.createElement('img');
icon.src = 'gold-medal.svg'
icon.style.width = "10px"

// for (i = 0; i < appendH.length; i++) {
//     for (j = 0; i < parseInt("3"); j++) {
//         appendH[i].appendChild(icon)
//     }
// }


