<template>
	<menuMain></menuMain>

    <div class="main_content clearfix ptop-8">
        <div class="tieude_giua">
            <div>Liên hệ</div>
        </div>
        <div class="box_container">
            <div class="content">
                <div class="tt_lh">
                    <p><span style="font-size:26px;"><span style="line-height:2.8em;"><span style="color:#ff6600;"><strong>QUIN BRIDAL - KỶ YẾU GALAXY - VUONGTRUNG STUDIO</strong></span></span></span></p>

                    <p><span style="font-size:16px;"><span style="line-height:2.8em;">Địa chỉ: 48/8a Trần Bình Trọng , Phường 5 , Quận Bình Thạnh , TP Hồ Chí Minh</span></span></p>

                    <p><span style="font-size:16px;"><span style="line-height:2.8em;">Hotline: 094.373.8576 (Mr Trung) -&nbsp;</span>0818.954.854 (Mrs Lỳ)</span></p>

                    <p><span style="font-size:16px;"><span style="line-height:2.8em;">Gmail: kyyeugalaxy@gmail.com</span></span></p>

                    <p><span style="font-size:16px;"><span style="line-height:2.8em;">Website: www.vuongtrungstudio.com - www.kyyeugalaxy.com - www.quinbridal.com</span></span></p>

                    <p><span style="font-size:16px;"><span style="line-height:2.8em;">Thời gian làm việc: Từ 8h am - 22 pm</span></span></p>
                    <div class="frm_lienhe">
                        <form method="post" name="frm" class="frm" action="ajax/contact.php" enctype="multipart/form-data">
                            <div class="loicapcha thongbao"></div>
                            <div class="item_lienhe"><input name="ten_lienhe" type="text" id="ten_lienhe" placeholder="Họ và tên"></div>

                            <div class="item_lienhe"><input name="diachi_lienhe" type="text" id="diachi_lienhe" placeholder="Địa chỉ"></div>

                            <div class="item_lienhe"><input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" placeholder="Điện thoại"></div>

                            <div class="item_lienhe"><input name="email_lienhe" type="text" id="email_lienhe" placeholder="Email"></div>

                            <div class="item_lienhe"><textarea name="noidung_lienhe" id="noidung_lienhe" rows="5" placeholder="Nội dung"></textarea></div>

                            <div class="item_lienhe"><p>Mã bảo vệ:<span>*</span></p>
                            <img src="sources/captcha.php" id="hinh_captcha" alt=" QUIN BRIDAL - KỶ YẾU GALAXY - GALAXY MEDIA">
                                    <!-- <a href="#reset_capcha" id="reset_capcha" title="Đổi mã khác"><img src="images/refresh.png" alt="reset_capcha"></a> -->
                                    </div>

                            <div class="item_lienhe"><input name="capcha" type="text" id="capcha" placeholder="Mã bảo vệ"></div>

                            <div class="item_lienhe">
                                <input type="button" value="Gửi" class="click_ajax">
                                <input type="button" value="Nhập lại" onclick="document.frm.reset();">
                            </div>
                        </form>
                    </div><!--.frm_lienhe-->
                </div>

                <div class="bando">
                    <iframe src="https://www.google.com/maps/embed?pb=" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe>          
                </div><!--.bando-->
            </div><!--.content-->
        </div><!--.box_container-->
        <div class="clear"></div>
    </div>       
</template>

<script>
import menuMain from "../Pages/Home/menuMain";

import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
        menuMain,
        props: ["about_us"],
    },
};
</script>