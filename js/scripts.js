$(document).ready(function () {
  // 피해사례 보기
  $(".btn-open-ex").click(function () {
    $(".ex-wrap").slideDown();
  });

  // Nav Button
  var toggles = $(".btnGNB");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  }

  TaxTargetAlgorithm(); // 세금대상자인지 판단 알고리즘
  toggleMobileMenu(); // Mobile Nav 메인메뉴 클릭 시 펼쳐짐
  navScroll_checker();
  rts_form.init(); // 폼 Object

  // 탑버튼
  /*
		$(window).scroll(function() {	
			pos = $(window).scrollTop();
			if (pos > 300) {$('#remoteTop').fadeIn().addClass('on');}
				else {$('#remoteTop').fadeOut().removeClass('on');};
		});
	*/
  // 스크롤러 실행
  skrollrCheck();
  RTSAccordian(".faq-inner .faq-item>h3");

  $(window).resize(function () {
    skrollrCheck();
  });
});

function skrollrCheck() {
  if (!$("html").hasClass("touch")) {
    setTimeout(function () {
      setSkrollr($(".sub-sect-top"), [
        ["top", "background-position: 50% 0px;"],
        ["top-bottom", "background-position: 50% 200px;"],
      ]);
      setSkrollr($(".sub-sect-inner"), [
        ["anchor-target", ".sub-sect-top"],
        ["start", "opacity:1;transform:translate(0px, 0px);"],
        ["270-start", "opacity:0;transform:translate(0px, 160px);"],
      ]);
      var s = skrollr.init({
        forceHeight: false,
        smoothScrolling: false,
        mobileDeceleration: 0.004,
      });
    }, 100);
  }
}
var setSkrollr = function ($el, data) {
  for (var i = 0, l = data.length; i < l; i++) {
    var d = data[i],
      px = d[0];
    css = d[1];
    $el.attr("data-" + px, css);
  }
};

// Mobile Nav 메인메뉴 클릭 시 펼쳐짐
function toggleMobileMenu() {
  if ($(window).width() >= 992) return false;
  var firstMenu = $("#RTSnav > ul > li.menu-item-has-children > a");
  var Menu_list = $("#RTSnav > ul > li");

  firstMenu.click(function (e) {
    e.preventDefault();
    var li_clicked = $(this).parent();
    if (li_clicked.hasClass("on") === true) {
      Menu_list.removeClass("on");
    } else {
      Menu_list.removeClass("on");
      li_clicked.addClass("on");
    }
  });
}

// 모바일 햄버거 toggle
function toggleHandler(toggle) {
  $(toggle).bind("click", function (e) {
    e.preventDefault();
    if ($(this).hasClass("is-active") === true) {
      // alert('off');
      rts_Mnav.off();
    } else {
      // alert('on');
      rts_Mnav.on();
    }
  });
}
// 모바일 네이게이션 ON - OFF
var rts_Mnav = {
  on: function () {
    $(".btnGNB").addClass("is-active");
    $("body").addClass("menuon");
    $(".btnn").addClass("mb");
  },
  off: function () {
    $(".btnGNB").removeClass("is-active");
    $("body").removeClass("menuon");
    $(".btnn").removeClass("mb");
  },
};

function RTSAccordian(ele) {
  var $item = jQuery(ele);
  if ($item.length == 0) return false;
  $item.click(function () {
    jQuery(this).siblings().slideDown();
    // if(!jQuery(this).parent().hasClass('active')){
    // 	$item.parent().removeClass('active');
    // 	jQuery(this).parent().addClass('active');
    // }else{
    // 	jQuery(this).parent().removeClass('active');
    // }
  });
}

function navScroll_checker() {
  var rtsNav = $("#header");
  var pos = $(window).scrollTop();

  var Init = {
    _start: function () {
      Event._activeHandler(pos);
    },
  };

  var Action = {
    _active: function () {
      rtsNav.addClass("header_scroll");
    },
    _deactive: function () {
      rtsNav.removeClass("header_scroll");
    },
  }; //Event End

  var Event = {
    _activeHandler: function (index) {
      if (index == 0) {
        Action._deactive();
      } else {
        Action._active();
      }
    },
  };

  $(window).scroll(function () {
    pos = $(window).scrollTop();
    Event._activeHandler(pos);
  }); //end scroll
  Init._start();
}

