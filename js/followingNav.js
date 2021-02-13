let pos = window.scrollY;
let guideContent = null;
let followingNavigation = null;
let header = null;
let followingNavigationItem = null;

// anchor를 적용할 section의 id 값
let sectionArr = [
  {id: 'section2', element: null, y: null},
  {id: 'section1', element: null, y: null},
  {id: 'section4', element: null, y: null},
  {id: 'section3', element: null, y: null},
  {id: 'section5', element: null, y: null},
];

let mode = 'pc'; // pc, mb
let navIcon = null

function onClickNavList(id) {
  const finded = sectionArr.find(v => v.id === id);
  if (finded && finded.element) {
    const diff = Math.ceil(finded.element.getBoundingClientRect().y - header.offsetHeight);
    window.scrollBy(0, diff);
  }
}

// function followingFunc() {
//   pos = window.scrollY; 
//   if(guideContent && followingNavigation) {
//     if(pos >= guideContent.offsetTop - header.offsetHeight  && pos < guideContent.scrollHeight + 500) {
//       followingNavigation.style.top = String(pos - guideContent.offsetTop + header.offsetHeight) + 'px';
//     } else if (pos < guideContent.offsetTop) {
//       followingNavigation.style.top = 0;
//     }
//   }
// }

function followingFunc() {
  pos = window.scrollY; 
  if(guideContent && followingNavigation) {
    if(pos >= guideContent.offsetTop - header.offsetHeight  && pos < guideContent.scrollHeight + 1000) {
      followingNavigation.classList.add('-following');
      followingNavigation.style.display="block"
    } else if (pos < guideContent.offsetTop) {
      followingNavigation.classList.remove('-following');
      
    } else if (pos > guideContent.scrollHeight + 1000) {
      // followingNavigation.classList.remove('-following');
      followingNavigation.style.display="none"
    }
  }
}

function changeArrow() {
  // sectionArr의 요소의 element가 null이면 아직 페이지 로딩이 안된 것이다.
  const notLoaded = sectionArr.find(v => !v.element);
  if (notLoaded) return ;

  // y에 실시간으로 section들의 스크롤에 대한 상대적인 위치를 기록한다
  sectionArr.forEach(e => {
    e.y = e.element.getBoundingClientRect().y - header.offsetHeight;
  });

  let indexOfWatchingSection = sectionArr.length - 1;
  for (let i=0; i<sectionArr.length; i++) {
    if (sectionArr[i].y > 0) {
      // i 번째 네비게이션 list를 활성화
      indexOfWatchingSection = i > 0 ? i-1 : 0;
      break;
    }
  }
  followingNavigationItem.forEach(v=>{
    v.classList.remove('-current');
    v.classList.add('-notcurrent');
  });
  followingNavigationItem[indexOfWatchingSection].classList.add('-current');
  followingNavigationItem[indexOfWatchingSection].classList.remove('-notcurrent');
}
 
window.addEventListener('scroll', function(event) {
  followingFunc();
  changeArrow()
});


window.addEventListener('resize', function() {
  // 뷰포트넓이에 따라서 mode 정해주기
})

window.onload = function() {
  guideContent = document.getElementById('guideContent');
  followingNavigation = document.getElementById('followingNavigation');
  followingNavigationItem = document.querySelectorAll('#followingNavigation li');
  header = document.getElementById('header');
  followingFunc();

  // element를 찾은 것들을 DOM의 높이로 sort
  const completeLoad = new Promise((resolve, reject) => {
    resolve(
      sectionArr.map(section => {
        return { ...section, element: document.getElementById(section.id)}
      }).filter(v => v.element).sort((a, b) => a.element.offsetTop - b.element.offsetTop)
    );
  });
  completeLoad.then((result) => {
    sectionArr = result;
    changeArrow();
  }); // 로드됐을때, 화살표 위치 정해주기

  // 뷰포트넓이에 따라서 mode 정해주기
}
