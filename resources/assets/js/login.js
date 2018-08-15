require('./bootstrap');

window.Vue = require('vue');

Vue.component('player', require('./components/Player.vue'));
Vue.component('playlist', require('./components/Playlist.vue'));

const app = new Vue({
    el: '#app',
    data: function() {
        return {
            song: {},
            next: 0,
            prev: 0,
            hide: '',
        }
    },
    methods: {
        chooseSong: function(choose) {
            this.song = choose;
        },
        nextSong: function(current) {
            this.next = current;
        },
        prevSong: function(current) {
            this.prev = current;
        },
        hidePlaylist: function() {
            this.hide = true;
        }
    }
});

