var nr = 1;
var userContainer =document.getElementById("user-info");
var btn=document.getElementById("btn");
btn.addEventListener("click", function(){
    var ourRequest=new XMLHttpRequest();
ourRequest.open('GET','http://localhost/mot-'+ nr + '.json');
ourRequest.onload=function(){
    var ourData=JSON.parse(ourRequest.responseText);
    renderHTML(ourData);
};
    ourRequest.send();
    nr++;
    if(nr>3){
        btn.classList.add("hide-me");
    }
});

function renderHTML(data){
    var htmlString ="";
    for(i=0;i<data.length;i++){
//        htmlString += "<p><center>" + data[i].name + " a trimis mesajul:" + data[i].mesaj + ".</center></p>";
         htmlString += "<p ><center>" + data[i].name +" said: "+ "</center></p>";
          htmlString += "<p><center>" + data[i].mesaj + ".</center></p>";
    }
    userContainer.insertAdjacentHTML('beforeend',htmlString);
}

