			<section id="rtsSummary">
				<div class="container">
					<div class="mark-said">
						<h3 class="mark-tit ff-mj">
							안심하세요. <br class="hdPC">
							Mark Kang Tax Service
						</h3>
						<p class="mark-content ff-mj">
							복잡하고 어려운 세무 업무로 고민 중이신가요?<br>
							현재 상황을 상세히 기재하신 후 <br class="hdPC"> 
							상담을 신청해주세요.<br>
							고객님의 문제를 해결할 수 있도록 <br class="hdPC">
							솔루션을 연구하여<br>
							안전하고 편안하게 상담해드리겠습니다.<br>
					</div>
					<a href="/contact-us/" class="middle-btn">
						지금 상담 신청하기
						<img class="middle-btn-arr" src="/img/icons/main-btn-arr-icon01.png" alt="버튼 화살표 아이콘">
					</a>
				</div>
			</section>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="foot-icon-wrap">
						<div class="foot-icon-text">
							<a href="https://pf.kakao.com/_LxkkfT" target="_blank" rel="noopener"><img src="/img/icons/footer-icon-talk-mb.png" alt="카카오톡 아이콘"></a>
							<a href="https://pf.kakao.com/_LxkkfT" target="_blank" rel="noopener" class="icon-text">카카오톡 상담</a>
						</div>
						<div class="foot-icon-text">
							<a href="https://blog.naver.com/righttaxservice" target="_blank" rel="noopener"><img src="/img/icons/footer-icon-blog-mb.png" alt="카카오톡 아이콘"></a>
							<a href="https://blog.naver.com/righttaxservice" target="_blank" rel="noopener" class="icon-text">마크강 블로그</a>
						</div>
					</div>


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
                                <!-- | 카카오문의: <a href="https://pf.kakao.com/_LxkkfT" target="_blank" onclick="gtag('event', 'Kakao', { 'event_category': 'Contact', 'event_label': 'footer' });"><?php echo of_get_option('contact_kakao'); ?></a> -->
                                | 사업자등록번호: <?php echo of_get_option('company_registration_number'); ?>
                                | <?php echo of_get_option('office_address'); ?>
                            </p>
							<p class="copyright">
								COPYRIGHT &copy; <?php echo strtoupper ( get_bloginfo('name') ); ?> <br class="hdPC">ALL RIGHTS RESERVED.
							</p>
							<!-- /copyright -->
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

			<!-- <div class="rts-mark hdMB"
					data-bottom-top='background-position: 50% -300px;'
					data-bottom='background-position: 50% 0px;'>
				<div class="container c_txt"
					data-anchor-target='.rts-mark'
					data-bottom-top='opacity:0;background-position:left -50%;'
					data-bottom='opacity:1;background-position:left 50%;'></div>
				</div>
			</div> -->
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
