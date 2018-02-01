// resources/assets/js/components/test_cnter.vue
<template>
	<span>
		<a href="#"  @click.prevent="increase(cnterVal)">
			<sub><b><i> &nbsp;&nbsp;&nbsp; {{ cnterVal }}	&nbsp;&nbsp;&nbsp; </i></b></sub>
		</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#"  @click.prevent="increasing()">
			<sub><b><i> &nbsp;&nbsp;&nbsp; {{ cnterVal }}	&nbsp;&nbsp;&nbsp; </i></b></sub>
		</a>
	</span>
</template>
<script> export default {
	props: ['cnter'],
	data: function() {
		return {
			cnterVal: this.cnter
		};
	},
	mounted() {
		this.cnter = this.cnter;
	},
	computed: {
		isFavorite() {
			return this.cnter;
		},
	},
	created: function() {
		//
		let vm = this;
		Echo.channel('channel-TstCntChanged')
			.listen('.TstCntChanged', (e) => {
				vm.cnterVal=e.cnt;
			});
	},
	methods: {
		increase(_val) {
			axios.post('/increase_tst_cnt/' + (_val+1)).then(response => this.cnterVal =  response.data.counter).catch(response => console.log(response.data));
		},
		increasing() {//через веб сокет передать не получилось.
			axios.post('/increasing_tst_cnt/'+this.cnterVal).catch(response => console.log(response.data));
		},
	}
}
</script>