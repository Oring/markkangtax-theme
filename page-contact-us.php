<?php
get_header(); ?>
	<div class="sub-sect-top contact-container">
		<div class="sub-sect-inner container">
			<p>망설이지 마시고<br><span>편하게 남겨주세요</span></p>
		</div>
	</div>

	<section class="contact-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-wrap">
						<?php echo do_shortcode( '[kboard id=1]' ); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="detail-wrap">
						<div class="detail-item">
							<span class="di_i i_add"></span>
							<p>
								<strong>미국 사무실 주소</strong><br><?php echo of_get_option('office_address'); ?><br>
								<strong>E-mail :</strong> <a href="mailto:<?php echo of_get_option('contact_email'); ?>" onclick="gtag('event', 'Email', { 'event_category': 'Contact', 'event_label': 'contactpage' });"><?php echo of_get_option('contact_email'); ?></a><br>
								<strong>Tel :</strong> <a href="tel:<?php echo of_get_option('office_number'); ?>" onclick="gtag('event', 'Phone', { 'event_category': 'Contact', 'event_label': 'contactpage' });"><?php echo of_get_option('office_number'); ?></a>
							</p>
						</div>
						<?php if ( of_get_option('contact_kakao') ) : ?>
						<div class="detail-item">
              				<a href="https://pf.kakao.com/_LxkkfT" target="_blank"><span class="di_i i_kakao"></span></a>
							<a href="https://pf.kakao.com/_LxkkfT" target="_blank" onclick="gtag('event', 'Kakao', { 'event_category': 'Contact', 'event_label': 'contactpage' });"><strong>카카오 문의</strong><br><?php echo of_get_option('contact_kakao'); ?></a>
						</div>
						<?php endif; ?>
						<div class="detail-item">
							<span class="di_i i_faq"></span>
							<p><strong>질문하시기전에 FAQ를 한번 둘러보세요</strong><br>저희는 해외에 거주하는 미국인을 위해 언제든지 사용할 수 있는 미국 국외 거주자 세금 정보 및 유용한 정보를 보유하고 있습니다. 신속하게 답변을 얻으려면 자주 묻는 질문 섹션을 방문하십시오.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>