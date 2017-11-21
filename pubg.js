const {PubgAPI, PubgAPIErrors, REGION, SEASON, MATCH} = require('pubg-api-redis');

//var jsonfile = require('jsonfile');
//var file = '/Users/kunkim/git/ProjectPUBG';
//var obj = {name: output};
//
//jsonfile.writeFileSync(file,obj);

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

api.getProfileByNickname('SoAh_117')
  .then((profile) => {
    const data = profile.content;
    const stats = profile.getStats({
      region: REGION.ALL, // defaults to profile.content.selectedRegion
      season: SEASON.EA2017pre3, // defaults to profile.content.defaultSeason
      match: MATCH.SOLO // defaults to SOLO
    });
    if(data != null){
        var rawData = JSON.stringify(stats, null, 2);
        fs.writeFile('output.json', rawData);
    }else{
        console.log("ID does not exist");
    }
    console.log(stats);
  });