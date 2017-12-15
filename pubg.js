
const {PubgAPI, PubgAPIErrors, REGION, SEASON, MATCH} = require('pubg-api-redis');
const fs = require('fs');
var http = require('http');
var qs = require('querystring');
var jsonString = "";

// connect a server to communicate with front view page
http.createServer(function(req, res){
    // request a data from the user input page
    req.on('data', function(chunk){
        jsonString += chunk;
    });
    // request a data what to do when the data is passed
    req.on('end', function(){
        var obj = jsonString.slice(14, jsonString.length - 3)
        jsonString = "";
        
        // If no Redis configuration it wont be cached
        const api = new PubgAPI({
            apikey: 'a7d9348b-e8bb-47b0-b9d4-cb1428b8bd01',
            //  Kun's api key: a7d9348b-e8bb-47b0-b9d4-cb1428b8bd01
            redisConfig: {
                host: '127.0.0.1',
                port: 6379,
                expiration: 300, // Optional - defaults to 300.
            },
        });

        // get the stats of the user using their in game name
        api.getProfileByNickname(obj)
        .then((profile) => {
            const data = profile.content;
            const stats = profile.getStats({
                region: REGION.ALL, // defaults to profile.content.selectedRegion
                season: SEASON.EA2017pre5, // defaults to profile.content.defaultSeason
                match: MATCH.SQUAD // defaults to SOLO
            });
    console.log(stats);
    writeFile(stats);
        });
    });
    // communication port number and IP address
}).listen(9091, '127.0.0.1');

// write stats to json file
function writeFile(data){
    if(data != null){
        var rawData = JSON.stringify(data, null, 2);
        fs.writeFile('data/output.json', rawData);
    }else{
        console.log("ID does not exist");
    }
};