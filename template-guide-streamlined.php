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
			<p>한국인을 위한 미국세금신고<br><span>Right Tax Service가 함께 합니다</span></p>
		</div>
	</div>
	<!-- /헤더 -->


	<!-- INTRO 섹션 -->
  <section class="topSection container">
		<div class="topTitleWrap">
			<h1 class="topTitle text-center">
				미신고 벌금면제절차(SFCP)
			</h1>
			<hr class="topTitleUnderLine">
		</div>
		
			<div class="topQuoteWrap row">
				<h2 class="topQuote text-center color-brown ff-mj">
					<div class="quoteMark -top">“</div>
						만약 IRS에 미처 보고하지 못했다면<br>
						해외자산 자진신고 간소화 절차<br>
						(Streamlined Filing Compliance Procedures, SFCP)가 있습니다.
					<div class="quoteMark -bottom">”</div>
				</h2>
			</div>

			<p class="topDesc">
				미국 영주권자/시민권자 혹은 세법상 거주자라면, 비록 미국에 살고 있지 않더라도 해외 소득과 해외 자산을 매년 4월 15일까지 미 국세청(IRS)에  보고해야 하는 의무가 있습니다. 그러나 이 의무에 대해 몰라서 그동안 보고를 하지 못했던 분들이 한국을 포함하여 전 세계에 많이 계십니다. 
			</p>
			<p class="topDesc">
				그래서 미 국세청 IRS에서는 해외자산 자진신고 간소화 절차(Streamlined Filing Compliance Procedures, SFCP)라는 제도를 만들었습니다. IRS에 관련된 서류들을 잘 정리하여 제출하시면, 그동안의 누락된 신고들을 한 번에 처리하실 수 있는 구제 제도입니다. 그러면 이 제도와 관련해 좀 더 자세히 알아보도록 하겠습니다.
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
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition1.png" alt="FATCA 신고 대상자 시민권소지자 아이콘"/>
								<span>건당 최고 13,000불에서 계좌 잔고의 50%까지</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						1년 중 단 한 번이라도 한국(해외)에 금융자산을 10,000불 이상을 가지고 계셨다면 해외 계좌 보고(FBAR) 및 해외 자산 보고(FATCA)를 해야 합니다. 
						해외 자산의 기준은 은행 계좌뿐 아니라 보험, 증권, 펀딩, 연금, 투자 계좌 등을 포함하고 있어 누락될 우려가 아주 높은 편입니다.
						만약 해외 금융 계좌 보고가 누락되었다면 건당 최고 13,000불에서 계좌 잔고의 50%까지 페널티가 부과될 수 있습니다. 
					</p>
					<h4 class="guideSubTitle">
						페널티 피해 사례 #1
					</h4>
					<p class="desc noPad -top">
						롱아일랜드에 거주하는 한인 남 모 씨는 한국의 금융 계좌 2곳에 예치했던 200여만 달러를 미 금융당국에 신고하지 않았습니다.  
						지난 2009년 2개의 금융기관 잔고가 46만에 달했지만, 2010년 6월 30일까지 이를 연방 재무부에 신고하지 않아 1만 4,813달러의 벌금을 부과 받았습니다. 
						또 2010년에도 잔고가 151만 원에 달했지만 2011년 6월 30일까지 이를 신고하지 않아 벌금 2만 달러를 부과 받았습니다.
					</p>
					<h4 class="guideSubTitle">
						페널티 피해 사례 #2
					</h4>
					<p class="desc noPad -top">
						Moore씨는 스위스 계좌에 30만 불 이상의 금액을 가지고 있었는데 이에 관해 해외 금융 계좌 보고 및 해외 소득 보고를 2009년까지 하지 않았습니다. 
						그 이후에 해외 금융 계좌 보고 및 해외 소득 보고에 관한 의무에 대해 알게 되고, 2003년부터 2008년까지의 수정 세금 보고와 해외 금융 계좌 보고(FBAR)를 하였습니다. 
						그리고, 2009년부터는 제대로 보고하였으나, 2011년에 미국 국세청은 Moore씨에게 비고의성으로 인해 2005~2008년의 해외 금융 계좌 보고를 하지 않은 것에 대해 벌금 40,000 불을 부과합니다.
					</p>
					<p class="desc">
						그래서 그동안 잘 몰라서 보고를 못하셨다면, 지금부터라도 꼭 전문가와 상의를 통해 SFCP를 서둘러 준비하시는 것이 좋습니다. 
						왜냐하면 얼마 전 미 국세청 IRS에서 SFCP는 영구적인 제도가 아닌, 얼마든지 때가 되면 소멸될 수 있다고 공식 발표한 바가 있었기 때문입니다. 
						이 뜻은 지금 해외 금융 계좌 자진 신고 간소화 절차가 시행되고 있을 때, 가능한 한 서둘러서 사면을 받으라는 뜻입니다. 
						미국에 계시는 미 시민권자/영주권자 뿐 아니라, 한국이나 다른 해외에 계시는 미 시민권자/영주권자 분들도 이 문제를 빨리 해결하시길 바랍니다.
					</p>
					<p id="tempQ2Point"></p>
				</section>
				<!-- /섹션1 -->
				
				<!-- 섹션2 -->				
				<section class="guidePart" id="section2">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							SFCP를 준비하기 위해, <br class="hdPC">
							어떠한 서류들이 필요한가요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">SFCP 필요 서류</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage2.png" alt="FATCA 기준 거주지 아이콘"/>
								<span>지난 3년치의 미국세금 보고 혹은 수정 세금보고</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage3.png" alt="FATCA 기준 결혼 여부 아이콘"/>
								<span>지난 6년치의 FBAR 보고</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage3.png" alt="FATCA 기준 결혼 여부 아이콘"/>
								<span>비고의성 증명 사유서 양식 14653</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						Streamlined Filing Compliance Procedures – Foreign (해외거주자)
					</h4>
					<p class="desc noPad -top">
						만약, 해외 거주자의 조건을 만족한다면, 특별한 벌금이 없이, 그동안의 밀린 이자를 납부하는 정도로, 모든 페널티들을 완전히 사면 받을 수 있습니다. 
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							해외 거주자의 조건:<br>
							최근 3년 중 1년을 330일 이상 해외에 체류했을 경우 가능.<br>
							이때, 최근 3년이라는 것은 보고기한이 지난 것을 기준으로 3년
						</p>
					</div>
					<h4 class="guideSubTitle">
						Streamlined Filing Compliance Procedures – Domestic(미국거주자)
					</h4>
					<p class="desc noPad -top">
						미국 내 거주자의 경우, 지난 6년간의 연도별 연말 기준 잔액의 합중 가장 높은 금액의 5%를 벌금으로 납부하여야, 사면이 가능합니다.
						특히 한국에서 사시는 분들은 반드시 이 해외 거주자 자격 요건을 확인하셔서, 해외 거주자로써, 이 제도를 신청하시기 바랍니다.
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
						IRS는 이 사유서만큼은 꼭 리뷰를 하겠다고 발표하였고, 사유가 충분하지 않을 경우, 감사 및 벌금 부과를 할 수도 있다고 발표하였습니다. 
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
						얼마 전 미 국세청(IRS)에서, 이 해외자산 자진신고 간소화 절차(SFCP)는 영구적인 제도가 아닌, 얼마든지 소멸될 수 있는 제도라고 공식 발표한 바가 있습니다. 
						이것은 지금 이 제도가 살아 있을 때, 가능한 한 서둘러서, 간소화 절차를 통해 사면을 받으라는 뜻입니다. 
						그래서 저 또한 많은 고객분들과의 상담을 통해, 그동안 잘 몰라서 FBAR/FATCA 보고를 하지 못했던 분들은, 
						더 늦기 전에 이 해외자산 자진신고(SFCP)를 미루지 마시고 지금 할 수 있을 때 하시라고 적극 권장해드리고 있습니다. 
						이 글을 읽으시는 여러분들도, 만일 본인께서 대상자이시라면, 전문가와의 상의를 통해 이 문제를 빨리 해결하시길 바라겠습니다.</p>
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
		<a href="/rs-tax-filing-service"><img class="ctaBanner -left" src="/img/banner/ctaBanner1.jpg" alt="미국세금보고 안내 페이지로 이동"></a>
		<a href="/us-certified-public-accountant/mark-kang"><img class="ctaBanner -right" src="/img/banner/ctaBanner2.jpg" alt="Mark Kang 소개 페이지로 이동"></a>
	</section>
	<!-- /하단배너 -->

<?php get_footer(); ?>
