<template>
    <div id="wapper">
		<menuMain></menuMain>
		<slider></slider>

	</div>
	   <news></news>       
</template>

<script>
import menuMain from "../Pages/Home/menuMain";
import slider from "../Pages/Home/slider";
import news from "../Pages/News/index";


import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		slider,
		menuMain,
        news,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>