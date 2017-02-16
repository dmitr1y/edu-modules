/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function changeIFrameSrc (url)
{
    document.getElementById('content_frame').src=url;
}

function gotoModuleWindow(url) {
    window.location.href=url;
}

function resizeIframe() {
    document.getElementById("content_frame").style.height = window.innerHeight - parseFloat(getComputedStyle(document.body).fontSize) * 3.5 + "px";
}