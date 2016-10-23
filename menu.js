/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function changeSrc (url)
{
    document.getElementById('content').getElementsByTagName('iframe')[0].src=url;
    console.log("redicreting:"+url);
}

