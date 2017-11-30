function loadFile(callback) {
    "use strict";
    var xml = new XMLHttpRequest();
    xml.overrideMimeType("application/json");
    xml.open("GET", "output.json", true);
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            callback(xml.responseText);
            //console.log("successful");
        }
    };
    xml.send(null);
}

function init() {
    loadFile(function (response) {
        var data = JSON.parse(response);
        var profile = {
            name: data.playerName,
            region: data.region,
            season: data.season,
            match: data.match,
            rounds: data.performance.roundsPlayed,
            update: data.lastUpdated,
            win: data.performance.wins,
            lose: data.performance.losses,
            rate: data.skillRating.rating,
            kill: data.combat.kills,
            assist: data.combat.assists,
            suidice: data.combat.suicides,
            teamkill: data.combat.teamKills,
            headshot: data.combat.headshotKills,
            roadkill: data.combat.roadKills
        };
        console.log(profile);
    })
}