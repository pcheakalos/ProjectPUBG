const {PubgAPI, PubgAPIErrors, REGION, SEASON, MATCH} = require('pubg-api-redis');
const fs = require('fs');
var http = require('http');
var qs = require('querystring');
var jsonString = "";

http.createServer(function(req, res){
    console.log('Request received');
    req.on('data', function(chunk){
        jsonString += chunk;
    });
    
    req.on('end', function(){
        console.log(jsonString);
    });
}).listen(9090, '127.0.0.1');

// If no Redis configuration it wont be cached
const api = new PubgAPI({
  apikey: 'a7d9348b-e8bb-47b0-b9d4-cb1428b8bd01',
    //  my api key: a7d9348b-e8bb-47b0-b9d4-cb1428b8bd01
  redisConfig: {
    host: '127.0.0.1',
    port: 6379,
    expiration: 300, // Optional - defaults to 300.
  },
});

// get the stats of the user using their in game name
api.getProfileByNickname()
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
// write stats to json file
function writeFile(data){
    if(data != null){
        var rawData = JSON.stringify(data, null, 2);
        fs.writeFile('output.json', rawData);
    }else{
        console.log("ID does not exist");
    }
}