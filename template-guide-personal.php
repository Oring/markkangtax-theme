<?php 
/*
Template Name: 가이드 - 개인소득신고 personal
http://localhost/미국-세금-보고-개인소득세/
*/
get_header(); 
?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/followingNav.js"></script>

	<!-- 헤더 -->
	<div class="guidesTopSect">
		<div class="sub-sect-top">
			<div class="sub-sect-inner">
				<p>한국인을 위한 미국세금신고<br><span>Right Tax Service가 함께 합니다</span></p>
			</div>
		</div>
	</div>	

	<!-- /헤더 -->

	<article>
	<!-- INTRO 섹션 -->
  <section class="topSection container">
		<div class="topTitleWrap">
      <h1 class="topTitle text-center">
				미국 시민권, 영주권자의 <br class="hdPC">개인소득세 신고 총정리
			</h1>
			<hr class="topTitleUnderLine">
		</div>

		<div class="topQuoteWrap row">
			<h2 class="topQuote text-center color-brown ff-mj">
				<div class="quoteMark -top">“</div>
				미국 시민권/영주권자는 전 세계 어디에 있더라도<br>
				전 세계의 소득(worldwide income) 및<br>
				해외자산 등을 보고해야 하는 의무가 있습니다. 
				<div class="quoteMark -bottom">”</div>
			</h2>
		</div>
		<p class="topDesc">
			미국 개인 소득세 신고는 미국에 사시는 분만 하는 것이 아닙니다. 본인이 미국 시민권이나 영주권자, 그리고 183일 거주 테스트를 만족하는 세법상 거주자라면 한국이 아닌 다른 해외에 거주하더라도  거기에서 발생한 소득도 전 세계의 소득(worldwide income)으로써 미국 국세청 IRS에 보고해야 하는 의무가 있습니다.
		</p>
		<p class="topDesc">
			특히 오바마 대통령 시절, 미국과 여러 나라가 맺은 <a rel="noreferrer noopener" aria-label=" (opens in a new tab)" href="https://righttaxservice.com/fatca-%ed%95%b4%ec%99%b8%ea%b8%88%ec%9c%b5%ec%9e%90%ec%82%b0%eb%b3%b4%ea%b3%a0/" target="_blank" style="text-decoration: underline">FATCA(해외계좌신고법)</a> 협정 때문에, 각국의 금융 정보가 서로 공유되고 있습니다. 그래서 이제는 미국 국세청에서 키보드 자판만 두드리면, 언제든지 태평양 너머 대한민국의 모든 영주권, 시민권자의 계좌 정보를 알 수 있습니다. 따라서 이에 해당되는 분들은 매년 소득 고 및 해외 금융 계좌 보고를 놓치지 말고 꼭 해야 합니다. 
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
							기준소득<span class="hdMB-inb">&nbsp;금액</span>
						</li>
						<li onclick="onClickNavList('section3')" class="-notcurrent">
							기한 및 벌금
						</li>
						<li onclick="onClickNavList('section4')" class="-notcurrent">
							필요<span class="hdMB-inb">&nbsp;</span>서류
						</li>
						<li onclick="onClickNavList('section5')" class="-notcurrent">
							절세<span class="hdMB-inb">&nbsp;</span>방법
						</li>
					
					</ol>
				</nav>
				<!-- /팔로잉 네비게이션 -->
			</div>

			<div class="col-sm-9">
				<!-- 섹션1 -->
				<section class="guidePart" id="section1">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">누가 세금보고를 해야 할까요? <br><span class="hdMB">한국에 거주해도 소득을 보고해야 할까요?</span></h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">세금 보고 대상</h3>
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
					<h4 class="guideSubTitle noPad -top">
						시민권/영주권/183일 거주테스트 통과자
					</h4>
					<p class="desc noPad -top">
						미국 내외의 시민권/영주권자만 세금 신고를 하느냐? 그렇지 않습니다. 미 세법에서 정하는 183일 거주 테스트를 만족하는 자라면 세금 보고 의무가 있습니다. 이를 세법상 거주자(Resident Alien)라고 분류합니다.
					</p>
					<p class="desc">
						미국 세금 보고 대상자를 "US Taxable Resident"라고 합니다. 기준은 시민권, 영주권자 뿐만 아니라 183일 거주 테스트(Substantial Presence Test)를 만족한 분들도 세법상 거주자(Resident Alien)로서 미국 세금 보고의 의무가 발생합니다. 183일 거주 테스트는 다음 두 가지를 동시에 만족해야 합니다. 첫째, 세금 보고 연도에 31일 이상 미국에 체류해야 하며, 둘째, 세금 보고 연도를 포함한 최근 3년간의 미국 체류일수가 183일을 초과해야 합니다. 
						183일 계산법은 아래와 같습니다.
					</p>
					<div class="greyBox">
						<p class="greyBoxText">
							세금보고 연도 거주일수 + <br class="hdPC">
							직전연도 거주일수의 1/3 + <br class="hdPC">
							전전연도 거주일수의 1/6 > 183일
						</p>
					</div>
					<p class="desc">
						하지만 183일 거주 테스트를 만족하더라도 F, J, M, Q 비자 등으로 미국에 체류 중인 유학생이라면 햇수로 5년 동안, 그리고 인턴, 연구원이나 방문교수 등 J, Q 비자 소지자라면 햇수로 2년간 세법상 비거주자(Nonresident Alien)로 보고할 수 있습니다.
					</p>
					<p class="desc">
						세법상 거주자와 달리 세법상 비거주자는 미국에서 발생한 소득만 보고를 하고, 세금 보고 양식(1040NR)이 다르며, 해외 금융 계좌 등의 보고 의무가 없습니다.
					</p>


					<h4 class="guideSubTitle strong-red">
						한국에서 살고 있고, 한국 국세청에 이미 소득세를 내고 있는데, 미국 국세청(IRS)에도 이중으로 소득세를 내야 하나요?
					</h4>
					<p class="desc noPad -top">
						네, 한국에 소득세를 납부했더라도 미국에 세금보고를 해야 합니다.
						한국에서 발생한 소득이 미국 세법에 따라 세금이 다시 계산되고, 각종 소득 공제 및 세액 공제를 적용하고 남는 차액이 있다면 세금을 내셔야 할 수도 있습니다. 대다수의 분들은 각종 공제 혜택을 통해서 세금액이 없습니다. 
						하지만 이런 공제 혜택을 적용받아서 세금이 없다는 것을 보고해야 합니다. 이 보고를 하지 않으면, 공제가 적용되지 않아 납부하지 않아도 되는 세금을 내셔야 할 수도 있습니다. 
					</p>
				</section>
				<!-- /섹션1 -->

				<!-- 섹션2 -->
				<section class="guidePart" id="section2">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							세금 보고의 유형과<br class="hdPC">
							기준 소득 금액은?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">미국 세금 보고 의무 : 결혼상태(Marital Status)에 따른 세금 보고 기준 소득</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-6 infoItem -higher">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage1.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									싱글 신고<br>
									<span class="itemDesc">
										Single Filing Status<br>
										소득이 $12,550 이상일 경우
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem -higher">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage2.png" alt="미국세금신고 기준소득 세대주신고"/>
								<span>
									세대주 신고<br>
									<span class="itemDesc">
										Head of Household Filing Status
										소득이 $18,800 이상일 경우<br>
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem -higher">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage3.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									부부합산 신고<br>
									<span class="itemDesc">
										Married Filing Jointly Status<br>
										$25,100 이상일 경우
									</span>
								</span>
							</li>
							<li class="col-sm-6 infoItem -higher">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage4.png" alt="미국세금신고 기준소득 부부개별 신고"/>
								<span>
									부부개별 신고<br>
									<span class="itemDesc">
										Married Filing Separately<br>
										소득이 $5 이상일 경우	
									</span>
								</span>
							</li>
							<li class="col-sm-12 infoItem -higher">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage5.png" alt="미국세금신고 기준소득 미망인 신고"/>
								<span>
									미망인 신고<br>
									<span class="itemDesc">
										Qualifying Widow/er with<br class="hdPC">
										Dependent Child Filing Status<br>
										$24,800 이상일 경우
									</span>
								</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						미국 세법은 한국과 달리, 가족 관계의 여건에 따라 다섯 가지 신고 유형으로 분류됩니다. 그리고 신고 유형마다 표준 공제 금액(Standard Deduction)에 차이가 있으며, 매년 물가 변동에 따라 표준 공제 금액은 달라질 수 있습니다.  일반적으로 이 표준 공제 금액보다 총소득 금액이 크다면 세금 보고 대상으로 보시면 됩니다. 하지만 부부 개별 신고의 경우, 소득이 $5 이상이면 세금 보고의 의무가 발생합니다. (세금 보고는 일반적으로 소득이 <a href="https://www.irs.gov/" style="text-decoration: underline">IRS</a>가 제시한 표준공제금액(Standard Deduction)보다 많으면 의무적으로 해야 합니다. 매년 물가 변동에 따라 표준공제금액이 다르며, 나이와 세금 보고 유형별로 그 금액에 차이가 있습니다.)
					</p>
					<p class="desc">
						이 밖에도 미국에서 자영업 소득이 $400 이상이라면 세금 보고를 해야 하며, 본인이 부양가족(Dependent)으로서 다른 사람의 세금 보고서에 보고 되는데 $1,100 이상의 소득이 있는 경우에도 세금 보고의 의무가 있습니다.
						또한 근로소득에서 원천징수된 세금을 환급받거나 환급 가능한 세액공제 혜택을 받기 위해서 세금보고 의무가 없어도 보고를 하는 경우도 있습니다. 
					</p>
					<img class="hdPC insertImg" src="/img/insert-img1-tax-by-income-MB.png" alt="미국 세금 보고 기준 소득 금액">
					<img class="hdMB insertImg" src="/img/insert-img1-tax-by-income-PC.jpg" alt="미국 세금 보고 기준 소득 금액">
					<h4 class="guideSubTitle">
						싱글 신고(Single Filing Status)
					</h4>
					<p class="desc noPad -top">
						과세 연도 마지막 날 12월 31일 기준, 법적으로 미혼인 사람이 해당됩니다.
					</p>
					<h4 class="guideSubTitle">
						세대주 신고(Head of Household Filing Status)
					</h4>
					<p class="desc noPad -top">
						미혼(싱글)이신 경우, 부양가족의 생활비를 절반 이상 지원하면서 6개월 이상 함께 산다면, 세대주 신고로 보고할 수 있습니다.<br>
						예외: 한국에 거주하는 분들 중에서 배우자가 미국 납세자가 아니며, 자녀가 미국 시민권/영주권자라면 세대주로 보고하여 세금 혜택을 받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						부부합산 신고(Married Filing Jointly Status)
					</h4>
					<p class="desc noPad -top">
						12월 31일 기준으로 기혼인 부부가 각 소득을 합산하여 세금 보고를 할 수 있습니다.
						이 신고 유형이 가장 낮은 세율과 많은 세제 혜택이 있습니다.
					</p>
					<h4 class="guideSubTitle">
						부부개별 신고(Married Filing Separately)
					</h4>
					<p class="desc noPad -top">
						12월 31일 기준으로 기혼인 부부가 특별한 이유로 따로 세금 보고를 할 때 선택하는 신고 유형입니다. 한국에 계시는 분들 중에 배우자가 미국 납세자가 아니며, 미국 시민권/영주권 자녀가 없다면 부부 개별로 세금보고를 하시면 됩니다. 부부 개별 보고의 경우, 소득이 $5 이상이면 세금보고의 의무가 있습니다.
					</p>
					<h4 class="guideSubTitle">
						미망인 신고(Qualifying Widow/er with Dependent Child Filing Status)
					</h4>
					<p class="desc noPad -top">
						배우자 사망 이후, 자녀와 함께 산다면 2년까지 미망인 신고 유형으로 세금 보고를 할 수 있습니다. 미망인 신고는 부부합산 신고와 동일한 세율과 세제 혜택이 있습니다. F, J, M, Q 비자 등으로 미국에 체류 중인 유학생이라면 햇수로 5년 동안, 그리고 인턴, 연구원이나 방문교수 등 J, Q 비자 소지자라면 햇수로 2년간 세법상 비거주자(Nonresident Alien)로 보고할 수 있습니다.
					</p>
					<p id="tempQ1Point"></p>
				</section>
				<!-- /섹션2 -->
				
				<!-- 섹션3 -->
				<section class="guidePart" id="section3">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							세금 보고를<br class="hdPC">
							언제까지 해야 할까요?<br>
							안했을 때 벌금은?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">세금보고 제출 시기 및 벌금</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-deadline1.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									매년 4월 15일 : <br class="hdMB">세금 보고 정규 마감일 
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-deadline2.png" alt="미국세금신고 기준소득 세대주신고"/>
								<span>
									해외에서 거주중인 미국 시민권/영주권자는 <br class="hdMB">
									자동으로 2개월이 연장되어 6월15일까지 보고 가능
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-deadline3.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									양식 4868을 제출하여 연장 신청을 하면 <br class="hdMB">
									10월15일까지 세금보고 기한 연장
								</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						언제까지 세금을 보고하고 납부해야 할까요?
					</h4>
					<p class="desc noPad -top">
						매년 4월 15일이 세금 보고 정규 마감일입니다. 특히 해외에서 거주 중인 미국 시민권/영주권자는 자동으로 2개월이 연장되어 6월 15일까지 보고할 수 있습니다. 그리고 양식 4868을 제출하여 연장 신청을 하면 10월 15일까지 <a href="https://righttaxservice.com/%eb%af%b8%ea%b5%ad%ec%84%b8%ea%b8%88%eb%b3%b4%ea%b3%a0-%eb%a6%ac%ed%8e%80%eb%93%9c%ea%b8%b0%ea%b0%84/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)" style="text-decoration: underline">세금보고 기한</a>이 연장됩니다.<br>
						만약 제시간에 세금보고 및 세금 납부를 못했을 경우에는 아래와 같은 벌금이 있습니다.
					</p>
					<img class="hdMB insertImg" src="/img/insert-img4-tax-due-date-PC.jpg" alt="">
					<h4 class="guideSubTitle">
						신고 지연 벌금 (Late filing penalty)
					</h4>
					<p class="desc noPad -top">
						보고 기한 내에 보고를 하지 못하면 매달 납부 세금의 5%씩 신고 지연 벌금 (Late filing penalty)이 부과되니 주의해야 합니다. 이 벌금은 최대 25%까지 부과됩니다.
					</p>
					<h4 class="guideSubTitle">
						납부 지연 벌금 (Late Payment Penalty)
					</h4>
					<p class="desc noPad -top">
						내야 할 세금이 계산된다면, 보고 기한 연장 여부에 상관없이 정규 마감일인 4월 15일까지(해외 거주자는 6월 15일까지) 예상 세금을 납부해야 하며, 이 이후에 납부되는 금액의 0.5%가 매달 납부 지연 벌금(Late payment penalty)으로 누적 계산됩니다.
					</p>
					<h4 class="guideSubTitle">
						이자 (Interest)
					</h4>
					<p class="desc noPad -top">
						정규 마감일(4월 15일)까지 납부되지 않은 세금이 있다면, 연 5%의 이자가 부과됩니다. 이 이자는 해외 거주자도 예외 없이 4월 15일을 기준으로 계산됩니다.
					</p>
				</section>
				<!-- /섹션3 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap" id="sectionMark">
					<div class="markTitleImg">
						<h2 class="markTitleText">미국 세금 보고<br> 어떻게 해야 할까?</h2>
					</div>
					<p class="desc">
						한국은 국세청의 홈택스 웹사이트를 통해서 간단하고 쉽게 세금 보고 (연말정산)를 합니다. 이에 비해 미국은 납세자가 모든 자료를 직접 준비하고 계산을 해야 하기 때문에 복잡하고, 처음 하시는 분들에게는 많이 낯선 것이 사실입니다. 본인이 직접 하다가 세제 혜택을 잘 몰라서 회계사 비용보다도 훨씬 많은 세금 또는 벌금을 내시는 경우도 많습니다. 
					</p>
					<p class="desc">
						그래서 많은 미국인들이 실수나 누락하는 부분을 막기 위해 대부분 세무사나 회계사에게 맡깁니다. 그리고 남에게 맡기다 보니 보고가 제대로 되는지 잘 모르고 그냥 넘어가는 경우도 있습니다. 남에게 맡기더라도 내 보고가 제대로 되고 있는지, 혜택은 충분히 제대로 받고 있는지를 알기 위해서 꼭 아셔야 할 내용을 정리해드립니다.
					</p>
					<img class="hdPC insertImg" src="/img/insert-img2-tax-advice-MB.jpg" alt="미국 세금 보고 도움이 필요하신가요?">
					<img class="hdMB insertImg" src="/img/insert-img2-tax-advice-PC.jpg" alt="미국 세금 보고 도움이 필요하신가요?">
				</section>
				<!-- 마크 코멘트 -->

				<!-- 섹션4 -->
				<section class="guidePart" id="section4">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							어떤 소득을<br class="hdPC">
							미국에 보고해야 할까?<br>
							필요한 서류는?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">미국세금 보고 대상 소득</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income1.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									급여소득 
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income2.png" alt="미국세금신고 기준소득 세대주신고"/>
								<span>
									이자 / 배당 소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income3.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									자영업 소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income4.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									양도소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income5.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									임대소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income6.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									로얄티 소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income7.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									농업소득
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income8.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									도박, 복권 등 기타 소득
								</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						급여소득
					</h4>
					<p class="desc noPad -top">
						매달 받으시는 월급 등의 소득액 월급 등의 소득액을 1040에 보고합니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							•	필요 서류: <br class="hdPC">
							근로소득 원천징수 영수증
						</p>
					</div>
					<h4 class="guideSubTitle">
						이자/ 배당 소득
					</h4>
					<p class="desc noPad -top">
						금융기관이나 보유 주식 등에서 발생한 이자 및 배당소득을 Schedule B에 보고하며, 한국에서의 과세/비과세 상품 모두 미국 세금 보고 대상입니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							•	필요 서류: <br class="hdPC">
							이자∙배당소득 원천징수영수증
						</p>
					</div>
					<h4 class="guideSubTitle">
						​자영업 소득
					</h4>
					<p class="desc noPad -top">
						사업이나 프리랜서에서 발생한 소득 및 비용 내역을 Schedule C에 보고합니다. 이때 사회보장세(Social Security tax)와 의료보험세(Medicare tax)의 명분으로 자영업 세금(Self-Employment Tax)을 내야 하는데 이 세금은 자영업 소득의 15.3%입니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							•	필요 서류: <br class="hdPC">
							손익계산서, 종합소득세 신고서
						</p>
					</div>
					<h4 class="guideSubTitle">
					<a href="https://righttaxservice.com/%eb%af%b8%ea%b5%ad%ec%96%91%eb%8f%84%ec%86%8c%eb%93%9d%ec%84%b8/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">양도소득</a>
					</h4>
					<p class="desc noPad -top">
						부동산 및 동산 등의 보유 자산을 처분하는 과정에서 발생한 차익과 손실을 Schedule D에 보고합니다. 이때, 한국에서 상장 주식 양도 소득 등 비과세에 해당하는 것도 미국에는 과세대상으로서 보고해야 합니다.
					</p>
					<p class="desc">
						1년 미만 보유에서 발생한 소득과 손실을 단기양도소득/손실(Short-term Capital Gain/ Loss)이라고 하며, 1년 이상은 장기 양도소득/손실(Long-term Capital Gain/Loss)이라고 합니다.  
					</p>
					<div class="tableWrap">
						<table class="sectionTable">
							<thead>
								<tr>
									<th> </th>
									<th>single</th>
									<th>Married Filing Jointly<br>Qualifying Widow</th>
									<th>Married Filing Separately</th>
									<th>Head of Household</th>
								</tr>
							</head>
							<tbody>
								<tr>
									<td>10%</td><td>$0 to $9,700</td><td>$0 to $19,400</td><td>$0 to $9,700</td><td>$0 to $13,850</td>
								</tr>
								<tr>
									<td>12%</td><td>$9,701 to $39,475</td><td>$19,401 to $78,950</td><td>$9,701 to $39,475</td><td>$13,851 to $52,850</td>
								</tr>
								<tr>
									<td>22%</td><td>$39,476 to $84,200</td><td>$78,951 to $168,400</td><td>$39,476 to $84,200</td><td>$52,851 to $84,200</td>
								</tr>
								<tr>
									<td>24%</td><td>$84,201 to $160,725</td><td>$168,401 to $321,450</td><td>$84,201 to $160,725</td><td>$84,201 to $160,700</td>
								</tr>
								<tr>
									<td>32%</td><td>$160,726 to $204,100</td><td>$321,451 to $408,200</td><td>$160,726 to $204,100</td><td>$160,701 to $204,100</td>
								</tr>
								<tr>
									<td>35%</td><td>$204,101 to $510,300</td><td>$408,201 to $612,350</td><td>$204,101 to $306,175</td><td>$204,101 to $510,300</td>
								</tr>
								<tr>
									<td>37%</td><td>$510,301 or more</td><td>$612,351 or more</td><td>$306,176 or more</td><td>$510,301 or more</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<p class="desc">
						이에 비해 단기양도소득은 위의 일반 세율표(Income tax brackets)를 따르는데, 싱글 신고 기준, $9,700 이하일 때 10%의 세율이, $510,301 이상이면 37%까지 올라갑니다. 
						양도손실은 다른 양도소득과 합산하여 보고할 수 있고, 즉 소득 금액에서 손실금을 뺀 금액이 과세대상이 됩니다. 양도 손실은 다 사용할 때까지 다음 세금 보고로 이월할 수 있습니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							•	필요 서류: <br class="hdPC">
							주식실현손익내역서, 양도소득과세표준 신고 및 납부계산서 
						</p>
					</div>
					<h4 class="guideSubTitle">
						​임대소득
					</h4>
					<p class="desc noPad -top">
						부동산/동산의 임대에서 발생한 소득을 Schedule E에 보고합니다. 한국 및 해외에서 발생한 임대 소득이 그 대상이며, 부가가치세, 관리 비용, 수선비, 감가상각비 등의 비용을 보고하고 순수익에 대해 세금을 계산합니다.
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							•	필요 서류: <br class="hdPC">
							임대 손익계산서, 종합소득세 신고서 
						</p>
					</div>
					<h4 class="guideSubTitle">
						​로얄티 소득
					</h4>
					<p class="desc noPad -top">
						지적 재산권이나 무형자산에 관해 받은 로열티가 있다면 Schedule E에 보고합니다.
					</p>
					<h4 class="guideSubTitle">
						​농업소득
					</h4>
					<p class="desc noPad -top">
						농사를 지어서 얻은 소득을 Schedule E에 보고합니다.
					</p>
					<h4 class="guideSubTitle">
						​도박, 복권 등 기타 소득
					</h4>
					<p class="desc noPad -top">
						카지노 등의 도박 소득과 복권 당첨 등의 기타 소득을 양식 1040에 보고합니다.
					</p> 
					<p class="desc">
						* 참고로 각종 서류들은 <a href="http://www.hometax.go.kr" style="text-decoration: underline">국세청 홈택스(www.hometax.go.kr)</a>에서 다운받으실 수 있습니다. 
					</p>
					<h4 class="guideSubTitle">
						​미국 세금 보고 양식
					</h4>
					<img class="insertImg -form" src="/img/tax-Form-1040-1.jpg" alt="US-tax-1040-form1" >
					<img class="insertImg -form" src="/img/tax-Form-1040-2.jpg" alt="US-tax-1040-form2">
					<p class="desc">
						* Tax year 2019 (2020) 개인 소득세 보고 양식 1040
					</p>
					<p class="desc noPad -top">						
						세금 보고 양식에는 각각 번호가 붙여져있는데, 가장 기본적인 개인 세금보고 양식은 1040입니다. 비거주자는 양식 1040NR, 잘못된 보고를 수정할 때는 양식1040X에 작성합니다. 
						여기에 개인의 소득에 따라서 Schedule A(항목별공제), Schedule B(이자/배당소득), Schedule E(임대 소득 양식),  Schedule C(자영업 소득 양식), Schedule D(양도소득 양식) 등 각종 양식이 추가됩니다. 
					</p>
				</section>
				<!-- /섹션4 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap" id="section5">
					<div class="markTitleImg">
						<h2 class="markTitleText">세금을 줄일 수 있는<br>2가지 방법</h2>
					</div>
					<p class="desc">
						미국 세금을 줄이는 세제 혜택에는 크게 소득 공제와 세금 공제가 있습니다. 소득 공제는 Deduction이라 하여, 세율을 곱하기 전의 소득 금액을 줄이는 것을 말하며, 세액 공제는 Credit이라 하여, 계산된 세금을 줄이는 역할을 합니다. 세금은 납세 소득에 세율이 곱해져서 계산되기 때문에 대체적으로 세액 공제가 훨씬 큰 절세 효과를 줍니다.
					</p>
					<p class="desc">
						고객분들 중에 수정 보고를 의뢰하시는 경우가 있는데, 이미 세금 납부가 완료되었을지라도 수정 보고를 통해 세금을 최대한 많이 공제를 받기 위함입니다. 그리고 수정 보고를 통해 적게는 몇 천 불부터 많게는 몇 만 불까지 환급을 받으신 분들도 계셨습니다.  미국에서는 납세자가 세제 혜택에 대한 정보를 제대로 알고 있는지에 따라 혜택을 얼마나 받을 수 있을지 결정됩니다. 따라서 대다수의 미국인들이 좋은 회계사에게 세금 보고를 맡겨서 최대한의 세제 혜택을 받는 것이 절약하는 방법이라고 여깁니다. 
					</p>
					<img class="hdPC insertImg" src="/img/insert-img3-tax-deduction-MB.jpg" alt="미국 세금 보고 도움이 필요하신가요?">
					<img class="hdMB insertImg" src="/img/insert-img3-tax-deduction-PC.jpg" alt="미국 세금 보고 도움이 필요하신가요?">
				</section>
				<!-- 마크 코멘트 -->

				<!-- 섹션5 -->
				<section class="guidePart">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							1. 소득 공제<br class="hdPC">
							(Tax Deduction)
						</h2>
					</div>
					<div class="guideTitleWrap">
						<h3 class="guideTitle">조정 전 소득 공제<br class="hdPC">(Above the line deduction)</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<p class="desc">
						소득 공제(Tax Deduction)에는 조정 전 소득 공제(Above the line deduction), 표준공제(Standard deduction), 항목별 공제(Itemized deduction) 등 3가지가 있습니다. 
						그중에서 조정 전 소득 공제는 다른 말로 우선 공제라 하여, 총소득금(Gross income)에서 가장 먼저 몇 가지 항목에 대해 공제받을 수 있습니다. 우선 공제 항목은 다음 6가지입니다.
					</p>
					<h4 class="guideSubTitle">
						교육자의 비용:
					</h4>
					<p class="desc noPad -top">
						납세자가 교육자(유치원부터 고등학교 교사, 상담교사, 교장, 연 900시간 이상 근무한 보조교사. 단, 대학교수 제외)로서 학생들을 위한 교육비를 본인이 지출했을 경우 $250까지 공제받을 수 있으며, 부부가 모두 교육자라면 $500까지 소득 공제를 받게 됩니다.
					</p>
					<h4 class="guideSubTitle">
						연금계좌(Traditional IRA) 납입금:
					</h4>
					<p class="desc noPad -top">
						개인 은퇴연금 (Traditional IRA) 계좌에 납입한 금액을 공제받을 수 있습니다. 납입금 전액을 공제받는 것이 아니라 계좌 종류에 따라 다른 공제 한도액이 있습니다. 1년에 $6,000까지, 50세 이상일 때는 $7,000까지 공제받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						이사 비용:
					</h4>
					<p class="desc noPad -top">
						이사 비용은 본래 새 직장 때문에 이사를 해야 하는 경우 1년 이내에 하되, 전 주거지와 전 직장 사이의 거리가 새 주거지와 새 직장 간의 거리보다 50마일 이상이 되어야 하는 조건이 있었습니다. 하지만 트럼프 세제 개혁으로 2018년부터는 이사 비용 공제 대상이 US 군인들로 제한되었습니다.
					</p>
					<h4 class="guideSubTitle">
						건강저축계좌 (Health Saving Account):
					</h4>
					<p class="desc noPad -top">
						미국에는 건강저축계좌 (Health Savings Account)라는 것이 있어, 의료비로 사용되는 목적으로만 인출할 수 있습니다. 이 계좌에 저축하면 소득 공제를 받을 수 있는데, 가족 보험 계좌는 $7,000까지, 개인 보험 계좌는 $3,500까지 납입금액을 공제받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						학자금 대출 이자 납부금:
					</h4>
					<p class="desc noPad -top">
						학자금 대출에서 발생한 이자 납부금을 공제받을 수 있는데, 최대 $2,500까지 공제받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						영업세:
					</h4>
					<p class="desc noPad -top">
						자영업자가 내는 자영업세(Self-employment tax)의 절반을 공제받을 수 있습니다.
					</p>
					<p class="desc">
						이렇게 조정 전 소득 공제를 통해 줄어든 소득 금액을 조정 후 총소득(Adjusted Gross Income, AGI)이라고 합니다. 조정 후 총소득에서 추가로 소득 공제를 한 번 더 적용받을 수 있는데요, 표준공제(Standard deduction)나 항목별 공제(Itemized deduction) 중 한 가지를 선택하여 과세 대상 소득을 줄일 수 있습니다. 
					</p>

					<div class="guideTitleWrap">
						<h3 class="guideTitle">표준공제<br class="hdPC">(Standard Deduction)</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<p class="desc">
						납세자는 세금 신고 유형에 따라 표준 공제액을 적용해 과세 대상 소득을 줄일 수 있습니다. 표준공제는 세금 신고 유형에 따라 공제액이 다릅니다. 표준공제 금액은 매년 조금씩 변동이 되며, 아래의 표(회계연도 2020년 기준)와 같이 싱글/부부 개별 신고는 $12,550, 부부합산/미망인 신고는 $25,100, 세대주 신고는 $18,800입니다. 
					</p>
					<div class="tableWrap">
						<table class="sectionTable">
							<thead>
								<tr>
									<th style="width:70%">세금신고유형</th><th style="width:30%">표준공제금액</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>single</td><td>12,550</td>
								</tr>
								<tr>
									<td>Married Filing Separately & Qualifying Widow(er)</td><td>25,100</td>
								</tr>
								<tr>
									<td>Married Filing Separately</td><td>12,550</td>
								</tr>
								<tr>
									<td>Head of Household</td><td>18,800</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="guideTitleWrap">
						<h3 class="guideTitle">항목별 공제<br class="hdPC">(Itemized Deduction)</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<p class="desc">
						항목별 공제는 표준공제와 동시 사용할 수 없습니다. 두 가지 중에서 본인에게 유리한 공제를 선택하시면 됩니다. 항목별 공제에는 여러 가지가 있으며 그중 대표적인 몇 개 항목을 안내드립니다.
					</p>
					<h4 class="guideSubTitle">
						의료비 공제:
					</h4>
					<p class="desc noPad -top">
						의료보험료, 진료비, 치료비 등의 비용이 조정 후 총소득(Adjusted Gross Income)의 7.5%를 초과하는 만큼 공제받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						주택 융자 이자 공제:
					</h4>
					<p class="desc noPad -top">
						주택 융자에서 발생한 은행 이자를 공제받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						납부 세금 공제:
					</h4>
					<p class="desc noPad -top">
						주정부, 로컬 정부 등에 낸 세금을 $10,000까지 공제받을 수 있고, 한국에 낸 세금도 인정이 되지만 그럴 경우에는 해외 세액 공제/해외 근로소득 공제를 받을 수 없어 주로 사용하지는 않습니다.
					</p>
					<h4 class="guideSubTitle">
						기부금 공제:
					</h4>
					<p class="desc noPad -top">
						종교, 자선, 교육단체 등 미국 IRS에 등록된 비영리법인(501c3 기관)에 등록된 곳에 기부한 금액을 조정 후 총소득의 50%까지 공제받을 수 있습니다.
					</p>
					
				</section>
				<!-- /섹션5 -->

				<!-- 섹션6 -->
				<section class="guidePart">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							2. 세금공제<br class="hdPC">
							(Tax Credit)
						</h2>
					</div>
					<div class="guideTitleWrap">
						<h3 class="guideTitle">환급받을 수 있는 것<br class="hdPC">(Refundable Tax Credit)</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<p class="desc">
						세금 공제에는 환급받을 수 있는 것(Refundable Tax Credit)과 환급 불가능한 것(Nonrefundable Tax Credit) 두 가지가 있습니다. 환급받을 수 있는 세금 공제는 납부할 세금을 $0으로 줄인 뒤에도 남은 금액을 환급받을 수 있습니다. 반면에 환급 불가능한 세금 공제는 세금을 $0으로 만들어줄 뿐, 공제하고 남은 금액은 그대로 소멸되거나 다음 연도로 이월(carry over)이 됩니다. 
					</p>
					<h4 class="guideSubTitle">
						자녀 세금 크레딧(Child Tax Credit) 
					</h4>
					<p class="desc noPad -top">
						자녀 세금 크레딧은 17세 미만의 자녀 면 당 최대 $2,000을 공제받을 수 있습니다. 모든 자녀가 해당되는 것이 아니라 사회보장번호(Social Security Number)가 있는 미국 시민권/영주권자나 세법상 거주자이어야 합니다.
					</p>
					<p class="desc">
						자녀 크레딧을 적용하고 남은 금액이 있다면, 최대 $1,400까지 환급을 받을 수 있는 Refundable credit입니다. 한국에 계신 미국 영주권/시민권자도 이 자녀 크레딧의 혜택을 받을 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						근로소득 세금 크레딧(Earned Income Tax Credit)
					</h4>
					<p class="desc noPad -top">
						근로소득 세금 크레딧은 저소득 근로자를 위한 세제 혜택이며 환급이 가능합니다. 근로소득이 있어야 신청할 수 있으며, 부부 개별 신고와 세법상 비거주자, 투자소득이 $3,650(회계연도 2020년 기준) 이상이면 적용이 불가능합니다. 그리고 소득 및 일정 조건을 갖춘 부양가족의 숫자에 따라 공제금액에 차이가 있습니다.
					</p>
					<p class="desc">
						아래 표는 부양가족 자녀 수에 따라서 근로소득 세금 크레딧을 받을 수 있는 조정 후 총소득(AGI) 한도입니다.  회계연도 2020년 기준, 최대 크레딧은 세 자녀 이상일 때 $6,660, 두 자녀일 때 $5,920, 한 자녀일 때 $538입니다. 하지만, 이 세금 공제는 아쉽게도 해외에 거주하고 계신 분들은 받을 수 없습니다.
					</p>
					<div class="tableWrap">
						<table class="sectionTable">
							<thead>
								<tr>
									<th>부양가족 자녀수 및 세금신고유형</th><th>Zero</th><th>One</th><th>Two</th><th>Three or more</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Single, Head of Household or Widowed</td><td>$15,820</td><td>$41,756</td><td>$47,440</td><td>$50,954</td>
								</tr>
								<tr>
									<td>Married Filing Separately</td><td>$12,400</td><td>$47,646</td><td>$53,330</td><td>$56,844</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4 class="guideSubTitle">
						미국 기회 크레딧(American Opportunity Credit)
					</h4>
					<p class="desc noPad -top">
						한 자녀 당 첫 4년간의 대학 교육비를 공제받을 수 있습니다. 대학교 이상의 고등 교육 기관의 학비, 교재비 등의 교육 비용에 대해서 첫 $2,000에 대한 100% 금액과 추가 $2,000의 25%인 $500까지 세금 공제를 받을 수 있습니다.
					</p>
					<p class="desc">
						사용 후 남은 크레딧이 있다면 40%까지 환급 가능합니다. (Refundable) 요구 조건은 수정 조정 소득액(Modified Adjusted Gross Income)이 싱글 신고자는 $90,000 이하, 부부합산 신고자는 $180,000 이하일 때 공제받을 수 있습니다.
					</p>
					<p class="desc">
						또한 싱글 신고자와 부부합산 신고자의 수정 조정 소득액이 각각 $80,000 – $90,000, $160,000 – $180,000의 사이에 있다면 공제액이 비례 삭감됩니다. 본인과 배우자 중 세법상 비거주자가 있다면 사용할 수 없습니다.
					</p>

					<div class="guideTitleWrap">
						<h3 class="guideTitle">환급 불가능한 것<br class="hdPC">(Nonrefundable Tax Credit)</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<h4 class="guideSubTitle">
						부양가족 크레딧(Other Dependent Credit)
					</h4>
					<p class="desc noPad -top">
						자녀 외의 부양가족에 대한 세금 공제로써 1인당 $500을 공제받을 수 있고, 환급은 안됩니다.
					</p>
					<h4 class="guideSubTitle">
						자녀/부양가족 양육비 크레딧(Child and Dependent Care Credit)
					</h4>
					<p class="desc noPad -top">
						13세 미만의 어린 자녀나 케어가 필요한 부양가족을 위해 유치원, 보육 시설 등에 발생한 경비를 공제받을 수 있습니다. 단, 납세자와 배우자 양쪽 다 소득이 있어야 하고 또는 한쪽은 구직활동을 하고 있어야 합니다. 부부 중 한쪽이 5개월 이상 풀타임 학생인 경우에도 가능합니다.
					</p>
					<p class="desc">
						크레딧에 적용할 수 있는 보육 비용은 한 자녀 $3,000까지, 두 명 이상은 $6,000까지 제한이 있고, 소득의 정도에 따라서 보육 비용의 20%에서 35%까지만 공제를 받을 수 있습니다. 환급은 불가능한 크레딧입니다.
					</p>
					<h4 class="guideSubTitle">
						평생 교육 크레딧(Lifetime Learning Credit)
					</h4>
					<p class="desc noPad -top">
						평생 교육 크레딧은 미국 기회 크레딧과 비슷한 교육비 공제 혜택이 있는데, 제한 없이 평생 사용할 수 있고, 교육 비용의 $10,000까지 20%를 공제받을 수 있습니다. 또한 학위 과정에만 제한된 미국 기회 크레딧과는 달리 좀 더 폭이 넓으며 한 코스만 수업을 들어도 신청할 수 있고, 환급은 되지 않습니다.
					</p>
					<p class="desc">
						기회 크레딧과 중복 사용할 수는 없으며 회계연도 2020년 기준, 수정 조정 소득액이 싱글 신고자는 $69,000 이상 부부합산 신고자는 $138,000 이상이면 신청할 수 없습니다.
						또한 싱글 신고자의 수정 조정 소득액이 $59,000-$69,000 범위에, 부부합산 신고는 $118,000-$138,000 사이에 있으면 비율에 따른 삭감된 크레딧을 받게 됩니다.
						미국 기회 크레딧과 마찬가지로 부부 중 세법상 비거주자가 있다면 사용할 수 없습니다.
					</p>
				</section>
				<!-- /섹션6 -->

				<!-- 섹션7 -->
				<section class="guidePart">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							3. 해외거주자를 위한 세금공제
						</h2>
					</div>
					<div class="guideTitleWrap">
						<h3 class="guideTitle">세금공제항목 3가지</h3>
						<hr class="guideTitleUnderLine">
					</div>
					<p class="desc">
						미국 세금 보고 시, 한국에 내신 세금을 미국에 또 내야 하는 것은 아닙니다. 한미 이중과세 방지협정에 의해 해외 세액 공제(Foreign Tax Credit)와 해외 근로소득 공제(Foreign Earned Income Exclusion), 해외 거주지 공제(Foreign Housing Exclusion) 등의 항목을 통해 소득액을 공제받을 수 있습니다. 이런 공제를 제대로 알고 적용하면 대부분의 경우 미국에 납부할 세금이 없으며, 어떤 분들은 오히려 환급을 받으시기도 합니다.
					</p>
					<h4 class="guideSubTitle">
						해외근로소득 공제(Foreign Earned Income Exclusion)
					</h4>
					<p class="desc noPad -top">
						해외에서 발생한 근로소득이나 자영업 소득을 회계연도 2020년 기준으로 $107,600까지 공제받을 수 있습니다.  양식 2555에 작성하며, 자격 조건을 살펴보면 주 거주지(Tax Home)가 해외이거나 연속된 12개월 중에 총 330일 이상 해외에 체류했을 경우입니다.  또한 해외 근로소득 공제는 보통 연봉이 1억 3천만원 이하인 분들에게 유리합니다. 물론 나머지 두 가지 해외 공제들을 적용하여 세금액을 비교해 본인에게 맞는 것을 선택해야 합니다.
					</p>
					<p class="desc">
						해외 근로소득 공제는 한 소득에 대해서 아래 소개할 해외 세액 공제 (Foreign Tax Credit)와 같이 사용할 수 없습니다. 그리고 한번 적용을 하면 매년 이어지고, 중간에 쓰지 않으면 자동으로 취소한 것으로 간주되며, 한번 취소하면 5년 동안 불가능합니다. 따라서 매년 앞으로 예상되는 수입까지 잘 고려하여 신중하게 생각하고, 제대로 보고하는 것이 중요합니다.
					</p>
					<h4 class="guideSubTitle">
						해외 거주지 공제(Foreign Housing Exclusion)
					</h4>
					<p class="desc noPad -top">
						해외 근로소득 공제를 적용하고 남은 금액이 있다면, 다행히도 해외 거주지 공제를 통해 공제를 받을 수 있습니다.
					</p>
					<p class="desc">
						거주지 공제는 여러분이 한국에서 거주하시며 발생한 주거 비용에 대해 공제를 받는 것으로써 렌트비, 수리비, 공과금, 보험료 등의 발생한 비용이 일정 금액을 넘으면 적용할 수 있습니다. 이것을 기본 비용이라고 하며, 해외 근로소득 공제금액의 최대값(회계연도 2020년 기준 $107,600)의 16%인 $17,216을 초과하는 만큼 공제를 받고, 한도액은 30%인 $32,280입니다.
					</p>
					<p class="desc">
						한도액은 지역마다 차이가 있는데, 서울을 예로 하면 2020년 기준으로 $53,800까지 거주지 비용으로 신청할 수 있으며, 여기에서 기본 비용인 $17,216을 뺀 $36,584 만큼 해외 거주지 공제를 받을 수 있게 됩니다.
					</p>
					<h4 class="guideSubTitle">
						해외 세액 공제(Foreign Tax Credit)
					</h4>
					<p class="desc noPad -top">
						해외에 납부한 세금을 크레딧으로 공제해 주는 것입니다. 한국에 납부한 근로소득세, 이자/배당금 소득세, 임대 소득세, 양도소득세 등 각종 소득세를 양식 1116에 작성하여 보고합니다.
					</p>
					<p class="desc">
						이때 한국의 납부세액 보다 미국 세금이 더 많아서 공제를 적용하고 남은 금액은 전년도 해외 납부세액으로 소급되어 공제받을 수 있습니다. 만약 소급하고도 공제되지 못한 금액은 10년에 걸쳐 이월하여 해외 세액 공제를 받을 수 있습니다.					</p>
					<p class="desc">
						해외 납부 세금을 항목별 공제에 적용할 수도 있지만, 세금 공제가 아닌 소득 공제이기 때문에 공제금액이 그다지 크지 않아 대부분이 해외 세액공제를 사용합니다.
					</p>
				</section>
				<!-- /섹션7 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap" id="section6">
					<div class="markTitleImg">
						<h2 class="markTitleText">
							한국의 재산도 <br class="hdPC">보고해야 할까?
							<span class="hdMB">그 밖에 보고해야 하는 것은?<span>
						</h2>
					</div>
					<p class="desc">
						소득 이외에도 해외에 보유하고 있는 자산, 외국인으로부터 받은 증여/상속, 해외에 소유하고 있는 법인 등의 정보를 미국에 보고해야 하는 의무가 있습니다. 이는 세금을 징수하기 위함이 아닌, 해외로 자산 은닉 및 탈세를 방지하기 위한 것으로 미국이 FATCA를 통하여 한국을 포함한 전 세계 국가들과 금융 정보를 교류하고 있기 때문에 점점 강화되고 있습니다. 특히, 이런 보고는 과세에 영향을 주지 않는 보지만, 불이행 시 벌금이 크게 부과되니 각별히 신경 쓰셔서 보고해야 합니다. 아래에 설명드릴 해외 정보 보고에는 각각 다양한 경우가 있으나 꼭 아셔야 할 대표적인 것들만 다루고자 합니다.
					</p>
				</section>
				<!-- 마크 코멘트 -->

				<!-- 섹션8 -->
				<section class="guidePart">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							소득 외에 보고해야 할 자산들
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">금융자산 정보성 보고 5가지</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income1.png" alt="미국세금신고 기준소득 싱글신고"/>
								<span>
									해외금융계좌보고(FBAR, Foreign Bank and Financial Accounts)
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income2.png" alt="미국세금신고 기준소득 세대주신고"/>
								<span>
									해외 자산 보고(FATCA, Foreign Account Tax Compliance Act)
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income6.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									해외 법인 보고
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income4.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									해외 파트너쉽(동업) 보고
								</span>
							</li>
							<li class="col-sm-6 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-income3.png" alt="미국세금신고 기준소득 부부합산 신고"/>
								<span>
									외국인으로부터의 증여 보고
								</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						해외금융계좌보고(FBAR, Foreign Bank and Financial Accounts)
					</h4>
					<p class="desc noPad -top">
						미국 영주권자/시민권자, 세법상의 거주자는 한 해의 모든 해외 금융 계좌의 연중 최고 잔액들의 합이 $10,000 넘게 보유한 적이 있다면, 그 구체적인 내용을 세금보고 양식 1040과는 별개로 FinCen Form 114를 통해 미 재무부에 전자 보고를 합니다. <a href="https://righttaxservice.com/fbar-%ed%95%b4%ec%99%b8%ea%b8%88%ec%9c%b5%ea%b3%84%ec%a2%8c%eb%b3%b4%ea%b3%a0/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)" style="text-decoration: underline">FBAR 보고</a>를 비고의성으로 하지 않았다면 최대 벌금이 $12,912이며, 고의성 누락으로 판단이 되면 그 벌금이 미보고 계좌 금액의 50%까지 부과될 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 자산 보고(FATCA, Foreign Account Tax Compliance Act)
					</h4>
					<p class="desc noPad -top">
					<a href="https://righttaxservice.com/fatca-%ed%95%b4%ec%99%b8%ea%b8%88%ec%9c%b5%ec%9e%90%ec%82%b0%eb%b3%b4%ea%b3%a0/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)" style="text-decoration: underline">FATCA</a>는 해외 자산 신고로서 세금보고를 할 때 포함하여 보고하는데, FBAR와는 달리 금융계좌뿐만이 아니라 소유한 법인의 지분도 보고하는 등 보고 대상의 범위가 넓어 FBAR 대상자가 아니지만 FATCA 대상자가 될 수도 있습니다. 또한, 거주 지역 및 결혼 상태에 따라 보고 기준 금액이 다른데, 한국의 계신 분들 중에 싱글/부부개별 신고자는 개인 자산이 연말 기준 20만불 이상, 연중 기준 30만불 이상일 때, 부부합산 신고자는 연말 40만불 이상, 연중 60만불 이상일 때, 양식 8938에 작성하여 1040에 첨부합니다.
					</p>
					<p class="desc">
						​FATCA 보고를 누락한 경우 벌금 $10,000 을 부과하는 편지가 발급될 수 있고, 이에 응하지 않으면 30일 경과 마다 $10,000씩 추가되고 최고 $50,000의 벌금 폭탄을 맞을 수 있습니다. 또한 고의적인 미신고로 판단이 되면 형사처벌까지 받을 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 법인 보고
					</h4>
					<p class="desc noPad -top">
						해외 법인의 지분을 10% 이상 소유하게 되거나, 처분으로 인해 10% 보다 낮아졌을 때, 또한 미국 납세자들의 지분율 총합이 50%를 넘을 때 등 해외법인의 정보를 보고해야 합니다. 해외법인의 기본 정보와 손익계산서, 대차 대조표 등 재무제표를 양식 5471에 작성하여 1040과 함께 제출합니다.
					</p>
					<p class="desc">
						만약 보고를 하지 않으면 건당 $10,000의 벌금이 부과될 수 있으며, 90일 경과 후에도 미납부시 매월 $10,000이 추가되어 $50,000까지 벌금이 부과될 수 있습니다.
					</p>
					<h4 class="guideSubTitle">
						해외 파트너쉽(동업) 보고
					</h4>
					<p class="desc noPad -top">
						해외에서 동업을 하는 업체의 지분율이 50%를 초과하거나, 미국 납세자들이 50% 이상 지분을 소유하고 있는 업체에 10% 이상의 지분을 소유한다면 위의 해외 법인 보고와 마찬가지로 동업의 정보와 손익계산서, 대차 대조표 등의 재무제표를 양식 8865에 보고해야 합니다.
					</p>
					<p class="desc">
						보고를 하지 않을 시 건당 $10,000의 벌금이 부과되고 90일 이내에 납부하지 않으면 매월 $10,000이 추가되어 벌금이 최대 $50,000까지 될 수도 있습니다.
					</p>
					<h4 class="guideSubTitle">
						외국인으로부터의 증여 보고
					</h4>
					<p class="desc noPad -top">
						일반적으로 미국은 한국과는 달리 증여를 주는 사람이 증여세 보고를 합니다. 하지만 외국인으로부터 10만 불 이상의 증여를 받았을 경우에는, 양식 3520에 작성하여 보고합니다.
					</p>
					<p class="desc">
						기준은 한 사람으로부터 증여받은 것으로 하며, 만약 서로 다른 두 명으로부터 총 10만 불을 받은 경우 보고할 의무가 없습니다. 하지만 증여한 두 사람이 가족 관계라면 한 사람이 증여한 것으로 간주되어 보고 대상이 됩니다. 양식 3520은 개인소득 세금 보고와는 별도로 제출합니다. 보고를 하지 않거나 잘못된 보고를 할 경우 증여액의 25% 의 벌금이 부과될 수 있으니 꼭 시간 내에 보고해야 합니다.
					</p>
				</section>
				<!-- /섹션8 -->	
			</div>
		</div>
	</div>

	<!-- OUTRO 섹션 -->
  <!-- <section class="lastWrap container">
		<h2 class="lastQuote ff-mj">
			<div class="lastQuoteMark">“</div>
				안심하고 맡길 수 있는<br>
				Mark Kang Tax
		</h2>
		<p class="lastDesc">
			지금까지 미국세금 보고에 대한 전반적인 내용을 짚어보았는데요. 일반적이고 대표적인 사항들에 국한된 설명을 드린 것이기 때문에 다양한 개인 상황과 조건에 따 라서 변수가 많기 때문에 꼭 자신의 상황을 전문가와 상담하시기 바랍니다. 특히, 대부분의 한인분들께서 해외 공제 혜택을 받아 미국에 내야할 세금이 없으면 보고를 안해도 된다고 잘못 알고 계시는 경우가 많은데, 왜 세금이 $0인지를 해당 보고 양식을 통해 설명해야하는 의무가 있는 것입니다. 이런 점을 잘 인지하셔서 앞으로 <a href="https://righttaxservice.com/irs-tax-filing-streamlined-procedures/" style="text-decoration: underline">미국 세금 보고</a>를 제대로 준비하시기 바랍니다.
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
