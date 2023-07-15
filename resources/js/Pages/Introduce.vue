<template>
    <!-- <div id="wapper"> -->
		<menuHead></menuHead>
		<introduce></introduce>

	<!-- </div> -->
	          
</template>

<script>
import menuHead from "../Pages/Home/menuMain";
import introduce from "../Pages/Home/introduce";

import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		introduce,
		menuHead,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>