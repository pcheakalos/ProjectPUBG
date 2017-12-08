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
            update: data.lastUpdated,
            rate: data.skillRating.rating,
            rounds: data.performance.roundsPlayed,
            win: data.performance.wins,
            top10: data.performance.top10s,
            kill: data.combat.kills,
            suidice: data.combat.suicides,
            teamkill: data.combat.teamKills,
            headshot: data.combat.headshotKills,
            roadkill: data.combat.roadKills,
            assist: data.combat.assists
        };
        console.log(profile);
    })
}