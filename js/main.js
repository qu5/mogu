window.onscroll = function(){
var sllTop = document.documentElement.scrollTop||document.body.scrollTop;
if(sllTop>240){
  $('#get-top').css('display','block')
}else{
  $('#get-top').css('display','none')
}
}
$('#get-top').click(function(){ 
  $('body,html').animate({
    scrollTop: 0
  }, 300);//Back to top, smaller faster
})
//User agent
var deviceVal  = browserRedirect();
function browserRedirect() {
  var sUserAgent = navigator.userAgent.toLowerCase();
  var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
  var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
  var bIsMidp = sUserAgent.match(/midp/i) == "midp";
  var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
  var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
  var bIsAndroid = sUserAgent.match(/android/i) == "android";
  var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
  var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
  if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
    return 'phone';
  } else {
    return 'pc';
  }
}
  $('.nav-btn').on('click', function () {
    $('.nav').toggleClass('showNav');
    $(this).toggleClass('animated2');
  });
 
var thisSearch = 'https://www.google.com/search?q=';

$('#txt').keydown(function(ev){
    if(ev.keyCode==13){
        window.open(thisSearch + $('#txt').val())
        $('#box ul').html('')
    }
})
$(function(){
  var search = {
    data: [{
      name: 'Google',
      url: 'https://www.google.com/search?q='
    }, {
      name: 'Baidu',
      url: 'https://www.baidu.com/s?wd='
    }, {
      name: 'Bing',
      url: 'https://cn.bing.com/search?q='
    }, {
      name: 'GitHub',
      url: 'https://github.com/search?q='
    }, {
      name: 'BiliBili',
      url: 'https://search.bilibili.com/all?keyword='
    }]
  }
  for(var i = 0; i < search.data.length; i++){
    var addList = '<li>' + search.data[i].name + '</li>'
    $('.search-engine-list').append(addList);
  }
  $('.search-engine-name, .search-engine').hover(function() {
    $('.search-engine').css('display', 'block')
  }, function() {
    $('.search-engine').css('display', 'none')
  });
  $('.search-engine-list li').click(function() {
    var _index = $(this).index();
    var searchNameBtn = document.getElementById("search-engine-name");
    searchNameBtn.innerHTML = search.data[_index].name;
    thisSearch = search.data[_index].url;
    $('.search-engine').css('display', 'none')
  })
})
$("#search-btn").click(function(){
  var textValue = $('#txt').val();
  if(textValue != ''){
    window.open(thisSearch + textValue)
  }
});
