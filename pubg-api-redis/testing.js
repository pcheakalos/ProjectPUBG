const {PubgAPI} = require('./');

const api = new PubgAPI('a7d9348b-e8bb-47b0-b9d4-cb1428b8bd01');

api.getProfileByNickname('fak3zito')
  .then((profile) => {
    const stats = profile.getFullStats();
    console.log(profile.stats);
  });
