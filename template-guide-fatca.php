<?php
/*
Template Name: 가이드 - FATCA
http://localhost/fatca-해외금융자산보고/
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

	<article>
	<!-- INTRO 섹션 -->
  <section class="topSection container">
		<div class="topTitleWrap">
			<h1 class="topTitle text-center">
				해외계좌신고법 FATCA
			</h1>
			<hr class="topTitleUnderLine">
		</div>
		
			<div class="topQuoteWrap row">
				<h2 class="topQuote text-center color-brown ff-mj">
					<div class="quoteMark -top">“</div>
						FATCA신고는 <br>
						한국 혹은 해외에 보유한 금융 자산을 <br>
						미국 국세청에 보고하는 정보성 신고입니다
					<div class="quoteMark -bottom">”</div>
				</h2>
			</div>

			<p class="topDesc">
				FBAR와 닮은 것 같지만 또 다른 보고 의무가 있는데요, 바로 <a rel="noreferrer noopener" aria-label="FATCA 해외계좌 신고법 (새탭으로 열기)" href="https://www.irs.gov/businesses/corporations/foreign-account-tax-compliance-act-fatca" target="_blank" style="text-decoration: underline;">FATCA</a>라고 하는 해외계좌 신고법(Foreign Account Tax Compliance Act)입니다. FATCA 신고는 FBAR 신고처럼 정보성 보고(Information Report)로써, 한국이나 해외에 보유하고 있는 모든 금융 계좌 정보와 자산을 미국에 보고 해야 한다는 점에서, FBAR 신고와 비슷합니다. 
			</p>
			<p class="topDesc">
				FATCA는 FBAR와 더불어 보유하고 있는 모든 해외계좌들의 정보와 연중 최고 잔액을 IRS에 보고하는데, 금융 계좌에 한해서 보고하는 FBAR와 달리 보고의 범위가 더 넓습니다. 그래서 Super FBAR라는 별칭이 있는데요. 따라서, 본인이 <a href="https://righttaxservice.com/fatca-%ed%95%b4%ec%99%b8%ea%b8%88%ec%9c%b5%ec%9e%90%ec%82%b0%eb%b3%b4%ea%b3%a0/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)" style="text-decoration: underline;">FBAR 신고 대상자</a>가 아니시더라도, FATCA 신고 대상자이실 경우도 있으니, 이 글을 끝까지 잘 읽어보시고, 본인께서 대상자이신지 판단하시면 되겠습니다
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
							기준<span class="hdMB-inb">소득&nbsp;</span>금액
						</li>
						<li onclick="onClickNavList('section3')" class="-notcurrent">
						<span class="hdMB-inb">미신고 시&nbsp;</span>벌금
						</li>
						<li onclick="onClickNavList('section4')" class="-notcurrent">
							신고항목
						</li>
						<li onclick="onClickNavList('section5')" class="-notcurrent">
							FBAR와 비교
						</li>
					</ol>
				</nav>
				<!-- /팔로잉 네비게이션 -->
			</div>

			<div class="col-sm-9">
				<!-- 섹션1 -->
				<section class="guidePart" id="section1">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">FATCA 신고를 해야 하는 <br class="hdPC">대상은 누구인가요? </h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FATCA 신고 자격 요건</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition1.png" alt="FATCA 신고 대상자 시민권소지자 아이콘"/>
								<span>시민권소지자</span>
							</li>
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition2.png" alt="FATCA 신고 대상자 영주권소지자 아이콘"/>
								<span>영주권소지자</span>
							</li>
							<li class="col-sm-4 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-condition3.png" alt="FATCA 신고 대상자 183일 거주테스트 통과자 아이콘"/>
								<span>183일 <br class="hdMB">거주테스트 통과자</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						시민권/영주권/183일 거주테스트 통과자
					</h4>
					<p class="desc noPad -top">
						FATCA는 미국 세금 보고 대상자 중에, 일정 기준 금액을 넘는 해외 계좌 및 자산을 보유하고 있다면, 
						세금 보고서와 함께 해외 자산 정보를 양식 8938에 보고합니다. 따라서 FATCA 신고의 신분 요건은, 
						세금 보고 대상자와 동일한 미국 시민권자/영주권자/<a rel="noreferrer noopener" aria-label="(opens in a new tab)183일 거주 테스트" href="https://righttaxservice.com/%eb%af%b8%ea%b5%ad-%ec%84%b8%ea%b8%88-%eb%b3%b4%ea%b3%a0-%ec%9d%98%eb%ac%b4-%eb%8c%80%ec%83%81%ec%9e%90/" target="_blank" style="text-decoration: underline;">183일 거주 테스트</a>를 통과한 세법상 거주자입니다. 
					</p>
					<p class="desc">
						하지만 만약 FATCA를 보고해야 하는 자산 기준액을 넘어서 보고 대상자에 해당하지만, IRS에 신고할 소득이 없거나 소득 금액이 일정액 미만이어서 소득세 신고 의무가 없다면 FATCA 보고를 할 필요는 없습니다.
					</p>
				</section>
				<!-- /섹션1 -->
				
				<!-- 섹션2 -->				
				<section class="guidePart" id="section2">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							FATCA 보고 기준은<br class="hdPC">
							무엇인가요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FATCA 신고 소득 기준</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage2.png" alt="FATCA 기준 거주지 아이콘"/>
								<span>거주지: 1년에 35일 미국에 체류했는지 여부</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/guides/tax-by-marriage3.png" alt="FATCA 기준 결혼 여부 아이콘"/>
								<span>결혼 여부: 싱글, 부부개별, 부부합산</span>
							</li>
						</ul>
					</section>
					<h4 class="guideSubTitle">
						거주지와 결혼 여부에 따라 다른 세금 신고 유형
					</h4>
					<p class="desc noPad -top">
						FATCA 대상 기준 총자산금액을 살펴보면, 거주지와 결혼 여부에 따른 세금 신고 유형에 따라서 한도액이 다릅니다.
						미국에 거주하는 미국 납세 의무자가 싱글(Single Status)로 세금 보고를 할 경우, 해외 금융자산의 총액이 과세 연도 중에 한 번이라도 $75,000을 초과했거나 연말 기준으로 해외 금융자산 총액이 $50,000을 초과하면 FATCA 대상이 됩니다.
					</p>
					<p class="desc">
						그리고 부부 합산 신고(Married Filing Jointly Status)로 세금 보고를 할 경우, 해외 금융자산의 총액이 과세 연도 중 한 번이라도 $150,000을 초과했거나 연말 기준으로 $100,000을 초과하면 FATCA 대상자입니다.
						반면, 해외에 거주하는 미국 납세 의무자는 싱글 신고일 경우, 해외 금융자산 총액이 연중 하루라도 자산 총액이 $300,000을 초과했거나 연말 기준으로 $200,000을 초과하면 보고 대상입니다.
						그리고 해외에 거주하며 부부합산 신고로 세금 보고를 한다면, 금융자산 총액이 과세 연도에 하루라도 $600,000을 초과하거나 연말 기준으로 $400,000을 초과한 경우에 FATCA 대상자입니다.					</p>
					<div class="tableWrap">
						<table class="sectionTable">
							<thead>
								<tr>
									<th> </th>
									<th> </th>
									<th>해외거주(1년에 35일 이하 미국 체류)</th>
									<th>미국거주(1년에 35일 이상 미국 체류)</th>
								</tr>
							</head>
							<tbody>
								<tr>
									<td rowspan="2">싱글 또는 부부개별신고</td><td>연중최고잔액</td><td>$300,000</td><td>$75,000</td>
								</tr>
								<tr>
									<td>연말잔액</td><td>$200,000</td><td>$50,000</td>
							</tr>
							<tr>
								<td class="tfoot" rowspan="2">부부합산신고</td><td>연중최고잔액</td><td>$600,000</td><td>$150,000</td>
							</tr>
							<tr>
								<td>연말잔액</td><td>$400,000</td><td>$100,000</td>
							</tr>
						</tbody>
					</table>
					<div>
					<h4 class="guideSubTitle">
						FATCA 보고 예외
					</h4>
					<p class="desc noPad -top">
						만약 해외 금융자산을 아래와 같이 다른 양식에 보고할 경우에는 굳이 FATCA 양식 8938에 중복으로 작성할 필요는 없습니다.
						<ul class="guideDescList">
							<li>양식 3520이나 3520-A에 보고된 신탁(trust)과 해외에서 받은 상속(foreign gift)</li>
							<li>양식 5471에 보고된 해외 법인</li>
							<li>양식 8621에 보고된 해외 투자 회사 지분</li>
						</ul>
					</p>
					<p id="tempQ1Point"></p>
				</section>
				<!-- /섹션2 -->
						
				<!-- 섹션3 -->
				<section class="guidePart" id="section3">
							<div class="guideAskWrap">
								<h2 class="guideAsk text-center">
									FATCA를 보고하지 않을 경우<br class="hdPC">
									벌금은 얼마인가요?
								</h2>
							</div>
							<section class="iconsWrap">
								<h3 class="guideTitle">미신고 시 벌금</h3>
								<hr class="guideTitleUnderLine">
								<ul class="row infoList">
									<li class="col-sm-12 infoItem">
										<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-8.png" alt="FATCA 미보고 벌금 아이콘"/>
										<span>
											최고 $10,000 
										</span>
									</li>
								</ul>
							</section>
							<p class="desc">
								FBAR 신고와 마찬가지로, FATCA  보고 역시 정보성 신고(Information Report) 이기에, 따로 세금이 부과되지 않지만, 신고를 이행하지 않을 시 벌금이 최고 $10,000 이 부과될 수 있습니다. IRS가 먼저 미보고를 발견하여 통지를 보냈음에도 따르지 않을 시에는 추가로 최대 $50,000의 벌금 및 누락한 신고 대상 자산에 대하여 40%의 벌금이 부과됩니다. 단, 미보고에 대한 타당한 사유가 있으면 벌금이 부과되지 않습니다.
								FATCA의 공소시효는 세금보고의 공소시효를 따릅니다. 즉, 경미한 소득 및 세금이 누락되었을 때는 3년, $5000을 초과한 소득이 누락되었다면 6년까지 공소시효가 늘어납니다.
							</p>
				</section>
				<!-- /섹션3 -->
						
				<!-- 섹션4 -->
				<section class="guidePart" id="section4">
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
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-3.png" alt="FATCA 해외금융계좌 아이콘"/>
								<span>
									해외(미국 제외) 모든 금융 계좌
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-5.png" alt="FATCA 저축/투자신탁/보험 아이콘"/>
								<span>
									저축성 기능의 보장성 보험, 저축/투자신탁의 기능성 보험 
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-1.png" alt="FATCA 해외 뮤추얼 펀드 아이콘"/>
								<span>
									해외 뮤추얼 펀드
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-2.png" alt="FATCA 해외파트너십 아이콘"/>
								<span>
									10% 이하의 해외 비상장회사의 소유 지분, 해외파트너십의 소유 지분 
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-4.png" alt="FATCA 외국 헤지펀드 아이콘"/>
								<span>
									외국 헤지펀드, 사모펀드
								</span>
							</li>
						</ul>
					</section>
					<p class="desc noPad -top">
						FATCA 신고 대상에 속하는 해외 자산은, FBAR 처럼 해외 금융 계좌의 정보와 연중 최고 잔액, 그리고  금융기관 정보 등을 보고 해야 합니다. 그뿐만 아니라 FBAR에는 보고하지 않으나 FATCA에는 보고 해야 하는 해외 자산이 있습니다. 본인이 어느 해외법인의 지분(10% 이하)을 소유했다면 해당 지분의 가액을 법인 정보와 함께 보고해야 합니다. 그리고 해외 파트너십의 지분, 해외 헤지펀드나 사모펀드 등도 FATCA 신고 대상에 속하는 자산입니다. 
					</p>
					<p class="desc">
					<a rel="noreferrer noopener" aria-label="양식 8938 (새탭으로 열기)" href="https://www.irs.gov/pub/irs-pdf/f8938.pdf" target="_blank" style="text-decoration: underline;">양식 8938</a>에 각 계좌 및 소유 지분에 관한 정보 및 금액을 기입하며, 그에 따라 필요한 내용은 다음과 같습니다.<br>
					</p>
					<div class="greyBox -dense">
						<p class="greyBoxText">
							계좌 유형, 계좌 번호, 과세 연도에 계좌 개설/폐쇄 여부, 과세 연도의 계좌 최고 잔액, 주식/지분 등의 보유 내용, 적용 환율, 금융 기관의 이름 및 주소 등 
						</p>
					</div>
				</section>
				<!-- /섹션 -->
				
				<!-- 섹션5 -->
				<section class="guidePart" id="section5">
					<div class="guideAskWrap">
						<h2 class="guideAsk text-center">
							FBAR와 FATCA 보고의 차이점은 무엇인가요?
						</h2>
					</div>
					<section class="iconsWrap">
						<h3 class="guideTitle">FBAR와 FATCA 보고 대상 자산 비교</h3>
						<hr class="guideTitleUnderLine">
						<ul class="row infoList">
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-7.png" alt="FBAR 아이콘"/>
								<span>
									FBAR: 해외금융계좌에 한함
								</span>
							</li>
							<li class="col-sm-12 infoItem">
								<img class="guidesIcon" src="/img/icons/fbar/icons-fbar-accounts-11.png" alt="FATCA 아이콘"/>
								<span>
									FATCA: 해외금융계좌와 더불어 금융 계좌에 포함되지 않은 비상장 회사의 지분까지 보고 대상
								</span>
							</li>
						</ul>
					</section>
					<p class="desc">
						흔히 FATCA와 FBAR를 헷갈려 하시는 분들이 많으신데, 둘 다 해외 금융자산을 보고하지만 아래와 같이 그 범위가 다릅니다.
						간단히 말해 해외 금융 계좌에 한해 FBAR 보고를 하는 반면, FATCA는 해외 금융 계좌와 더불어 금융 계좌에 포함되지 않은 비상장 회사의 지분까지 보고 대상입니다.
						단, 여전히 해외에 소유한 임대 주택이나 개인 주택 등의 부동산은 보고 대상이 아닙니다.
					</p>

					<h4 class="guideSubTitle">
						FBAR와 FATCA의 보고 대상의 차이
					</h4>
					<div class="tableWrap">
						<table class="sectionTable">
							<thead>
								<tr>
									<th>해외금융자산 종류</th><th>FATCA</th><th>FBAR</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>해외금융계좌</td><td>YES</td><td>YES</td></tr>
								<tr><td>미국금융기관의 해외지점 계좌</td><td>NO</td><td>YES</td></tr>
								<tr><td>해외금융기관의 미국지점 계좌</td><td>NO</td><td>NO</td></tr>
								<tr><td>공동서명 권한이 있는 계좌</td><td>지분이 있을 때만 보고</td><td>YES</td></tr>
								<tr><td>해외 증권관련계좌에 보관되지 않은 해외주식(비상장회사), 증권</td><td>YES</td><td>NO</td></tr>
								<tr><td>해외 주식회사나 파트너십의 지분</td><td>YES</td><td>NO</td></tr>
								<tr><td>50% 초과 지분을 소유한 기업의 금융 계좌</td><td>NO</td><td>YES (50%이상의 지분 있다면)</td></tr>
								<tr><td>해외 뮤추얼 펀드</td><td>YES</td><td>YES</td></tr>
								<tr><td>해외 주식, 증권의 미국내 뮤추얼 펀드 투자</td><td>NO</td><td>NO</td></tr>
								<tr><td>현금화할 수 있는저축성/투자신탁 보험, 연금</td><td>YES</td><td>YES</td></tr>
								<tr><td>외국 헤지펀드, 사모펀드</td><td>YES</td><td>NO</td></tr>
								<tr><td>해외 보유 부동산</td><td>NO</td><td>NO</td></tr>
								<tr><td>해외 현금, 수표, 귀금속</td><td>NO</td><td>NO</td></tr>
								<tr><td>개인소장 골동품, 미술품</td><td>NO</td><td>NO</td></tr>
								<tr><td>해외정부 제공 연금관련 프로그램</td><td>NO</td><td>NO</td></tr>
							</tbody>
						</table>
					</div>
				</section>
				<!-- /섹션5 -->

				<!-- 마크 코멘트 -->
				<section class="markAdviceWrap">
					<div class="markTitleImg">
						<h2 class="markTitleText">FATCA, <br>철저한 준비와 보고는 필수입니다</h2>
					</div>
					<p class="desc">
						이제는 금융 정보도 세계화가 되어, 한미 FATCA 협정 이후에, 각국의 납세자의 금융 정보를 서로의 금융기관에 정기적으로 보고를 하게 되었습니다. 그렇기에, 혹시나 본인께서 보고를 제때 하지 않아서 오게 되는 추후의 불이익(벌금과 미국 체납자라는 낙인, 그리고 미국 입국 후 출국 시 출국 금지 제한 등등)들을 겪지 않게 하기 위해서라도 보고는 꼭 제때에 하시길 바랍니다. 
						과거의 누락된 FATCA는 IRS의 자진신고 프로그램인 <a href="https://righttaxservice.com/irs-tax-filing-streamlined-procedures/" style="text-decoration: underline;">Streamlined Procedures 프로그램</a>을 통해 소득보고 3년과 FBAR 보고 6년을 제출하여 청산할 수 있습니다.
					</p>
					<p class="desc">
						그 동안 FBAR/FATCA 보고 관련 수많은 고객분들과 상담을 해보았지만, 실제로 미국 세법은 한국 세법과 달리 훨씬 더 복잡하고, 게다가 매년 새로운 세법이 추가가 되고, 소멸되는 것도 많기에, 고객분들 스스로 보고를 준비하시다가 결국은 벽에 막혀, 포기를 하시고, 저에게 찾아오시는 분들을 많이 보았습니다. 특히 미국에서는 돈을 아껴보려고 스스로 보고를 준비했다가, 보고가 잘못되어 더 큰돈이 들어가게 되는 복잡한 경우도 흔하게 일어납니다. 
					</p>
					<p class="desc">
						그래서 미국 관련 세금 보고만큼은 반드시 제대로 된 전문가와의 상의를 통해 해결 하시는 것을 권해드립니다. 
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
		<a href="/rs-tax-filing-service"><img class="ctaBanner -left" src="/img/banner/ctaBanner1.jpg" alt="미국세금보고 안내 페이지로 이동"></a>
		<a href="/us-certified-public-accountant/mark-kang"><img class="ctaBanner -right" src="/img/banner/ctaBanner2.jpg" alt="Mark Kang 소개 페이지로 이동"></a>
	</section>
	<!-- /하단배너 -->

<?php get_footer(); ?>
