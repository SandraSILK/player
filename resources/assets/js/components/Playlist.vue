<template>
    <div id="playlist" class="col-md-4 playlist" v-bind:class="{ active: isActive, hide: isHide }">
        <div class="row">
            <div class="col-2">
                <div class="circle text-center">
                    <img src="images/icons/back.svg" class="icon-xs">
                </div>
            </div>
            <div class="col-10">
                <h6 class="title font-weight-bold">Playlist</h6>
            </div>
        </div>
        <div class="row">
            <div class="col list">
                <table>
                    <tr v-for="song in songs" :data-id="song.id" v-on:click="$emit('choose-song', song)">
                        <td>
                            <p class="description font-weight-bold">{{ song.length }} | {{ song.artist }}</p>
                            <p class="title font-weight-bold">{{ song.title }}</p>
                        </td>
                        <td class="text-right">
                            <img src="images/icons/share.svg" class="icon-xs" title="Share">
                            <img src="images/icons/heart.svg" class="icon-xs" title="Add to Favs">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'songs',
            'next',
            'prev',
        ],
        data: function() {
            return {
                isHide: false,
                isActive: true,
            }
        },
        watch: {
            next: function(id) {
                const url = `api/song-next/${id}`;

                axios.get(url)
                    .then((response) => {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error);
                    })

            },
            prev: function(id)
            {
                const songs = this.songs;
                const current = Number(id);
                const prevSong = current - 1;

                if (current === 0){
                    console.log('początek');
                }

                const song = songs[prevSong];

                // const url = `api/song-previous/${song.id}`;

                // axios.get(url)
                //     .then((response) => {
                //         console.log(response);
                //     })
                //     .catch(function(error) {
                //         console.log(error);
                //     })

                
                console.log(song);
            },
        },
        methods: {
            choose: function(song) {
                this.$emit('choose-song', song);
            }
        }
    }
</script>