function TaxTargetAlgorithm() {
  var _box = $("#algoBOX");
  var _ask = _box.find(".yn-q");
  var _btnBox = _box.find(".yn-inner");
  var _Y = _box.find(".btn_yes");
  var _N = _box.find(".btn_no");
  var step = "step";
  var _currentStep,
    _nextStep = _box.find(".step.start");
  var i;

  var Init = {
    _start: function () {
      Event._activeHandler();
    },
  };

  var Action = {
    _Next: function (_x) {
      if (_nextStep.length > 0) {
        this._goNext();
      } else {
        this._getResult(_x);
      }
    },
    _NextYes: function () {
      _currentStep = _nextStep;
      step = step + "-yes";
      _nextStep = _box.find("." + step);
      if (_currentStep.data("target")) {
        i = true;
      } else {
        i = false;
      }
      this._Next(i);
    },
    _NextNo: function () {
      _currentStep = _nextStep;
      step = step + "-no";
      _nextStep = _box.find("." + step);
      if (_currentStep.data("target")) {
        i = false;
      } else {
        i = true;
      }
      this._Next(i);
    },
    _getResult: function (_x) {
      if (_x) {
        _nextStep = _box.find(".result-yes");
        // console.log('세금보고 대상');
      } else {
        _nextStep = _box.find(".result-no");
        // console.log('세금보고 대상 아님');
      }
      this._goNext();
      _btnBox.hide();
    },
    _goNext: function () {
      _currentStep.removeClass("in");
      setTimeout(function () {
        _currentStep.removeClass("active");
        _nextStep.addClass("active");
      }, 150);
      setTimeout(function () {
        _nextStep.addClass("in");
      }, 200);
    },
  }; //Event End

  var Event = {
    _activeHandler: function () {
      _Y.click(function () {
        Action._NextYes();
      });
      _N.click(function () {
        Action._NextNo();
      });
    },
  };

  Init._start();
}

