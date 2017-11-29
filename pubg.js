const {PubgAPI, PubgAPIErrors, REGION, SEASON, MATCH} = require('pubg-api-redis');
const fs = require('fs');

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
api.getProfileByNickname('Kun_H')
  .then((profile) => {
    const data = profile.content;
    const stats = profile.getStats({
      region: REGION.ALL, // defaults to profile.content.selectedRegion
      season: SEASON.EA2017pre5, // defaults to profile.content.defaultSeason
      match: MATCH.SQUAD // defaults to SOLO
    });
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

// read stats from json file and assign values
//function readFile(file){
//    if(file != null){
//        var ary = [];
//        var obj;
//        fs.readFile('output.json', 'utf8', function (err, data){
//            if (err) throw err;
//            obj = JSON.parse(data);
//            console.log(obj);
//        });
//    }else{
//        console.log("file does not contain anything");
//    }
//}