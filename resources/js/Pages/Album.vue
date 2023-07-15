<template>
    <!-- <div id="wapper"> -->
		<menuMains></menuMains>

	<!-- </div> -->
	   <album></album>       
</template>

<script>
import menuMains from "../Pages/Home/menuMain";
import album from "../Pages/Album/index";


import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		menuMains,
        album,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>