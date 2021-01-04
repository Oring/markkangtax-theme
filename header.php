<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- meta name="viewport" content="width=device-width, initial-scale=1.0" -->
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="theme-color" content="#000" />
		<meta name="google-site-verification" content="vRfCt0L_hFElL_VKzBK-fNsz8kFTECa0MUgXTfqA9ww" />

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=342">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icon/touch.png">
		<?php wp_head(); ?>
		<meta name="naver-site-verification" content="26f1bc7f60e801b1655cb074bb85ef67a2b4849f"/>
		
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-nav-ie7.css">
			<script src="<?php echo get_template_directory_uri(); ?>/js/lib/respond.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/lib/matchmedia.addListener.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/lib/html5shiv.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/lib/placeholder.min.js"></script>
			<?php /* if(is_home()){ ?>
				<script type="text/javascript">
				jQuery(document).ready(function() {
					if(confirm('현재 귀하는 최신 버전의 브라우저를 사용하고 계시지 않습니다.\n\n좀 더 나은 서비스를 이용하기 위해서\n최신 브라우저로 업그레이드 바랍니다.\n\n(Internet Explorer 최신버전을 사용하세요!)' )){
						window.open('http://windows.microsoft.com/ko-kr/internet-explorer/download-ie');
					};
				});
				</script>
			<?php } */?>
		<![endif]-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-103969162-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-103969162-1');
		</script> -->
		<!-- 리포트2.0 로그분석코드 시작 -->
		<script type="text/javascript">
			var sTime = new Date().getTime();
			(function(i,s,o,g,r,a,m){i['webObject']=g;i['webUid']=r;a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})
			(window,document,'script','//kangjuhy.weblog.cafe24.com/weblog.js?v='+sTime,'kangjuhy');
		</script>
		<!-- 리포트2.0  로그분석코드 완료 -->

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 807989355 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-807989355"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-807989355');
    </script>

    <script>
      function gtag_report_conversion(url) {
        var callback = function () {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-807989355/-jwJCMLSkM0BEOvgo4ED',
            'value': 440000.0,
            'currency': 'KRW',
            'event_callback': callback
        });
        return false;
      }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "한국에 세금을 냈는데도 미국에 세금을 내야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "기본적으로 한-미 이중 과세 방지협정에 의하여 한국에서 내신 세금만큼은 미국에 내지 않습니다. 하지만 이것이 세금 보고를 하지 않아도 되는 것을 의미하지는 않습니다. 미국 기준에 맞추어 세금을 계산한 후에, 한국에 내신 세금만큼 세액 공제를 하시는 것입니다. 이를 해외 납부 세액 공제(Foreign Tax Credit)라고 하는데 이외에도 한국에 거주하고 있을 경우, 약 10만불까지의 해외 근로 소득의 공제(Foreign Earned Income Exclusion) 및 약 3만불까지의 해외 거주 비용 공제 (Foreign Housing Exclusion) 등의 다양한 공제 방법이 있습니다. 따라서, 이를 잘 아는 전문가와 상담하여 자기에게 최적화되어 세금을 최대로 줄일 수 있는 세금 보고를 하시는 것이 중요합니다."
          }
        }, {
          "@type": "Question",
          "name": "영주권이 작년 8월에 발급되었는데, 그럼 보고 날짜 기준은 어떻게 적용되나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "미국 이민국(USCIS)에서 영주권을 승인한 날짜부터 세법상 거주자가 되어 전 세계 소득을 미국 국세청에 보고해야 하는 세금 보고의 의무가 생겨납니다. 영주권 승인 이전의 기간에 대해서는 미국 거주 의무 및 비자의 종류에 따라서 그 기간 동안의 세금 보고의 유무가 달라지니 본인의 상황에 맞는 정확한 기준을 알고 싶으시면 전문가와 상담하시기 바랍니다."
          }
        }, {
          "@type": "Question",
          "name": "부동산 임대 소득을 법인 계좌로 이체하였습니다. 법인 통장으로 돈이 갈 경우 보고 대상이 되는 건가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "부동산 임대 소득이 발생하였으면, 그 돈이 어느 통장에 입금되었는지에 관계없이 소득 보고를 해야 합니다. 이때, 법인 통장의 서명 권한을 가지고 있으면 법인 통장도 해외 금융 계좌 보고의 대상이 될 수 있으니 전문가와 상담하시기 바랍니다."
          }
        }, {
          "@type": "Question",
          "name": "현재 한국에 체류 중입니다. 한국에 체류중인데도 미국에 굳이 양도 소득세를 내야 하는 것인가요? 그리고 미정부는 기록을 어떻게 알 수 있나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "미국은 납세자의 전 세계 소득에 대해서 세금을 징수합니다. 따라서, 한국에 체류 중이시더라도 미국에 양도소득세를 내야 합니다. 미국 정부에서 매년 한국에서 금융 정보를 받으므로, 그 금융 정보를 가지고 간접적으로 알 수 있습니다."
          }
        }, {
          "@type": "Question",
          "name": "근로 소득과 이자 소득은 케이스가 다른 것인가요? 각각 별도의 개념으로 보고를 해야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text":"소득의 종류에는 근로 소득, 이자 소득, 배당 소득, 양도 소득, 임대 소득, 농업 소득 등 다양한 종류가 있습니다. 각각의 소득이 이율 및 세금 공제 혜택이 다르므로 본인의 상황에 맞게 전문가와 상담하시기 바랍니다. 예를 들어, 해외 근로 소득 같은 경우는, 일년에 약 10만불까지 소득 공제가 있으나, 이자 소득에는 그런 공제 사항이 없습니다."
          }
        }, {
          "@type": "Question",
          "name": "세금 보고 및 해외 금융 계좌 보고를 그동안 한 번도 하지 않았는데 어떤 문제가 있을 수 있나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "지금부터라도 Streamlined procedure를 통하여 그동안 미신고한 보고를 하면 문제없이 해결될 수 있으나, 앞으로 계속 안 하신다면 나중에 미국 국세청으로부터 미보고에 대한 벌금, 미납 세금, 지연 가산금이 부과될 수 있습니다. 해외 금융 계좌 보고를 하지 않았을 때의 벌금은 고의성이 없을 때 연도별 최대 1만불, 고의성이 있을 때에는 연도별로 계좌 최고 잔액의 50%까지 부과가 됩니다. 이때, 벌금이 연도별로 부과되므로, 여러 해의 벌금이 한꺼번에 부과되어 해외 금융 계좌에 보유하고 있는 재산보다도 더 큰 벌금이 부과되는 사례도 있습니다."
          }
        }, {
          "@type": "Question",
          "name": "해외 금융 계좌 보고는 누가 해야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "미국의 세법상 거주자가 미국 외의 나라에 있는 금융 계좌들에 예치된 금액의 총합이 한 해에 하루라도 1만불이 넘는다면, 소득이 없어 세금보고의 의무는 없더라도 미국 국세청에 해외 금융 계좌를 보고해야 합니다."
          }
        }, {
          "@type": "Question",
          "name": "해외 금융 계좌를 보고하면서 세금을 내야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "해외 금융 계좌는 단순히 정보만 보고하는 것으로, 계좌에 돈을 가지고 있다는 이유로 세금을 내지 않습니다. 단, 금융 계좌에서 발생되는 이자, 배당, 양도 소득 등의 금융 소득이 발생한다면 그것은 소득으로써 세금을 계산하는 데 포함됩니다."
          }
        }, {
          "@type": "Question",
          "name": "본인 계좌에 소유한 금액이 아닌 내 통장을 이용해 이동되었던 거래 내역도 포함인가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "본인이 소유하지 않았더라도 본인 계좌에 잔액의 총액이 하루라도 1만불 이상이 된다면 본인이 소유하고 있던 전 계좌가 보고 대상이 됩니다."
          }
        }, {
          "@type": "Question",
          "name": "해외 금융 계좌 보고의 소멸 시효는 얼마인가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "보고 기한으로부터 6년 후면 소멸이 됩니다. 다시 말하면, 미국 국세청에서는 최근 6년간의 해외 금융 계좌 보고에 대해 미보고자 및 잘못 보고한 사람에게 벌금을 부과하거나 감사를 할 수 있다는 것입니다."
          }
        }, {
          "@type": "Question",
          "name": "한국에 오랫동안 살고 있는데도 미국에 세금 보고 및 해외 금융 계좌를 보고해야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "미국의 세법상 거주자 조건을 만족하시면, 한국에서 거주하고 계시더라도 미국 국세청에 세금 보고 및 해외 금융 계좌 보고의 의무가 있습니다. 특히, 미국 영주권/시민권 소지자는 자동으로 미국의 세법상 거주자가 되므로, 미국에 세금 보고 및 해외 금융 계좌를 보고해야 합니다. 이를 하지 않다가 나중에 미국 국세청(IRS)에 먼저 발각이 되면 큰 액수의 벌금과 미납 세금 및 지연 가산금을 내야 할 수 있으니 조속히 전문가와 상담하시기 바랍니다."
          }
        }, {
          "@type": "Question",
          "name": "보고 대상인 금융 계좌에는 어떤 것들이 있나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "은행, 증권, 보험, 연금 계좌 등 해외 금융 기관에서 만든 금융 상품이 FBAR 보고에 포함되어야 합니다. 이때, 타인과의 공동 명의 계좌 및 서명권한이 있는 계좌도 포함됩니다. 이 밖에 해외 비상장 회사의 주식, 해외의 다른 사람에게 빌려준 돈 등은 FBAR에는 포함되지는 않지만 세금 보고 첨부 서류인 Form 8938에는 보고하여야 하므로, 보고가 누락 되지 않도록 자세한 내용은 전문가와 상담하시기 바랍니다."
          }
        }, {
          "@type": "Question",
          "name": "언제까지 보고해야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "2016년까지는 6월 30일까지가 FBAR 보고 기한이었으나 2017년부터는 세금 보고 기한까지 FBAR를 보고해야 하는 것으로 개정되었습니다. 세금 보고의 기한은 기본적으로 매년 4월 15일까지이나, 해외에 거주하고 있는 사람은 자동으로 6월 15일까지 연장이 되고, 연장 신청을 한 경우, 10월 15일까지 연장이 됩니다."
          }
        }, {
          "@type": "Question",
          "name": "한국 시차에 맞춰 상담할 수 있나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "예약 메일을 보내주시면, 고객님의 시차에 맞춰 상담해 드립니다."
          }
        }, {
          "@type": "Question",
          "name": "수임료는 어떻게 책정되나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Right Tax Service는 Streamlined Procedures전문이기 때문에 고객님의 지난 자산 자료를 모두 검토하여 수임료를 책정하게 됩니다. 고객님과의 초기 상담을 통해 예상 수임료를 알려드립니다."
          }
        }, {
          "@type": "Question",
          "name": "수임료 결제는 어떻게 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "모든 해외 금융 계좌 보고 완료 후 정산 금액과 정산 방법을 고객님의 메일로 보내드립니다."
          }
        }, {
          "@type": "Question",
          "name": "상담 완료 후 필요한 세금 신고 지난 자료와 개인 정보는 어떻게 알아봐야 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "상담 완료 후 각 고객의 사정에 따라서 필요한 서류 및 자료를 정리해서 보내드립니다. 각각의 자료를 어디서 어떻게 받는지까지 알려드립니다."
          }
        }, {
          "@type": "Question",
          "name": "환율이 그때그때 다른 것으로 아는데요, 어떤 환율이 보고 기준이 되는 것인가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "세금 보고를 통해 소득을 보고할 때는 연 평균 환율을 적용하고, 해외 금융 계좌 보고를 할 때는 연말 환율을 적용하는데, 기준은 미국 국세청에서 매년 발표하는 환율을 적용하여 보고합니다."
          }
        }, {
          "@type": "Question",
          "name": "부부 합산의 기준은 무엇인가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "매년 12월 31일 기준, 결혼하신 상태라면 세금 보고를 할 때 부부 합산 보고를 하실 수 있습니다. 참고로, 해외 금융 계좌 보고의 경우는, 개별로 하시게 됩니다."
          }
        }, {
          "@type": "Question",
          "name": "한국과 미국 두 나라에서 연금을 받고 있습니다. 이 연금의 합산도 보고 대상이 되는 건가요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "한국과 미국에서 받은 연금 소득을 모두를 보고해야 합니다."
          }
        }, {
          "@type": "Question",
          "name": "사학 연금은 보고를 하나요?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "사학 연금은 보고 대상이 아닙니다. 참고로, 국민 연금, 공무원 연금, 사학 연금, 군인 연금 등 공적 연금은 해외 자산 보고의 대상이 아닙니다."
          }
        }
      ]
    }
    </script>

	</head>
	<body <?php body_class(); ?>>

	
	<header id="header"><!-- header -->
		<div class="header_wrap"><!-- header_wrap -->
			<div class="header_wrap_inner"><!-- header_wrap_inner -->

				<div class="logo"><!-- logo -->
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/right-tax-logo.png" alt="Right Tax Service Logo" class="logo-img">
					</a>
				</div><!-- /logo -->

				<div id="nav-button"><button class="btnGNB btnGNB--htx btnn"><span>메뉴</span></button></div>
				
				<nav id="RTSnav" role="navigation"><!-- nav -->
					<?php righttax_nav(); ?>
				</nav><!-- /nav -->
			</div><!-- /header_wrap_inner -->
		</div><!-- /header_wrap -->
		<div class="nav-contact">
			<a id="NowContactBtn" href="/contact-us/" onclick="ga('send','event','Contact','go to contact','top button');">전문가 상담 예약 <span class="hdMB-inb">&gt;</span></a>
			<a id="kakaoBtn" href="https://pf.kakao.com/_LxkkfT" target="_blank" onclick="gtag('event', 'Kakao', { 'event_category': 'Contact', 'event_label': 'button' });">카카오 문의 <span class="hdMB-inb">&gt;</span></a>
			<a id="remoteTop" class="hdPC" href="#wrapper">TOP</a>
		</div>
		<!-- <a id="remoteMB" class="hdPC scrolling mb_remote" href="#wrapper">Top</a>
		<a href="#ContactProgram" class="scrolling mb_remote mb_apply hdPC">교육<br>문의</a> -->
	</header><!-- /header -->
	

	<!-- wrapper -->
	<div id="wrapper">
		<div id="skrollr-body">
