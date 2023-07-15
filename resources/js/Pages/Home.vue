<template>
    <div id="wapper">
		<menuMain></menuMain>
		<slider></slider>
		<introduce></introduce>

	</div>
		<wedding></wedding>
		<yearbook></yearbook>
		<!-- <album></album> -->
		<!-- <customerComments></customerComments> -->
		<blogEvent ></blogEvent>
	          
</template>

<script>
import menuMain from "../Pages/Home/menuMain";
import slider from "../Pages/Home/slider";
import blogEvent from "../Pages/Home/index.vue";
import customerComments from "../Pages/Home/customerComments.vue";
import album from "../Pages/Home/album";
import yearbook from "../Pages/Home/yearbook";
import wedding from "../Pages/Home/wedding";
import introduce from "../Pages/Home/introduce";

import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		blogEvent,
		customerComments,
		album,
		yearbook,
		wedding,
		introduce,
		slider,
		menuMain,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>