// 전화번호 입력시 자동 하이픈(-) 붙이기
var chk_tel = {
  exe: function (str, field) {
    var str;
    str = this.checkDigit(str);
    len = str.length;
    if (len == 8) {
      if (str.substring(0, 2) == 02) {
        // this.error_numbr(str, field);
      } else {
        field.value = this.phone_format(1, str);
      }
    } else if (len == 9) {
      if (str.substring(0, 2) == 02) {
        field.value = this.phone_format(2, str);
      } else {
        // this.error_numbr(str, field);
      }
    } else if (len == 10) {
      if (str.substring(0, 2) == 02) {
        field.value = this.phone_format(2, str);
      } else {
        field.value = this.phone_format(3, str);
      }
    } else if (len == 11) {
      if (str.substring(0, 2) == 02) {
        // this.error_numbr(str, field);
      } else {
        field.value = this.phone_format(3, str);
      }
    } else {
      // this.error_numbr(str, field);
    }
  },
  checkDigit: function (num) {
    var Digit = "1234567890";
    var string = num;
    var len = string.length;
    var retVal = "";
    for (i = 0; i < len; i++) {
      if (Digit.indexOf(string.substring(i, i + 1)) >= 0) {
        retVal = retVal + string.substring(i, i + 1);
      }
    }
    return retVal;
  },
  phone_format: function (type, num) {
    if (type == 1) {
      return num.replace(/([0-9]{4})([0-9]{4})/, "$1-$2");
    } else if (type == 2) {
      return num.replace(/([0-9]{2})([0-9]+)([0-9]{4})/, "$1-$2-$3");
    } else {
      return num.replace(/(^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/, "$1-$2-$3");
    }
  },
  error_numbr: function (str, field) {
    alert("정상적인 번호가 아닙니다.");
    field.value = "";
    field.focus();
    return;
  },
};

// 폼
var rts_form = {
  _errorNm: "has-error", // error 클래스 이름
  _errorMsg: ".error_mg", // error 안내메시지 요소
  _blur: ".blur_chk", // blur 요소
  _parents: ".contact_row", // 부모 요소
  _agree: ".contact_agree", // agreement 요소
  _SubmitBtn: ".js-submit-btn", //
  _flag: 1, // focus flag
  _firstEl: "", // focus input 요소

  init: function () {
    $(rts_form._SubmitBtn).click(function (e) {
      e.preventDefault();
      var form = $(this).attr("data-form");
      if (rts_form.validate_RequiredField($("form#" + form))) {
        gtag_report_conversion(); // Send event to Google. (Jungwoo)
        $("form#" + form).submit();
      }
    });

    $(rts_form._parents + " " + rts_form._blur).blur(function () {
      rts_form.value_checker(this);
    });

    $(".v_agr").click(function () {
      $(this).parents(".agr_con").find(".agr_box").slideDown();
    });
  },

  validate_RequiredField: function (el) {
    // console.log(el);
    var agree = el.find(rts_form._agree);
    if (agree.length > 0 && !agree.is(":checked")) {
      el.find(rts_form._errorMsg)
        .show()
        .html("개인정보 수집 동의를 확인해주세요.");
      alert("개인정보 수집 동의를 확인해주세요.");
      agree.focus();
      return false;
    }
    rts_form._flag = 1;
    el.find(".required_field").each(function () {
      rts_form.value_checker($(this));
    });
    if (el.find(rts_form._parents).hasClass(rts_form._errorNm)) {
      el.find(rts_form._errorMsg)
        .show()
        .html("입력하신 정보를 다시 확인해주세요.");
      if (rts_form._firstEl) {
        rts_form._firstEl.focus();
        rts_form._flag = 1;
      }
      return false;
    } else {
      return true;
    }
  },

  // input value 값 check 함수
  value_checker: function (elem) {
    if (!(elem instanceof jQuery)) var elem = $(elem); // check jQuery object
    var _p = elem.parents(rts_form._parents);
    var _v = elem.val();
    if (!_v) {
      this.result_validation(false, _p);
      if (rts_form._flag) {
        rts_form._firstEl = elem;
        rts_form._flag = 0;
      }
    } else {
      var e = elem.attr("data-validate");
      if (e == "name") {
        this.validate_name(_v, _p);
      } else if (e == "phone") {
        this.validate_phone(_v, _p);
      } else if (e == "email") {
        this.validate_email(_v, _p);
      } else {
        this.result_validation(true, _p);
      }
    }
  },
  // maxlength 속성 안되는 input type='number'일 경우
  maxLengthCheck: function (object) {
    if (object.value.length > object.maxLength) {
      object.value = object.value.slice(0, object.maxLength);
    }
  },

  // Name Validation
  validate_name: function (_v, _p) {
    var Regx_sp = /[~!@\#$%<>^&*\()\-=+_\’]/gi; // 특수문자
    var Regx_kr = /^[가-힝]{2,6}$/; // 한글, 2~6자 가능. ㄱㄴㄷ~, 띄어쓰기 불가능
    var Regx_en = /^[a-zA-Z\s]+$/; // 영문, 띄어쓰기 가능
    var isValid = false;
    if (!Regx_sp.test(_v)) {
      // 특수문자
      if (!_v.match(/\d/g)) {
        // 숫자 (글로벌 flag 'g'를 쓸 경우 .match 사용)
        if (Regx_kr.test(_v) || Regx_en.test(_v)) {
          isValid = true;
        }
      }
    }
    this.result_validation(isValid, _p);
  },

  // Phone Validation
  validate_phone: function (_v, _p) {
    var isValid = false;
    var phone_num = chk_tel.checkDigit(_v);
    var len = phone_num.length;
    var idx = phone_num.substring(0, 1);
    if (len >= 8 && len < 14 && idx <= 1) {
      isValid = true;
    }
    this.result_validation(isValid, _p);
  },

  // Email Validation
  validate_email: function (_v, _p) {
    var stringRegx = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var isValid = false;
    if (stringRegx.test(_v)) {
      // 이메일
      isValid = true;
    }
    this.result_validation(isValid, _p);
  },

  result_validation: function (isValid, _p) {
    if (isValid) {
      _p.removeClass(rts_form._errorNm);
    } else {
      _p.addClass(rts_form._errorNm);
      if (rts_form._flag) {
        rts_form._firstEl = _p.find(".required_field");
        rts_form._flag = 0;
      }
    }
  },
}; // END hrd_form
