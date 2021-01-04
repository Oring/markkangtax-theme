<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/swiper_obj.js"></script>
	
		<div id="mainSlider">
			<div class="swiper-container-banner" style="position:relative">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image:url(/img/main/rts-main-banner05.jpg)">
						<div class="rtssl-item">
							<div class="rtssl-inner">
								<div class="rtssl-box ab01">
									<h1 class="sld-tit ff-mj">미국 세금신고<br>문제없이 안전하게</h1>
									<p class="main-desc">처음부터 끝까지<br>고객님의 안전한 자산보고를 위해 연구합니다.<br>
										<a href="/about/" class="sl-goto">지금 알아보기</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image:url(/img/main/rts-main-banner02.jpg)">
						<div class="rtssl-item">
							<div class="rtssl-inner">
								<div class="rtssl-box ab02">
									<h2 class="sld-tit ff-mj">한국과 미국의 변호사들과<br>함께합니다</h2>
									<p class="main-desc">자주 바뀌고 복잡한 세법,<br>미국과 한국의 세법 둘 다 알아야 제대로 할 수 있습니다.<br>
										<a href="/philosophy/mark-story/" class="sl-goto">지금 알아보기</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image:url(/img/main/rts-main-banner03.jpg)">
						<div class="rtssl-item">
							<div class="rtssl-inner">
								<div class="rtssl-box ab03">
									<h2 class="sld-tit">Safety First</h2>
									<p class="main-desc">Safe Service로 고객님의 자산을 <br class="hdPC">안전하게 보호해 드립니다.<br>
										<a href="/safe-procedure/" class="sl-goto">지금 알아보기</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="top-swiper-button-next swiper-button-next"></div>
				<div class="top-swiper-button-prev swiper-button-prev"></div>
				<div class="top-swiper-pagination swiper-pagination"></div>
			</div>
		</div>
		<section class="main-con sc01">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h3 class="sc-tit ff-mj">미영주권,시민권자는<br>한국에 있는 소득과 재산도<br><span class="color-blue">미국에 신고해야 합니다</span></h3>
						<p class="sc-desc">한국에 거주하셔도 미국에서는 벌금부과대상이 될 수 있습니다<br>늦기전에 Right Tax Service 회계사 마크강에게 문의하세요</p>
					</div>

					<?php if ( of_get_option('main_contact_on_off') == 1 ) : ?>
					<div class="col-md-5"
		data-bottom-top="transform:translate(0px, 600px);z-index:2;"
		data-center-top="transform:translate(0px, 0px);z-index:2;">
						<div id="mainContact">
							<div class="contact-wrap">
								<h4 class="hidden">To. Mark Kang</h4>
								<?php echo do_shortcode( '[kboard id=1]' ); ?>
							</div> <!-- // .contact-container -->
						</div> <!-- // #mainContact -->
					</div>
					<?php endif; ?>

				</div>
			</div>
		</section>
		<section class="main-con sc02"
     data-bottom-top="background-position: 26% -750px" 
     data-top-bottom="background-position: 26% 150px">
			<div class="container">
				<div class="">
					<h3 class="sc-tit ff-mj">한국인을 위한 미국세금신고 전문</h3>
					<p class="sc-desc">IRS 보고가 처음이시라면,<br>전문 그룹 Right Tax Service와 함께하세요</p>
					<a href="/guide/" class="btn_st01">자산보고 어떻게 하나요?</a>
				</div>
			</div>
		</section>
		<section class="main-con sc03">
			<div class="container">
				<div class="" data-bottom-top="@class:inactive" data-50-top="@class:active" data-50-top-bottom="@class:inactive">
					<h3 class="sc-tit ff-mj ubar">복잡하고 방대한 세무자료<br>안전하게 3번 체크합니다</h3>
					<p class="sc-desc">중요한 세무자료가 누락된 채, 고객이 제출한 자료로만 보고해도 회계사에게는 법적책임이 없습니다. 
                    <br>따라서 철저하게 따지고 체크하기 보다는 대충하는 경우가 많습니다. 
                    <br>Right Tax Service는 고객님의 서류가 누락되어 손해보는 경우가 없도록 
                    <br>안전하게 3번 체크하는 Safe Review Process를 통해 서류를 검토합니다.</p>
					<a href="/about/" class="btn_st01">6가지 안심 제도 보기</a>
				</div>
			</div>
		</section>
		<div class="hdPC"><img src="/img/main/rts-main-mbg01.jpg" /></div>
		<section id="mainMarkStory" class="main-con sc04">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h3 class="sc-tit ff-mj ubar">카이스트 박사<br>스탠포드 연구원 출신<br>AICPA 미국회계사</h3>
						<p class="sc-desc">미국과 한국의 복잡한 세법<br>둘 다 잘 아는 회계사라야<br>안전하게 맡기실 수 있습니다</p>
						<a href="/philosophy/mark-story/" class="btn_st01 wh">회계사 마크 스토리 보기</a>
					</div>
				</div>
			</div>
		</section>
		<section class="main-con sc05">
			<div class="container">
				<div class="">
					<h3 class="sc-tit ff-mj ubar">안전한 프로세스</h3>
					<p class="sc-desc">고객님의 자산보고가 어떻게 진행되는지 안내해 드립니다.<br>미국 자산보고는 개인 정보 보호와 고객님의 자산 보호가 최우선되어야 합니다.</p>
					<ul class="clearfix step-list">
						<li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step01.png" /></p>
								<p class="info"><span class="num hdPC">01</span>상담 및 의뢰<span class="detail hdMB">견적 문의</span></p>
							</div>
						</li>
						<li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step02.png" /></p>
								<p class="info"><span class="num hdPC">02</span>구비 서류 준비<span class="detail hdMB">안심 우편 발송</span></p>
								<p class="arrow-right hdMB"><img src="/img/icons/process-right.png" /></p>
							</div>
						</li>
						<li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step03.png" /></p>
								<p class="info"><span class="num hdPC">03</span>서류 검토<span class="detail hdMB">보안 이메일</span></p>
								<p class="arrow-right hdMB"><img src="/img/icons/process-right.png" /></p>
							</div>
						</li>
						<li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step05.png" /></p>
								<p class="info"><span class="num hdPC">04</span>최종 결과 보고<span class="detail hdMB">세금관리 리포트</span></p>
								<p class="arrow-right hdMB"><img src="/img/icons/process-right.png" /></p>
							</div>
						</li>
                        <li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step06.png" /></p>
								<p class="info"><span class="num hdPC">05</span>수임료 정산</p>
								<p class="arrow-right hdMB"><img src="/img/icons/process-right.png" /></p>
							</div>
                        </li>
                        <li class="col-sm-2">
							<div class="step-item">
								<p class="icon"><img src="/img/icons/process-step04.png" /></p>
								<p class="info"><span class="num hdPC">06</span>IRS 제출<span class="detail hdMB">보고 완료</span></p>
								<p class="arrow-right hdMB"><img src="/img/icons/process-right.png" /></p>
							</div>
						</li>


					</ul>
					<a href="/safe-procedure/" class="btn_st01">안심 프로세스 보기</a>
				</div>
			</div>
		</section>

		<section class="main-con sc06">
			<h3 class="sc-tit ff-mj ubar">고객후기</h3>
			<?php echo do_shortcode('[kboard_latest id="2" url="/" category1="메인" rpp="6"]'); ?>
			<div class="seeReviewWrap">
				<a href="/testimonials/" class="btn_st01 seeReview">고객후기 보기</a>
			</div>
		</section>
	
		<section class="main-con sc07">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="ct_qna">
							<h4 class="ct_tit"><a href="/question/">자주 묻는 질문</a></h4>
							<ul class="qna-list">
								<li><a href="/question/">해외 거주자 미국 개인 세금 보고 시작 준비하려면?</a></li>
								<li><a href="/question/">해외 부동산과 관련해 미국 내 세금 보고는 어떻게 하나요?</a></li>
								<li><a href="/question/">미국 시민권자 해외 거주자 세금보고</a></li>
								<li><a href="/question/">한국 거주 미국 영주권자 세금 보고 및 금융자산신고 문의</a></li>
								<li><a href="/question/">한국에 세금을 냈는데도 미국에 세금을 내야 하나요?</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="ct_info">
							<h4 class="ct_tit ff-mj"><span class="sfthidden">안전하고 </span>편안하게 상담해드리겠습니다</h4>
							<p>상담을 신청해 주시면,<br>편하신 시간에 연락해드리겠습니다.</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="ct_app">
							<h4 class="ct_tit ff-mj hdMB">지금 문의하세요! 바르고 안전한 Right Tax Service입니다</h4>
							<a href="/contact-us/" class="ct_btn" onclick="ga('send','event','Contact','go to contact','main-bottom');">상담 신청하기</a>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php get_footer(); ?>