const {PubgAPI, PubgAPIErrors, REGION, SEASON, MATCH} = require('pubg-api-redis');

// If no Redis configuration it wont be cached
const api = new PubgAPI({
  apikey: 'XXXXXXX',
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
    console.log(stats);
  });