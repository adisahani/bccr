const hamburger=document.querySelector('.hamburger');
const mobilemenu=document.querySelector('.nav-list');
const navli=document.querySelector('.nav-li');
const navli2=document.querySelector('.nav-li-2');
const notice=document.querySelector('.burger');
const noticelist=document.querySelector('.noticelist');
// const header=document.querySelector('.header .container');

hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    mobilemenu.classList.toggle('active');
    // header.classList.toggle('active');
})
navli.onclick=()=>{
    navli.classList.toggle('active');
}
notice.onclick=()=>{
    notice.classList.toggle('active');
    noticelist.classList.toggle('active');
}

// navli.classList.toggle('active');
//     navli2.classList.toggle('active');
// // navli.addEventListener('click',())

