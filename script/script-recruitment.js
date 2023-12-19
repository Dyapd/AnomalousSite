var btn_sec = document.getElementById("btn-sec-rec");
var btn_inv = document.getElementById("btn-inv-rec");
var btn_con = document.getElementById("btn-con-rec");
var btn_res = document.getElementById("btn-res-rec");

var content_sec = document.getElementById("sec-rec");
var content_inv = document.getElementById("inv-rec");
var content_con = document.getElementById("con-rec");
var content_res = document.getElementById("res-rec");

btn_sec.addEventListener('click', ()=>{
    content_sec.style.display='flex';
    content_inv.style.display='none';
    content_con.style.display='none';
    content_res.style.display='none';
})

btn_inv.addEventListener('click', ()=>{
    content_sec.style.display='none';
    content_inv.style.display='flex';
    content_con.style.display='none';
    content_res.style.display='none';
})

btn_con.addEventListener('click', ()=>{
    content_sec.style.display='none';
    content_inv.style.display='none';
    content_con.style.display='flex';
    content_res.style.display='none';


})

btn_res.addEventListener('click', ()=>{
    content_sec.style.display='none';
    content_inv.style.display='none';
    content_con.style.display='none';
    content_res.style.display='flex';

})


