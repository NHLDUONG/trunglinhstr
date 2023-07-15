<template>
    <div id="wapper">
		<menuMain></menuMain>

	</div>
        <singin></singin>
		
	          
</template>

<script>
import menuMain from "../Pages/Home/menuMain.vue";
import introduce from "../Pages/Home/introduce";
import singin from "../Pages/Singin/index";

import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
		menuMain,
        singin,
        introduce,
        props: ["about_us"],
    },
	mounted(){

	},
	methods:{
	}
};

</script>