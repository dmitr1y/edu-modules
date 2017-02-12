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
//
// function getDocHeight(doc) {
//     doc = doc || document;
//     var body = doc.body, html = doc.documentElement;
//     var height = Math.max( body.scrollHeight, body.offsetHeight,
//         html.clientHeight, html.scrollHeight, html.offsetHeight );
//     return height;
// }
//
// function iframeLoaded(id) {
//     var ifrm = document.getElementById(id);
//     var doc = ifrm.contentDocument? ifrm.contentDocument:
//         ifrm.contentWindow.document;
//     ifrm.style.visibility = 'hidden';
//     ifrm.style.height = "10px"; // reset to minimal height ...
//     // IE opt. for bing/msn needs a bit added or scrollbar appears
//     ifrm.style.height = getDocHeight( doc ) + 20 + "px";
//     ifrm.style.visibility = 'visible';
// }

function resizeIframe() {
    // console.log("windows height: " + window.innerHeight);
    document.getElementById("content_frame").style.height = window.innerHeight - parseFloat(getComputedStyle(document.body).fontSize) * 3.1 + "px";
    // console.log("Iframe height: " + document.getElementById("content_frame").style.height);
}