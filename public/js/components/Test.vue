<template>
	<div style="background: red"><button v-on:click="myFunc">ddd</button></div>
</template>
<script>
	export default {
		methods: {
			myFunc: function () {
				console.log('dsds');
			}
		}
	}
</script>