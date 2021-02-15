<?php
/*
Template Name: 가이드 - 스트림라인드
http://localhost/guide-streamlined-procedures
*/
get_header(); 
?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/followingNav.js"></script>

	<!-- 헤더 -->
	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>마크강택스에서 제대로 알려주는<br><span>미국세금보고 가이드</span></p>
		</div>
	</div>
	<!-- /헤더 -->


	<!-- INTRO 섹션 -->
  <section class="topSection container">
		<div class="topTitleWrap">
			<h1 class="topTitle text-center">
				미신고 벌금면제절차(Streamlined Procedures)
			</h1>
			<hr class="topTitleUnderLine">
		</div>
		
			<div class="topQuoteWrap row">
				<h2 class="topQuote text-center color-brown ff-mj">
					<div class="quoteMark -top">“</div>
						만약 IRS에 미처 보고하지 못했다면<br>
						해외자산 자진신고 간소화 절차<br>
						(Streamlined Procedures)가 있습니다.
					<div class="quoteMark -bottom">”</div>
				</h2>
			</div>

			<p class="topDesc">
				미국 영주권자/시민권자 혹은 세법상 거주자라면, 비록 미국에 살고 있지 않더라도 해외 소득과 해외 자산을 매년 4월 15일까지 미 국세청(IRS)에  보고해야 하는 의무가 있습니다. 그러나 이 의무에 대해 몰라서 그동안 보고를 하지 못했던 분들이 한국을 포함하여 전 세계에 많이 계십니다. 
			</p>
			<p class="topDesc">
				그래서 미 국세청 IRS에서는 해외자산 자진신고 간소화 절차(Streamlined Procedures)라는 제도를 만들었습니다. IRS에 관련된 서류들을 잘 정리하여 제출하시면, 그동안의 누락된 신고들을 한 번에 처리하실 수 있는 구제 제도입니다. 그러면 이 제도와 관련해 좀 더 자세히 알아보도록 하겠습니다.
			</p>
			<p id="tempQ1Point"></p>
	</section>
	<!-- /INTRO 섹션 -->

	<!-- 내용 섹션 -->
	<div id="guideContent" class="guidesWrap container">
		<div class="row">
			<div class="col-sm-3">
				<!-- 팔로잉 네비게이션 -->
				<nav id="followingNavigation">
					<ol class="followingNavigationInner">
						<li onclick="onClickNavList('section1')" class="-current">
							미 신고시 패널티
						</li>
						<li onclick="onClickNavList('section2')" class="-notcurrent">
						<span class="hdMB-inb">보고시</span> 필요 서류
						</li>
					</ol>
				</nav>
				<!-- /팔로잉 네비게이션 -->
			</div>

			<div class="col-sm-9">
				<!-- 섹션1 -->
				<section class="guidePart" id="section1">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">시민권자/영주권자가 미 신고시 <br class="hdPC">어떤 패널티가 있을까?</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">미 신고시 패널티</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>FBAR <br>
									<span class="itemDesc">
										최대 $12,912, 누락 계좌 잔고의 50%까지
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>FATCA <br>
									<span class="itemDesc">
										건당 $10,000, 최대 $50,000</span>
									</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>해외 법인 보고 <br>
									<span class="itemDesc">
										건당 $10,000, 최대 $50,000
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>해외 파트너십 보고 <br>
									<span class="itemDesc">
										건당 $10,000, 최대 $50,000
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>해외 사모 펀드 보고 <br>
									<span class="itemDesc">
										건당 $10,000
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/fine-icon.png" alt="미신고패널티 아이콘"/>
								<span>해외 증여 보고 <br>
									<span class="itemDesc">
										최대 증여 금액의 25%
									</span>
								</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						해외 금융 계좌 보고(FBAR)
					</h4>
					<p class="desc noPad -top">
						1년 중 단 한 번이라도 한국(해외) 금융 계좌의 잔고의 합이 $10,000 이상인 적이 있다면 해외 금융 계좌 보고(FBAR)를 해야 합니다. 해외 금융 계좌의 기준은 은행뿐 아니라 보험, 증권, 펀딩, 연금 등을 포함하고 있어 누락될 우려가 있습니다. FBAR 보고를 비고의성으로 하지 않았다면 최대 벌금이 $12,912이며, 고의성 누락으로 판단이 되면 그 벌금이 미보고 계좌 금액의 50%까지 부과될 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 자산 보고(FATCA)
					</h4>
					<p class="desc noPad -top">
						FATCA는 해외 자산 신고로서 세금보고를 할 때 포함하여 보고합니다. FBAR와 달리 금융 계좌뿐만이 아니라 소유한 법인의 지분 등 보고 대상의 범위가 넓고 거주 지역 및 결혼 상태에 따라 보고 대상 기준 금액이 다릅니다. 한국의 계신 분들 중에 싱글/부부 개별 신고자는 총 자산이 연말 기준 20만 불, 연중 기준 30만 불을 초과할 때, 부부합산 신고자는 연말 40만 불, 연중 60만 불을 초과할 때 FATCA  대상이 됩니다.  FATCA 보고를 누락한 경우 벌금 $10,000을 부과하는 편지가 발급될 수 있고, 이에 응하지 않으면 30일 경과마다 $10,000씩 추가되고 최고 $50,000의 벌금 폭탄을 맞을 수 있습니다. 또한 고의적인 미신고로 판단이 되면 형사처벌까지 받을 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 법인 보고
					</h4>
					<p class="desc noPad -top">
						해외 법인의 지분을 10% 이상 소유하게 되거나, 처분으로 인해 10% 보다 낮아졌을 때, 또한 미국 납세자들의 지분율 총합이 50%를 넘을 때 등 해외 법인의 정보를 양식 5471에 작성하여 1040과 함께 제출합니다. 만약 보고를 하지 않으면 건당 $10,000의 벌금이 부과될 수 있으며, 90일 경과 후에도 미납부시 매월 $10,000이 추가되어 $50,000까지 벌금이 부과될 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 파트너십(동업) 보고
					</h4>
					<p class="desc noPad -top">
						해외에서 동업을 하는 업체의 지분이 50%를 초과하거나 미국 납세자들이 50% 이상 지분을 소유하고 있는 업체에 10% 이상의 지분을 소유한다면, 해외 동업 정보를 양식 8865에 보고해야 합니다. 보고하지 않을 시 건당 $10,000의 벌금이 부과되고 90일 이내에 납부하지 않으면 매월 $10,000이 추가되어 벌금이 최대 $50,000까지 될 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 사모 펀드 보고
					</h4>
					<p class="desc noPad -top">
						해외에서 사모펀드의 지분을 소유한 경우, 지분율에 상관없이 해당 사모펀드의 정보와 재무제표 등을 양식 8621에 보고해야 합니다. 보고 하지 않을 시 건당 $10,000 벌금이 부과됩니다.
					</p>
					<h4 class="guideSubTitle">
						해외 증여 보고
					</h4>
					<p class="desc noPad -top">
						외국인으로부터 10만 불 이상의 증여를 받았을 경우에는, 양식 3520에 작성하여 보고하며, 개인소득 세금 보고와는 별도로 제출합니다. 보고를 하지 않거나 잘못된 보고를 할 경우 증여액의 25% 의 벌금이 부과될 수 있으니 꼭 시간 내에 보고해야 합니다.
					</p>
					<p class="desc">
						그래서 그동안 잘 몰라서 보고를 못하셨다면, 지금부터라도 꼭 전문가와 상의를 통해 Streamlined Procedures를 서둘러 준비하시는 것이 좋습니다. 
						왜냐하면 얼마 전 미 국세청(IRS)에서 Streamlined Procedures는 영구적이지 않고 언제든 소멸될 수 있다고 발표하였기 때문입니다. 즉, 자진 신고 간소화 절차가 시행되고 있을 때, 가능한 한 서둘러 구제를 받으시는 것이 좋습니다.
						미국에 계시는 미 시민권자/영주권자 뿐 아니라, 한국이나 다른 해외에 계시는 미 시민권자/영주권자 분들도 이 문제를 빨리 해결하시길 바랍니다.
					</p>
					<p id="tempQ2Point"></p>
				</section>
				<!-- /섹션1 -->
				
				<!-- 섹션2 -->				
				<section class="guidePart" id="section2">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							Streamlined Procedures를 준비하기 위해<br>
							어떠한 서류들이 필요한가요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">필요 서류</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/documents-icon.png" alt="Streamlined Procedures 필요 서류 아이콘"/>
								<span>지난 3년치의 미국세금 보고 혹은 수정 세금보고</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/documents-icon.png" alt="Streamlined Procedures 필요 서류 아이콘"/>
								<span>지난 6년치의 FBAR 보고</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/documents-icon.png" alt="Streamlined Procedures 필요 서류 아이콘"/>
								<span>비고의성 증명 사유서 양식 14653</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						Streamlined Procedures – Foreign (해외거주자)
					</h4>
					<p class="desc noPad -top">
						만약, 해외 거주자의 조건을 만족한다면, 특별한 벌금이 없이, 그동안의 밀린 이자를 납부하는 정도로, 모든 페널티들을 완전히 사면 받을 수 있습니다. 
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							해외 거주자의 조건:<br>
							최근 3년 중 1년 이상 330일 이상 해외에 체류했을 경우.<br>
							이 때, 최근 3년이란 보고 기한이 지난 것을 기준으로 3년임.<br>
							영주권이 아닌 F/J 비자의 세법상 비거주자 요건에 만족하는 경우.
						</p>
					</div>
					<h4 class="guideSubTitle">
						Streamlined Procedures – Domestic(미국거주자)
					</h4>
					<p class="desc noPad -top">
						미국 내 거주자의 경우, 지난 6년간의 연도별 연말 기준 잔액의 합중 가장 높은 금액의 5%를 벌금으로 납부하여야, 사면이 가능합니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							미국 거주자의 조건:<br>
							최근 3년 동안 미국 내에 거주
						</p>
					</div>
					<h4 class="guideSubTitle">
						비고의성 증명 사유서
					</h4>
					<p class="desc noPad -top">
						가장 중요한 것은, 그동안 신고를 못한 이유에 고의성이 없다는 것을 증명해야 합니다. 
						이를 설명하기 위해 어떻게 하여 지금까지 신고를 하지 않았는지에 대한 정당한 사유를 작성합니다.
						IRS는 이 사유서만큼은 꼭 리뷰를 할 것이며, 사유가 충분하지 않을 경우, 감사 및 벌금 부과를 할 수도 있다고 발표하였습니다. 
						따라서 사유서를 잘 작성하는 것이 매우 중요합니다.
					</p>
					
				</section>
				<!-- /섹션2 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap">
					<div class="markTitleImg">
						<h2 class="markTitleText">스트림라인드 보고, <br>늦기 전에 지금 바로 신고하세요</h2>
					</div>
					<p class="desc">
						얼마 전 미 국세청(IRS)에서는 Streamlined Procedures 가 영구적인 제도가 아닌 언제든지 소멸될 수 있음을 공식 발표한 바 있습니다. 
						이는 Streamlined Procedures 가 시행되고 있을 때, 서둘러 간소화 절차를 통해 사면을 받으라는 의미입니다. 
						그동안 잘 몰라서 해외 자산 보고를 하지 못했던 분들이 계시다면, 
						더 늦기 전에 Streamlined Procedures 프로그램으로 미신고 해외자산을 해결하시기를 권해드립니다.
					</p>
				</section>
				<!-- 마크 코멘트 -->
			</div>
		</div>
	</div>

	<!-- OUTRO 섹션 -->
  <!-- <section class="lastWrap container">
		<h2 class="lastQuote ff-mj">
			<div class="lastQuoteMark">“</div>
				미국 세금 보고 만큼은<br>
				반드시 제대로 된 전문가와의<br>
				상의를 통해 해결하셔야 합니다.
		</h2>
		<p class="lastDesc">
			이제 미국 시민권/영주권자 그리고 미 세법상 거주자가 소유한 미국 외의 해외 금융 자산 정보를 IRS가 얼마든지 볼 수 있게 되었습니다. 그렇기 때문에 더욱 FBAR 신고에 대한 관심을 갖고, 그동안 몰라서 신고를 안하신 분들은 지금이라도 더 늦기전에 스트림라인드 보고(해외금융계좌 자진신고 간소화 절차)의 경험이 많은 전문가와 함께 이 문제를 해결하시기를 추천해드립니다. 
		</p>
	</section> -->
	<!-- /OUTRO 섹션 -->

	<!-- 하단배너 -->
	<section class="bannerWrap container">
		<a href="/irs-tax-filing-service"><img class="ctaBanner -left" src="/img/banner/ctaBanner1.jpg" alt="미국세금보고 안내 페이지로 이동"></a>
		<a href="/us-certified-public-accountant/mark-kang"><img class="ctaBanner -right" src="/img/banner/ctaBanner2.jpg" alt="Mark Kang 소개 페이지로 이동"></a>
	</section>
	<!-- /하단배너 -->

<?php get_footer(); ?>
