let btnranjoke = document.getElementById('ranjokesbtn')
let searchbtn = document.getElementById('searchbtn')



btnranjoke.addEventListener('click', ()=> {
    location.href = "./public/ranJoke.php";
})

searchbtn.addEventListener('click', ()=> {
    location.href = "./public/SearchJoke.php";
})