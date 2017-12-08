// read json file that is created from pubg.js
function loadFile(callback) {
    "use strict";
    var xml = new XMLHttpRequest();
    xml.overrideMimeType("application/json");
    xml.open("GET", "output.json", true);
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            callback(xml.responseText);
        }
    };
    xml.send(null);
}

// return player name
function getName(){
	var name = "";
    loadFile(function(response){
        var data = JSON.parse(response);
		name = data;
    })
	return name;
}

// return server name
function getRegion(){
    var region = "";
    loadFile(function(response){
        var data = JSON.parse(response);
        region = data;
    })
    return region;
}

// return sseason
function getSeason(){
    var season = "";
    loadFile(function(response){
        var data = JSON.parse(response);
        season = data;
    })
    return season;
}

// return match
function getMatch(){
    var match = "";
    loadFile(function(response){
        var data = JSON.parse(response);
        match = data;
    })
    return match;
}

// return updated time
function getUpdated(){
    var updated = "";
    loadFile(function(response){
        var data = JSON.parse(response);
        updated = data;
    })
    return updated;
}

// return rate of the player
function getRate(){
	var rate = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		rate = data;
	})
	return rate;
}

// return the number of rounds user played
function getRound(){
	var rounds = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		rounds = data;
	})
	return rounds;
}

// return the number of wins user made
function getWin(){
	var win = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		win = data;
	})
	return win;
}

// return the number of times user made in top 10
function getTop10(){
	var top10 = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		top10 = data;
	})
	return top10;
}

// return the number of people the user killed
function getKill(){
	var kill = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		kill = data;
	})
	return kill;
}

// return the number of suicide the player commited
function getSuicide(){
	var suicide = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		suicide = data;
	})
	return suicide;
}

// return the number of team kills the player made
function getTeamKill(){
	var teamKill = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		teamKill = data;
	})
	return teamKill;
}

// return the number of headshot the player made
function getHeadshot(){
	var headshot = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		headshot = data;
	})
	return headshot;
}

// return the number of roadkills the player made
function getRoadKill(){
	var roadkill = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		roadkill = data;
	})
	return roadkill;
}

// reutn the number of assist the player did
function getAssist(){
	var assist = "";
	loadFile(function(response){
		var data = JSON.parse(response);
		assist = data;
	})
	return assist;
}