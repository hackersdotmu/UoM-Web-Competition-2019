<template>
  <ul id="example-1">
  <li v-for="item in student">
    {{ item.EMAIL }}<br>
    {{ item.COURSE }}
  </li>
</ul>
</template>

<script>
import axios from 'axios';

	export default {
		name: 'hello',
		data() {
			return {
				student: {},
			}
		},
		mounted() {
			axios.get("http://localhost:4000")
			.then((response) => {
				console.log(response.data);
				this.student = response.data;
			})
			.catch((error) => {
				console.log(error);
			})
		}
	};
</script>