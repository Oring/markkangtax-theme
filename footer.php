			<section id="rtsSummary" class="hdPC">
				<div class="container">
					<div class="mark-said">
						<h3 class="mark-tit ff-mj">안심하세요. Right Tax Service</h2>
						<p class="mark-content ff-mj">미국 첫 해외 금융 계좌 보고는 문제없이 안전해야 합니다.<br>
							보고 과정에서 개인 정보 노출 문제<br>
							한국 세법과 미국 세법 차이에서 발생되는 문제,<br>
							잦은 미국 세법을 놓쳐서 생기는 문제 등 수많은 문제가<br>
							고객님의 자산에 피해를 입힐 수 있습니다.<br>
							Right Tax Service는<br>이와 같은 문제를 방지할 수 있는 safe service를 설계하고<br>
							끊임없이 연구해 고객님의 자산을 안전하게 보호해드립니다.</p>
						<p class="naming">Right Choice, Right Tax Service<br>회계사 Mark Kang</p>
					</div>
				</div>
			</section>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="clearfix foot-wrap">
						<?php /* ?>
						<div class="col-md-1 col-md-push-10 col-xs-6 foot-item">
							<a href=""><span class="foot-contact i_kko"></span>카카오톡<br class="hdMB"> 상담</a>
						</div>
						<div class="col-md-1 col-md-push-10 col-xs-6 foot-item">
							<a href=""><span class="foot-contact i_blog"></span>회계사 마크 블로그</a>
						</div>
						<?php */ ?>
						<div class="foot-inner">
						<!-- <div class="foot-inner"> -->
							<!-- copyright -->
							<?php righttax_nav('extra-menu'); ?>
							<p>
                                <?php echo of_get_option('company_name'); ?><br>
                                대표자: <?php echo of_get_option('company_representative'); ?> 
                                | 연락처: <a href="tel:<?php echo of_get_option('office_number'); ?>" onclick="gtag('event', 'Phone', { 'event_category': 'Contact', 'event_label': 'footer' });"><?php echo of_get_option('office_number'); ?></a>
                                | 이메일: <a href="mailto:<?php echo of_get_option('contact_email'); ?>" onclick="gtag('event', 'Email', { 'event_category': 'Contact', 'event_label': 'footer' });"><?php echo of_get_option('contact_email'); ?></a>
                                | 카카오문의: <a href="https://pf.kakao.com/_LxkkfT" target="_blank" onclick="gtag('event', 'Kakao', { 'event_category': 'Contact', 'event_label': 'footer' });"><?php echo of_get_option('contact_kakao'); ?></a>
                                | 사업자등록번호: <?php echo of_get_option('company_registration_number'); ?>
                                | <?php echo of_get_option('office_address'); ?>
                            </p>
							<p class="copyright">
								COPYRIGHT &copy; <?php echo strtoupper ( get_bloginfo('name') ); ?> ALL RIGHTS RESERVED.
							</p>
							<!-- /copyright -->
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

			<div class="rts-mark hdMB"
					data-bottom-top='background-position: 50% -300px;'
					data-bottom='background-position: 50% 0px;'>
				<div class="container c_txt"
					data-anchor-target='.rts-mark'
					data-bottom-top='opacity:0;background-position:left -50%;'
					data-bottom='opacity:1;background-position:left 50%;'></div>
			</div>
        </div>
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
        
        <!-- Common Script -->
        <script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
        <script type="text/javascript"> 
        if (!wcs_add) var wcs_add={};
        wcs_add["wa"] = "s_4715777ee364";
        if (!_nasa) var _nasa={};
        wcs.inflow();
        wcs_do(_nasa);
        </script>

	</body>

</html>
