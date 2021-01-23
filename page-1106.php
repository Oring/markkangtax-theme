<?php get_header(); 
	/*
	FBAR 가이드 페이지
	http://localhost/fbar-해외금융계좌보고/
	*/
?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/followingNav.js"></script>

	<!-- 헤더 -->
	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>한국인을 위한 미국세금신고<br><span>Right Tax Service가 함께 합니다</span></p>
		</div>
	</div>
	<!-- /헤더 -->

	<article>
	<!-- INTRO 섹션 -->
  <section class="topSection container">
		<div class="topTitleWrap">
			<h1 class="topTitle text-center">
				해외금융계좌신고 FBAR란?
			</h1>
			<hr class="topTitleUnderLine">
		</div>
		
			<div class="topQuoteWrap row">
				<h2 class="topQuote text-center color-brown ff-mj">
					<div class="quoteMark -top">“</div>
						FBAR (Foreign Bank Accounts Reporting)<br>
						한국 혹은 해외에 보유한 금융 자산을<br>
						미국 재무부에 보고하는 정보성 신고입니다 
					<div class="quoteMark -bottom">”</div>
				</h2>
			</div>

			<p class="topDesc">
				해외금융계좌신고인 FBAR를 들어보셨나요? 미국의 영주권/시민권자라면 전 세계 어디에 살고 있더라도 IRS 에 미국세금 보고 및 해외 금융 계좌를 신고해야 합니다. 또한 미국에 머무는 날이 많아서 183일 테스트를 통과하면, 자동으로 해외에 있는 금융계좌를 신고해야 하는 의무가 생깁니다. 
			</p>
			<p class="topDesc">
				한국 및 해외계좌의 모든 잔액합이 1년 중에 단 하루라도 1만 달러 이상을 보유한 적이 있다면, 미 재무부에 매년 4월 15일까지 모든 계좌를 다 신고해야합니다.
				이 보고는 정보 보고(Information report)로써 보고하는 액수가 많다고 해서 미국에 세금을 내지는 않습니다. 하지만 보고를 안한 것이 적발되었을 때에는 큰 액수의 벌금이 부과되기 때문에, 보고 대상자이시면 주의 깊게 읽어보시기 바랍니다.
			</p>
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
							보고<span class="hdMB-inb">&nbsp;</span>대상
						</li>
						<li onclick="onClickNavList('section2')" class="-notcurrent">
							신고<span class="hdMB-inb">&nbsp;</span>항목
						</li>
						<li onclick="onClickNavList('section3')" class="-notcurrent">
							신고기한 <span class="hdMB-inb">및&nbsp;벌금</span>
						</li>
						<li onclick="onClickNavList('section4')" class="-notcurrent">
							누락신고<span class="hdMB-inb">절차</span>
						</li>
						<li onclick="onClickNavList('section5')" class="-notcurrent">
							FBAR<span class="hdMB-inb">&nbsp;</span>전망
						</li>
					</ol>
				</nav>
				<!-- /팔로잉 네비게이션 -->
			</div>

			<div class="col-sm-9">
				<!-- 섹션1 -->
				<section class="guidePart" id="section1">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">FBAR 신고를 해야 하는 <br class="hdPC">대상은 누구인가요? </h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FBAR 신고 자격 요건</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition1.png" alt="미국세금신고 대상자 시민권소지자"/>
								<span>시민권소지자</span>
							</li>
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition2.png" alt="미국세금신고 대상자 영주권소지자"/>
								<span>영주권소지자</span>
							</li>
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition3.png" alt="미국세금신고 대상자 183일 거주테스트 통과자"/>
								<span>183일 <br class="hdMB">거주테스트 통과자</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						시민권/영주권/183일 거주테스트 통과자
					</h4>
					<p class="desc noPad -top">
						미 세법에서 규정짓는 U.S. Person은 다음과 같습니다. 미국 시민권자, 미국 영주권자, 거주자(Resident Alien : IRS의 183일 거주 테스트를 통과한 해외 국적자) 입니다. 
						F, M 학생 비자로 미국 거주 햇수로 5년을 초과할 경우, J, Q 인턴/연구원/방문교수 비자로 미국 거주 햇수로 2년을 초과할 경우, H, L, E 투자/취업 비자 소지자인 경우 등이 세법상 거주자에 속합니다.
					</p>
					<div class="greyBox">
						<p class="greyBoxText">
						<a rel="noreferrer noopener" aria-label=" 183일 거주 테스트(Substantial Presence Test) (새탭으로 열기)" href="https://www.irs.gov/individuals/international-taxpayers/substantial-presence-test" target="_blank" style="text-decoration: underline;">※ 183일 거주 테스트(Substantial Presence Test):</a><br>
							세금보고 연도 거주일수 + <br class="hdPC">
							직전연도 거주일수의 1/3 + <br class="hdPC">
							전전연도 거주일수의 1/6 > 183일
						</p>
					</div>
					<p class="desc">
						FBAR는 나이 및 소득금액과 상관 없습니다.  미성년자도 보고 대상입니다. 예를 들어, 1살인 자녀의 명의로 만든 계좌들의 잔액 합이 1만 달러라면 자녀도 FBAR를 신고해야 합니다.
					</p>
				</section>
				<!-- /섹션1 -->

				<!-- 섹션2 -->
				<section class="guidePart" id="section2">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							FATCA 신고해야 하는<br class="hdPC">
							항목은 무엇이 있나요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FATCA 신고 항목</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-4.png" alt="해외금융계좌 아이콘"/>
								<span>
									해외(미국 제외) 모든 금융 계좌
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-3.png" alt="해외지점 계좌 아이콘"/>
								<span>
									미국금융기관의 해외지점 계좌
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-6.png" alt="투자 계좌 아이콘"/>
								<span>
									투자 계좌(주식, 증권, 투자신탁, 퇴직연금 계좌 등)
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-2.png" alt="공동서명권한 아이콘"/>
								<span>
									공동서명권한이 있는 계좌
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-7.png" alt="기업의 금융 계좌 아이콘"/>
								<span>
									50% 초과 지분을 소유한 기업의 금융 계좌
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-1.png" alt="해외 뮤추얼 펀드 아이콘"/>
								<span>
									해외 뮤추얼 펀드
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-5.png" alt="보험 아이콘"/>
								<span>
									저축성 기능의 보장성 보험, 저축/투자신탁의 기능성 보험 
								</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						미국 외 금융기관에 등록된 금융계좌
					</h4>
					<p class="desc noPad -top">
						FBAR 신고 대상인 금융 계좌들은 위와 같습니다. 간단하게 정리하면 미국 외에 있는 금융기관에 등록된 금융계좌가 보고대상입니다. ​예를 들어, 한국 신한은행의 미국 지점에 있는 계좌는 보고 대상이 아니며, 반대로 한국에 있는 씨티은행 계좌는 보고를 해야 합니다. FBAR 신고서에는 각 계좌 정보와 연중 최고 잔액 및 해당 금융 기관의 정보를 기재해야 합니다.
					</p>
					<h4 class="guideSubTitle">
						계좌 최고 잔액 조건
					</h4>
					<p class="desc noPad -top">
						과세 연도 중 어느 하루라도 해외 금융 계좌들의 잔액의 합이 총 $10,000을 넘으면 신고 대상입니다.
						현재 환율을 적용하면 약 1200만원인데 한국에서 경제활동을 하시는 분들 거의 대부분이 FBAR 신고대상이 됩니다.
					</p>
				</section>
				<!-- /섹션2 -->
				
				<!-- 섹션3 -->
				<section class="guidePart" id="section3">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							언제까지 신고해야 하나요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">신고 기한</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-deadline1.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									4월 15일까지 제출, <br class="hdPC">6개월 자동 연장
								</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						미국세금 보고 기한과 마찬가지로 4월 15일까지 제출해야 하고, 현재는 별다른 연장신청 없이도 6개월 자동연장이 되어 정규 마감일인 4월 15일이 지났더라도 10월 15일까지 보고할 수 있습니다.
						하지만, 앞으로 언제 IRS가 자동연장 제도를 없앨지 모르니 가능하면 4월 15일까지 보고하시는 것을 권장합니다.
					</p>
					<img src="/img/FBAR1-700x589.jpg" alt="" style="width:100%">
					<img src="/img/FBAR2-700x384.jpg" alt="" style="width:100%">
					<p class="desc noPad -top">
						해외금융계좌신고양식 – Report of Foreign Bank and Financial Accounts
					</p>
				</section>
				<!-- /섹션3 -->

				<!-- 섹션3-1 -->
				<section class="guidePart">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							FBAR 미 신고시<br class="hdPC">
							벌금은 얼마인가요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FBAR 벌금 및 처벌 규정</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-8.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									최소 13,000 불 또는 <br class="hdPC">미보고 누락계좌의  50%
								</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						FBAR 신고는 정보성 보고(Information Report)이기에 따로 세금이 부과되지 않습니다. 하지만 신고를 이행하지 않으면 약 $13,000 또는 미보고 누락계좌의 50%가 벌금으로 부과될 수 있습니다. 그리고 문제는 벌금 뿐만 아니라, 본인도 모르는 사이에 본인이 미국 연방법상 체납자가 되어, 미국 방문후에 , 다시 고국으로 돌아갈시 출국 금지 조치를 당하는 등의 불이익을 당하실수가 있습니다.
					</p>
					<h4 class="guideSubTitle">
						IRS에 명시된 벌금 및 처벌 규정
					</h4>
					
					<ul class="guideDescList noPad -top">
						<li>
							법인이나 회사가 의무 부주의(Negligence)로 인해 위반했을 경우, 벌금 $1,118
						</li>
						<li>
							개인이 비고의성으로 신고하지 않았을 경우, 벌금 $12,921
						</li>
						<li>
							고의로 신고하지 않았을 경우, 1) $129,210와 미신고 계좌 잔액의 50% 중에서 큰 금액의 벌금이 부과되거나, 2) 형사상 최대 $250,000벌금이나 5년 이하의 징역, 또는 3) 벌금과 5년 이하의 징역
						</li>
						<li>
							고의로 잘못 신고 했을 경우, 1) 최고 $100,000와 위반 계좌 잔액의 50% 중에서 큰 금액의 벌금이 부과되거나, 2) 형사상 최대 $100,000벌금이나 징역 5년, 또는 3) 벌금과 징역5년 모두.
						</li>
					</ul>
					<p class="desc">
						위의 벌금액은 2019년 기준으로써 매년 물가 변동과 연동되어 조정될 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						처벌의 공소시효
					</h4>
					<p class="desc noPad -top">
						IRS가 그동안 신고를 안하거나 잘못 신고 했을 때, 납세자에게 벌금을 부과할 수 있는 기간은 신고 기한으로부터 6년 입니다. ​예를 들어 2019년 신고는 2020년 4월 15일까지 신고기한이므로 2026년 4월 15일까지 벌금을 부과할 수 있습니다.
						​또, 현재(2019년 11월)를 기준으로, 6년 전인 2013년 9월 이후에 신고기한을 가진 FBAR에 대해서는 처벌을 할 수 있어, 2013년 신고까지 벌금을 부과할 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						실제로 벌금을 부과하나요?
					</h4>
					<p class="desc noPad -top">
						IRS는 기존에 우편으로 접수받았던 FBAR를 2013년부터 의무적으로 인터넷으로 신고하도록 바꿨습니다. 또한 한국과는 2016년 한미 계좌 정보 자동 교환을 시작하여, 한국 금융계좌 정보가 매년 미국으로 보내지고 있습니다. ​
						이 두가지로써 IRS에서는 한국에 있는 납세자의 금융계좌정보와 신고 내용을 자동으로 비교할 수 있는 시스템을 이미 갖추고 있습니다. ​
						이를 바탕으로 점점 벌금을 부과하며 신고 제도를 강화해나가고 있습니다.
					</p>
					<p class="desc">
	​					 우리 한인들도 벌금이 부과된 사례가 뉴스에 보도되기도 했는데요. ​2016년 코네티컷 주의 김모씨에게는 징역 6개월과 고의성 벌금 1400만불을 부과하였고, 2018년 뉴욕주에 살고 있는 한인 동포 남모씨에게 한국에 있는 은행계좌 2개를 2년 동안 미신고 한것에 대해 연도별로 1만불 씩 벌금을 부과하였습니다.
					</p>
				</section>
				<!-- /섹션3-1 -->

				<!-- 섹션4 -->
				<section class="guidePart" id="section4">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							그동안 FBAR 신고를<br class="hdPC">
							하지 않았는데,<br>
							어떻게 해야 하나요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">그동안 누락된 신고에 대한 제도</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-9.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									스트림라인 보고<br class="hdPC">(SFCP: Streamlined Filing Compliance Procedure)
								</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						다행히도 이러한 분들을 위한 IRS의 <a href="https://righttaxservice.com/guide/" style="text-decoration: underline;">스트림라인드 보고(Streamlined Filing Compliance Procedures)</a> 즉, 해외금계좌 자진 신고 간소화 절차라는 구제 프로그램을 통해 해결 가능합니다. 지난 3년간의 세금 보고나 수정 세금 보고, 지난 6년간의 FBAR 보고, 그리고 미신고에 대한 비고의성을 입증하는 사유서 등을 제출하면 과거의 누락된 신고를 처리 할 수 있습니다.
					</p>
					<p class="desc">
						해외 거주자의 경우는, 누락된 신고에 대한 벌금이 부과되지 않고 그 동안 밀린 세금 보고에 대한 지연 이자만 납부하는 정도로 해결할 수 있습니다. 
						미국 거주자의 경우, 미보고 계좌 총 잔액의 5%를 벌금으로 납부해야 합니다. 
						단, 이 자진 신고 간소화 절차는 비고의적으로 보고를 하지 못했던 분들에게만 적용됩니다. 	
					</p>
					<h4 class="guideSubTitle">
						해외 거주자의 조건:<br class="hdPC"> 최근 3년 중 1년 330일 이상 해외체류
					</h4>
					<p class="desc noPad -top">
						미국에 거주하고 있는 분들은 미보고 계좌 잔액의 5%를 벌금으로 내야하지만, 해외에 거주하고 있는 사람은 벌금이 면제됩니다.​ 해외 거주자의 조건은 최근 3년 중 1년을 330일 이상 해외체류했으면 가능합니다. 이 때, 최근 3년이라는 것은 보고기한이 지난 것을 기준으로 3년입니다. ​
						예를 들어, 현재(2019년 11월) 기준, 연장신청을 하지 않았다면 2018년 미국세금 보고 기한이 지났으므로, 2016-2018년 3년이 대상입니다. 이 3년 중에서 한 해에 330일 이상 해외에 있었다면, 벌금없이 스트림라인 보고를 하실 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						스트림라인 보고 조건: 비고의성
					</h4>
					<p class="desc noPad -top">
						여기서 중요한 것은 그동안 신고를 못한 이유에 고의성이 없다는 것을 증명해야 합니다. ​
						이를 설명하기 위해 어떻게 하여 지금까지 신고를 하지 않았는지에 대한 정당한 사유를 양식(14653 또는 14654)에 작성합니다. ​
						IRS는 이 사유서만큼은 꼭 리뷰를 하겠다고 발표를 하였고, 사유가 충분하지 않을 경우, 감사 및 벌금 부과를 할 수도 있다고 발표하였습니다. 따라서 사유서를 잘 작성하는 것이 매우 중요합니다.
					</p>
					<h4 class="guideSubTitle">
						스트림라인 신고 내용
					</h4>
					<p class="desc noPad -top -bottom">
						해외 거주자의 경우,<br>
					</p>
					<ul class="guideDescList noPad -top">
						<li>
							지난 3년치의 미국세금 보고 혹은 수정 세금보고
						</li>
						<li>
							지난 6년치의 FBAR 보고
						</li>
						<li>
							비고의성 증명 사유서 양식 14653
						</li>
						<li>
						미납된 세금(가산세 면제)과 이자
						</li>
					</ul>
					<p class="desc noPad -bottom">
						미국 거주자의 경우<br>
					</p>
					<ul class="guideDescList noPad -top">
						<li>
							지난 3년치의 수정 세금보고
						</li>
						<li>
							지난 6년치의 FBAR 신고
						</li>
						<li>
							비고의성 증명 사유서 양식 14654
						</li>
						<li>
							각 연도의 연말기준 총 자산의 합 중 (6년 중에서) 가장 큰 금액의 5%를 벌금으로 내야합니다.
						</li>
					</ul>
				</section>
				<!-- /섹션4 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap" id="section5">
					<div class="markTitleImg">
						<h2 class="markTitleText">FBAR, <br>앞으로 어떻게 될까?</h2>
					</div>
					<h4 class="guideSubTitle">
						FBAR 처벌을 강화해 온 역사
					</h4>
					<p class="desc noPad -top">
						FBAR 신고가 최근에 시작된 것은 아닙니다. 그 시작은 1970년으로 거슬러 올라갑니다. ​처음 이 신고의 목적은 해외로 누출된 자본이 불법 자금 세탁 및 탈세 등 불법 활동에 이용되는 것을 막기 위함이었습니다.
						​하지만 그 벌금 및 처벌 규정이 강하지 않아 그 효력이 잘 발휘되지 않았고, 거의 대부분의 사람들이 신고를 하지 않았습니다. 
					</p>
					<p class="desc">
						그 후, 2001년 911테러가 발생하고, 미국은 <a rel="noreferrer noopener" aria-label=" USA Patriot Act (새탭으로 열기)" href="https://www.fincen.gov/resources/statutes-regulations/usa-patriot-act" target="_blank" style="text-decoration: underline;">USA Patriot Act법</a>을 제정하게 됩니다.
						​이는 미국 사회 전반에 테러 방지를 위한 강화 정책인데, 그 일환으로 미 재무부가 2002년부터 2004년까지 해외금융계좌신고에 대한 법령을 꾸준히 공표하고 강화해 나갔습니다.​
					</p>
					<p class="desc">
						더불어, IRS는 미 납세자의 탈세를 도왔다는 이유로 스위스 UBS 은행에게 780만불의 벌금을 부과하는 등 강한 처벌의 본보기를 보여주면서, ​해외의 금융기관에 연이어 고소를 하여 IRS는 스위스 UBS 은행으로부터 미납세자 4450명의 계좌정보를 얻어내고, 그 처벌을 강화해갑니다. ​
						그리고, 2009년에는 OVDP(해외금융계좌 자진신고 사면 프로그램) 라는 프로그램을 실행하여 그동안 해외금융계좌신고를 하지 않은 사람들이 6년치의 미국세금 보고와 함께 보고하고, 신고를 누락한 금액의 20%를 벌금(2014년에는 벌금이 27.5%까지 높아집니다)을 자진해서 내며 그동안 미보고한 것을 청산하도록 하였습니다. ​
					</p>
					<p class="desc">
						그 이후에도 IRS는 끊임 없이 프로그램 개편과 벌금을 강화해가며 대중에게 인식시키고 그 참여를 유도해왔습니다. ​2014년에는 비고의성을 입증할 수 있는 사람을 대상으로 스트림라인 보고를 확대하여, 미국거주자의 경우, 5% 의 상대적으로 낮은 벌금을 부과하고, 해외거주자는 벌금없이 해결할 수 있는 방안을 발표합니다.​
						그러다가 2018년에는 OVDP를 종료시키며, 스트림라인 보고도 언제 종료할지 모른다고 발표합니다.​
						이와 같이 여러 해에 걸쳐 IRS가 미국 거주자의 해외 금융 계좌 신고 강화 및 해외 소득에 대한 미국세금 징수를 위해 노력한 것을 보면, 앞으로 어떤 식으로 상황이 전개될 것인지 전망해볼 수 있습니다. ​
					</p>
					<h4 class="guideSubTitle">
						앞으로의 전망
					</h4>
					<p class="desc noPad -top">
						2010년 제정된 <a rel="noreferrer noopener" aria-label="Foreign Account Tax Compliance Act(FATCA (새탭으로 열기)" href="https://www.irs.gov/businesses/corporations/foreign-account-tax-compliance-act-fatca" target="_blank" style="text-decoration: underline;">Foreign Account Tax Compliance Act(FATCA)</a> 를 통하여 전 세계의 금융기관으로부터 미국 납세자의 금융정보를 받는 것을 준비하여, 우리 나라도 2016년부터 한국에 있는 미국 납세자의 금융정보를 IRS로 보내고 있습니다.​
						또한 기존에 우편으로 보고하던 것을 2013년부터는 인터넷으로 보고하도록 개정하였습니다. 이처럼 IRS에는 전산으로 빠르게 전 세계에서 데이터를 수집하고, 보고 내용을 비교할 수 있는 시스템이 갖추어져 있습니다.​
						그 동안 세금 징수 확대를 위해 노력해왔다는 것을 비추어볼 때, 이런 시스템을 갖춤으로써 IRS가 미국 거주자뿐만 아니라 한국에 거주하고 있는 사람들에게 언제라도 벌금을 부과할 수 있는 상황이 되었습니다. ​
						따라서 그동안 보고를 안하셨던 분은 전문가와 잘 상의하셔서 문제를 해결하시기 바랍니다.
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
	</article>

	<!-- 하단배너 -->
	<section class="bannerWrap container">
		<img class="ctaBanner -left" src="/img/banner/ctaBanner1.jpg" alt="미국세금보고 안내 페이지로 이동">
		<img class="ctaBanner -right" src="/img/banner/ctaBanner2.jpg" alt="Mark Kang 소개 페이지로 이동">
	</section>
	<!-- /하단배너 -->

<?php get_footer(); ?>