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

var loadfile = $.get("output.json");

// return player name
function getName(){
	var name = "";
    $.when(loadfile.done(function(data, status){
		name= data["playerName"];
	})).then(function(x){
		console.log(name);
		return name;		
	});
	
}

// return server name
function getRegion(){
    var region2 = "";
    $.when(loadfile.done(function(data, status){
		region2 = data["region"];
	})).then(function(x){
		console.log(region2);
		return region2;		
	});
	
}

// return sseason
function getSeason(){
    var season1 = "";
    $.when(loadfile.done(function(data, status){
		season1= data["season"];
	})).then(function(x){
		console.log(season1);
		return season1;		
	});
	
}

// return match
function getMatch(){
    var match11 = "";
     $.when(loadfile.done(function(data, status){
		match11= data["match"];
	})).then(function(x){
		console.log(match11);
		return match11;		
	});
	
}

// return updated time
function getUpdated(){
    var updated = "";
     $.when(loadfile.done(function(data, status){
		updated= data["lastUpdated"];
	})).then(function(x){
		console.log(updated);
		return updated;		
	});
	
}

// return rate of the player
function getRate(){
	var rate = "";
     $.when(loadfile.done(function(data, status){
		rate= data["rating"];
	})).then(function(x){
		console.log(rate);
		return rate;		
	});
	

}

// return the number of rounds user played
function getRound(){
	var rounds22 = "";
	$.when(loadfile.done(function(data, status){
		rounds22= data["roundsPlayed"];
	})).then(function(x){
		console.log(rounds22);
		return rounds22;		
	});
	
}

// return the number of wins user made
function getWin(){
	var win = "";
	$.when(loadfile.done(function(data, status){
		win= data["winRatio"];
	})).then(function(x){
		console.log(win);
		return win;		
	});
	
}

// return the number of times user made in top 10
function getTop10(){
	var top10 = "";
	$.when(loadfile.done(function(data, status){
		top10= data["top10s"];
	})).then(function(x){
		console.log(top10);
		return top10;		
	});
	
}

// return the number of people the user killed
function getKill(){
	var kill = "";
	$.when(loadfile.done(function(data, status){
		kill= data["kills"];
	})).then(function(x){
		console.log(kill);
		return kill;		
	});
	
}

// return the number of suicide the player commited
function getSuicide(){
	var suicide = "";
	$.when(loadfile.done(function(data, status){
		suicide= data["suicides"];
	})).then(function(x){
		console.log(suicide);
		return suicide;		
	});
	
}

// return the number of team kills the player made
function getTeamKill(){
	var teamKill = "";
	$.when(loadfile.done(function(data, status){
		teamKill= data["teamKills"];
	})).then(function(x){
		console.log(teamKill);
		return teamKill;		
	});
	
}

// return the number of headshot the player made
function getHeadshot(){
	var headshot = "";
   $.when(loadfile.done(function(data, status){
		headshot= data["avatar"];
	})).then(function(x){
		console.log(headshot);
		return headshot;		
	});
	
}

// return the number of roadkills the player made
function getRoadKill(){
	var roadkill = "";
   $.when(loadfile.done(function(data, status){
		roadkill= data["roadKills"];
	})).then(function(x){
		console.log(roadkill);
		return roadkill;		
	});
	
}


// reutn the number of assist the player did
function getAssist(){
	var assist = "";
  $.when(loadfile.done(function(data, status){
		assist= data["assists"];
	})).then(function(x){
		console.log(assist);
		return assist;		
	});
	
}