function loadFile(callback){
    var xml = new XMLHttpRequest();
    xml.overrideMimeType("application/json");
    xml.open("GET", "output.json", true);
    xml.onreadystatechange = function(){
        if(xml.readyState == 4 && xml.status == 200){
            callback(xml.responseText);
            console.log("successful");
        }
    };
    xml.send(null);
}

function init(){
    loadFile(function(response){
        var data = JSON.parse(response);
        console.log("Hello world");
    })
}