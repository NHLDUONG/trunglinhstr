<template>
    <div class="main_content clearfix ptop-8">
        <div class="tieude_giua">
            <div>Chỉnh sửa liên hệ</div>
        </div>
        <div class="box_container">
            <div class="content">
                <div class="tt_lh">
                    <p class="w-100 font-weight-bold fw-bold">Tên :</p>
                    <input class="w-100 border border-secondary rounded" placeholder="Vui lòng nhập tên" v-model="name" />
                    
                    <p class="w-100 font-weight-bold fw-bold">Địa chỉ:</p>
                    <input  class="w-100 border border-secondary rounded " placeholder="Vui lòng nhập địa chỉ" v-model="address"  />

                    <p class="w-100 font-weight-bold fw-bold">Hotline:</p>
                    <input class="w-100 border border-secondary rounded" placeholder="Vui lòng nhập" v-model="hotline"/>

                    <p class="w-100 font-weight-bold fw-bold">Gmail:</p>
                    <input class="w-100 border border-secondary rounded" placeholder="Vui lòng nhập gmail" v-model="gmail" />

                    <p class="w-100 font-weight-bold fw-bold">Website:</p>
                    <input class="w-100 border border-secondary rounded" v-model="website" placeholder="Vui lòng nhập website" />
                    
                    <p class="w-100 font-weight-bold fw-bold">Thời gian làm việc:</p>
                    <input class="w-100 border border-secondary rounded" v-model="time"  placeholder="Vui lòng nhập thời gian làm việc" />

                    <div class="mt-3 pb-5" style="padding-left: 86%;">
                        <button type="button" class="btn btn-primary " @click="submit">Xác nhận</button>
                    </div>

                </div>

                
            </div><!--.content-->
        </div><!--.box_container-->
        <div class="clear"></div>
    </div>       
</template>

<script>

import { Link } from "@inertiajs/inertia-vue3";
import axios from 'axios'

export default {
    components: {
        props: ["about_us"],
    },
    data () {
      return {
        name: "",
        gmail: "",
        address: "",
        time: "",
        hotline: "",
        website: "",
      }
    },
	mounted(){

	},
	methods:{
        submit(){
            console.log('submit');
            axios.post('/edit-info', {
                    name: this.name,
                    email: this.gmail,
                    address: this.address,
                    time: this.time,
                    hotline: this.hotline,
                    website: this.website,
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
            });
        }
	}
};
</script>