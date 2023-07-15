<template>
    <!-- <div id="wapper"> -->
		<menuMains></menuMains>

	<!-- </div> -->
	   <service></service>       
</template>

<script>
import menuMains from "../Pages/Home/menuMain";
import service from "../Pages/Service/index";


import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		menuMains,
        service,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>