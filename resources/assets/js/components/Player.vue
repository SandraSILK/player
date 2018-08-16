<template>
    <div class="col-md-4 player" v-bind:class="{ active: isHide, hide: isActive }">
        <main>
            <section class="cover" v-bind:style="{ backgroundImage: 'url(' + song.cover + ')' }">
                <div class="options text-center">
                    <img src="images/icons/loop.svg" class="icon-xs">
                    <img src="images/icons/shuffle.svg" class="icon-xs">
                    <img src="images/icons/arrow.svg" class="icon-xs">
                    <img src="images/icons/menu.svg" class="icon-xs float-right" v-on:click="backToList">
                </div>
                <div class="main-title text-center">
                    <p class="font-weight-bold">{{ song.artist }}</p>
                    <p>{{ song.title }}</p>
                </div>
            </section>
            <section class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="text-center loudspeaker">
                        <img src="images/icons/loudspeaker.svg" class="icon-xxs">
                    </div>
                </div>
            </section>
            <section>
                <div class="play text-center">
                    <div class="circle text-center d-inline-block left-icon">
                        <img src="images/icons/share.svg" class="icon-xs" title="Share">
                    </div>
                    <img src="images/icons/prev.svg" class="icon-md d-inline-block" v-on:click="prev" :data-id="song.id">

                    <img src="images/icons/play.svg" class="icon-lg" v-on:click="playMusic" v-bind:class="{ active: stop, hide: play }">
                    <img src="images/icons/pause.svg" class="icon-lg" v-on:click="stopMusic" v-bind:class="{ active: play, hide: stop }">

                    <img src="images/icons/next.svg" class="icon-md d-inline-block" v-on:click="next" :data-id="song.id">
                    <div class="circle text-center d-inline-block right-icon">
                        <img src="images/icons/heart.svg" class="icon-xs" title="Add to Favs">
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
    export default {
        props: [
            'song',
        ],
        data: function() {
            return {
                isHide: false,
                isActive: true,
                play: true,
                stop: false,
            }
        },
        watch: {
            song: function(song) {
                this.isHide = true;
                this.isActive = false;

                document.getElementById('playlist').classList.add('d-none');
            }
        },
        methods: {
            playMusic: function() {
                this.play = false;
                this.stop = true;
            },
            stopMusic: function() {
                this.play = true;
                this.stop = false;
            },
            next: function(event) {
                const id = event.currentTarget.dataset.id;
                this.$emit('next', id);
            },
            prev: function(event) {
                const id = event.currentTarget.dataset.id;
                this.$emit('prev', id);
            },
            backToList: function() {
                this.isHide = false;
                this.isActive = true;

                document.getElementById('playlist').classList.remove('d-none');
            }
        }
    }
</script>
