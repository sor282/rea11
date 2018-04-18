




 //check browser
var isie=(/msie/i).test(navigator.userAgent); //ie
var isie6=(/msie 6/i).test(navigator.userAgent); //ie 6
var isie7=(/msie 7/i).test(navigator.userAgent); //ie 7
var isie8=(/msie 8/i).test(navigator.userAgent); //ie 8
var isie9=(/msie 9/i).test(navigator.userAgent); //ie 9
var isie10=(/msie 10/i).test(navigator.userAgent); //ie 9
var isfirefox=(/firefox/i).test(navigator.userAgent); //firefox
var isapple=(/applewebkit/i).test(navigator.userAgent); //safari,chrome
var isopera=(/opera/i).test(navigator.userAgent); //opera
var isios=(/(ipod|iphone|ipad)/i).test(navigator.userAgent);//ios
var isipad=(/(ipad)/i).test(navigator.userAgent);//ipad
var isandroid=(/android/i).test(navigator.userAgent);//android
var device;
//if(isie7 || isie8 || isie9){ isie6=false;}
//if(isie9){ isie=false;}
//if(isapple || isios || isipad || isandroid){}else{}


function totalHeight (){  
var totalHeight = 0;
var userAgent = navigator.userAgent.toLowerCase();
 
var browser = {
    msie    : /msie/.test( userAgent ) && !/opera/.test( userAgent ),
    safari  : /webkit/.test( userAgent ),
    firefox : /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent ),
    opera   : /opera/.test( userAgent )
};   
 

  if( browser.msie ){ //IE
     var scrollHeight = document.documentElement.scrollHeight;
     var browserHeight = document.documentElement.clientHeight;
     totalHeight = scrollHeight < browserHeight ? browserHeight : scrollHeight;
  } else if ( browser.safari ){ //Chrome || Safari
     totalHeight = document.body.scrollHeight;
  } else if ( browser.firefox ){ // Firefox || NS
     var bodyHeight = document.body.clientHeight;
     totalHeight = window.innerHeight < bodyHeight ? bodyHeight : window.innerHeight;
   } else if ( browser.opera ){ // Opera
     var bodyHeight = document.body.clientHeight;
     totalHeight = window.innerHeight < bodyHeight ? bodyHeight : window.innerHeight;
   } else { 
     //alert("지원하지 않는 브라우져!!");
   }
   return(totalHeight);
  //alert(totalHeight); 
}

function setCookie(name,value,expiredays) { 
    var today = new Date();
    today.setDate(today.getDate()+expiredays);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toGMTString() + ";";
}

function getCookie( name ) {
   var nameOfCookie = name + "="; 
   var x = 0; 
   while ( x <= document.cookie.length ) 
   { 
           var y = (x+nameOfCookie.length); 
           if ( document.cookie.substring( x, y ) == nameOfCookie ) { 
                   if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 ) 
                           endOfCookie = document.cookie.length; 
                   return unescape( document.cookie.substring( y, endOfCookie ) ); 
           } 
           x = document.cookie.indexOf( " ", x ) + 1; 
           if ( x == 0 ) 
                   break; 
   } 
   return ""; 
}

 



function setCookie01(name, value, expireDate)
{
    var date_expire = new Date();
    date_expire.setDate(date_expire.getDate()+expireDate);

    var cookieStr = name + "=" + escape(value) +
                    "; domain=" + escape(".auri.oktomato.net") +
                              "; path=/"  +
                    ((expireDate == null ) ? "" : ("; expires=" + date_expire.toGMTString())) ;

   // alert(cookieStr);

    document.cookie = cookieStr;
}


function fnClickCheck(obj,num) {
  //var loginNum = num

  //var loginString = [,"검색어입력","Password"]
  //var compareString = loginString[num]
  var compareString = num
  if(obj.value == compareString){
  obj.value = "";
  }else{
    if(obj.value == ""){
    obj.value = compareString;
    }else{

    }
  }
}


function noticeClose(flg){
   if (flg == 0){
        $("#popup").slideUp('slow');
    }else if (flg == 1){
        if ($('#chk1Day').attr('checked')){
            setCookie01('notice0','Y',1) ;
        }
        $("#popup").slideUp('slow');

    }
}

;(function($) {
    'use strict';
    
    $.srSmoothscroll = function(options) {
    
    var self = $.extend({
        step: 55,
        speed: 400,
        ease: "swing"
    }, options || {});
    
    // private fields & init
    var win = $(window),
        doc = $(document),
        top = 0,
        step = self.step,
        speed = self.speed,
        viewport = win.height(),
        body = (navigator.userAgent.indexOf('AppleWebKit') !== -1) ? $('body') : $('html'),
        wheel = false;

    // events
    $('body').mousewheel(function(event, delta) {

        wheel = true;

        if (delta < 0) // down
            top = (top+viewport) >= doc.height() ? top : top+=step;

        else // up
            top = top <= 0 ? 0 : top-=step;

        body.stop().animate({scrollTop: top}, speed, self.ease, function () {
            wheel = false;
        });

        return false;
    });

    win
    .on('resize', function (e) {
        viewport = win.height();
    })
    .on('scroll', function (e) {
        if (!wheel)
            top = win.scrollTop();
    });
    
    };
})(jQuery);


//줌
 function auriZoom(alt,src,w){
  var ww = $(window).width();
  var top = $(window).scrollTop();
  //console.log(alt+":"+src+":"+top+":"+ww);
   var close = $("<input>").attr({
      "src" : "/images/btn/btn_popup_close.png",
      "alt" : "닫기",
      "type":"image"
   }).css({
    "position":"absolute",
    "right":0,
    "top":-50
   });

 var backgound = $("<div>").attr({
         "class": "popup_background"
     }).css({
       "background":"#000",
       "width": "100%",
       "height": $(document).outerHeight(),
       "position": "absolute",
       "left": 0,
        "top": 0,
        "z-index":100,
        "opacity":0.5,
  "filter":"alpha(opacity=50)" 
     });
  var box = $("<div>").attr({
    "class":"layerPopup"
  }).css({
    "max-width":(ww <640 )?"100%":w,
    "width":"auto !important",
    "width":(ww <640 )?"100%":w,
    "position": "absolute",
    "left":(ww <640 )? 0:"50%",
    "top":top+80,
    "z-index":1000,
    "margin-left":(ww <640 )? 0 :-(w/2)
  }).append($("<img />").attr({
    "alt":alt,
    "src":src
  }).css({
    "max-width":"100%"
    
  })
  ).append(close);

  $("body").append(box).append(backgound);
  $(".layerPopup").bind("click",function(){
    $(this).css("display","none");
    $(".popup_background").remove();
    $(this).remove();
    $(".layerPopup").unbind("click");
  });

}

//모달 팝업창
function LayerPopup_type(obj){
    var backgound = $("<div>").attr({
         "class": "popup_background"
     }).css({
       "background":"#000",
       "width": "100%",
       "height": $(document).outerHeight(),
       "position": "absolute",
       "left": 0,
        "top": 0,
        "z-index":100,
        "opacity":0.5,
  "filter":"alpha(opacity=50)" 
     });
    $("body").append(backgound);

  
  var id_Motion = $("#layerPopup");

  if(obj =="close"){
    //for(var i=0; i<=id_Motion.length; i++){
      //$(id_Motion[i]).css("display","none");
      id_Motion.css("display","none");
      $(".popup_background").remove();
    //}
  }else{
    for(var i=0; i<=id_Motion.length; i++){
      $(id_Motion[i]).css("display","none");
    }
    var top = $(window).scrollTop();
    var width = $(obj).outerWidth();
    $(obj).css({
      "display":"block",
      "z-index":120,
      "left":"50%",
      "top":top+130,
      "margin-left":-(width/2)

    });

  }
  
}//LayerPopup_type


function offSetcheck(obj , top , mg , dl , spd  ,dir){
    if(isie8 || isie7){return};
    var o = $(obj),
    win = $(window),
    doc = $(document),
      step = self.step,
      speed = self.speed,
      viewport = win.height(),
      body = (navigator.userAgent.indexOf('AppleWebKit') !== -1) ? $('body') : $('html'),
      wheel = false;
      

    o.each(function(index){
      //윈도우 크기 + 
      var antTop = $(this).offset().top;
      var startPoint = antTop - 30;
      if(viewport < antTop ){
        if(startPoint > top){
              if(!offSetcheckFlag[index]){
                //console.log(index+"번째"+" 진입전");




              }
              offSetcheckFlag[index] = true;
            }else{
              if(offSetcheckFlag[index]){
                //console.log(index+"번째"+"진입후");
                var child = $(this).find("> *");
                var length = $(this).find("> *").length;
                for (var i = 0; i < $(this).find("> *").length; i++) {
                  if(dir == "top"){
                    child.css({
                      "margin-top":mg,
                      "opacity":0
                    });
                    child.eq(i).delay(dl*i).animate({
                      "margin-top":0,
                      "opacity":1
                    },spd,"easeInCubic");

                }else if(dir == "left"){
                  child.css({
                      "margin-left":mg,
                      "opacity":0
                    });
                    child.eq(i).delay(dl*i).animate({
                      "margin-left":0,
                      "opacity":1
                    },spd,"easeInCubic");

                }//if
              }//for
                


              }//if
              offSetcheckFlag[index] = false;
            }//startPoint

          } 

    });//each
  }//offSetcheck

// 컨텐츠 열고 닫기
function cont_display(obj,thi){
  var display = $(obj).css("display") == "block";
  if(display) {
       $(obj).css("display","none");
       if(!thi.hasClass("imgNone")){
         thi.attr({
            "src":thi.attr("src").split("_on").join("_off")
          });
       }

      }else{

      $(obj).css("display","block");
      if(!thi.hasClass("imgNone")){
         thi.attr({
            "src":thi.attr("src").split("_off").join("_on")
          });
       }

  }//if

}
//탭
function tab(obj,s,w,d){
  var $total = $(obj+">li").size()-1;
  var $first = (d==undefined) ? s-1 : d-1;
  var $prev = $first;
  var tab_id = new Array(); 
  var $btn = $(obj+">li");  
  var $start = $(obj+">li:eq("+$first+")");
  var $width = w;
    
  for( var i=0; i<=$total; i++){
    $(obj+">li:eq("+i+")").css("width",$width);
    if(d==undefined){
      tab_id[i] = $(obj+">li:eq("+i+")>a").not($(obj+">li:eq("+i+")>a.link")).attr("href");
      $(tab_id[i]).css("display","none"); 
      $(tab_id[$first]).css("display","block"); 
      //console.log(tab_id[i]);
    }
    //console.log(tab_id[1]);

   }
  $start.addClass("fixed");
   

  

  function img_change(img_obj,b,f){
    img_obj.attr("src",img_obj.attr("src").split(b).join(f));
  }//mg_change
  

   if(d==undefined){  
     $btn.find("a").bind("click",function(event){
        var $this = $(this).parent();
        var $index = $this.index();
             $(obj+">li.fixed").removeClass("fixed");
             $this.addClass("fixed");
             $(tab_id[$prev]).css("display","none");
             $(tab_id[$index]).css("display","block");
             $prev = $index;
             if(!$(this).hasClass("link")){
                event.preventDefault();
              }
     });
  }//if
}//tab

 var replace_img = function(o, s, ext){
       if(s) o.attr('src', o.attr('src').replace('off.'+ext, 'on.'+ext));
       else o.attr('src', o.attr('src').replace('on.'+ext, 'off.'+ext));
 } 
 var find_ext = function(imgE){
       var xt = imgE.find('img').attr('src').lastIndexOf('.') + 1;
       xt = imgE.find('img').attr('src').substr(xt);
       return xt;
 }

function banner_rolling(first){
  var setTime;
  var slide = false;
  var obj = $("#spotMain");
  var pos = obj.find(".img");
  var total = pos.find(">p").length-1;
  var next = obj.find(".next");
  var prev = obj.find(".prev");
  var np = obj.find(".prev,.next");
  var npPadding = 200;
  var w = 2000;
  var h = 419;
  var ww = $(window).width();
  var ws = Math.floor(ww%2);
  var t = (ww+ws)/2;
  var cachedEl = pos.children("p");
  obj.css({"height":h,"overflow":"hidden"});
   pos.css({"width":w,"height":h,"position":"absolute","left":t-(w/2),"top":0,"margin-left":0,"zindex":10});
   //setting
   if(slide){
   //np.css({"position":"absolute","top":200,"z-index":20});
   // prev.css("left",npPadding);
   // next.css("right",npPadding);
  }else{
    pos.find(">p").each(function(){
        $(this).css({
          "position":"absolute",
          "left":"0",
          "top":"0",
          "display":"none"
        })
      });
    pos.find(">p:eq("+(first)+")").addClass("on").fadeIn(300);




  }

   np.bind("mouseenter",function(){
      runstop();  
    }).bind("mouseleave",function(){
      autorun();
    }).click(function(){
        if(!pos.is(':animated')){
            motion_setintervarl($(this).attr("class"));
        }
   });
  
  function motion(num){
    //console.log(num);
    if(slide){
      var target = pos.find(">p.s"+num).detach().clone();
      target.insertAfter(pos.find(">p:first-child"));
      pos.stop().animate({"top":-h},700,function(){
        pos.empty().append(cachedEl);
        var prevAll = pos.children("p").eq(num).prevAll().detach().get().reverse();
        pos.append(prevAll).css("top",0);
      });//animate  
    }else{
      var after = pos.find(">p.on");
      var before = pos.find(">p.s"+num);
      after.removeClass("on").fadeOut(300);
      before.addClass("on").fadeIn(500);
    }

    
  }//motion
  




 function autorun(){ myInterval = setInterval (motion_setintervarl, 5000);}
 function runstop(){ clearInterval(myInterval);}
 function motion_setintervarl(c){
   if(slide){
    var index = parseInt(pos.find("p:first-child").attr("class").replace("s",""));
    if(c=="prev"){
      if( index != 0){ 
        motion(index-1); 
      }else{
        motion(total); 
      } 
      return;
    }
    if( index <= total){ 
      motion(index+1); 
    }else{
      motion(0); 
    } 

  }else{//if:slide

    var index = pos.find("p.on").index();
    if(c=="prev"){
      if( index != 0){ 
        motion(index-1); 
      }else{
        motion(total); 
      } 
      return;
    }

    if( index < total){ 
      motion(index+1); 
    }else{
      motion(0); 
    } 

  }//if:slide

    
  }//motion_setintervarl

  $(window).resize(function() {
    clearInterval(setTime);
   setTime = setTimeout(function(){
      ww = $(window).width();
      ws = Math.floor(ww%2);
      t = (ww+ws)/2;
      pos.stop().animate({"left":t-(w/2),"margin-left":0},200);
    },200)
  });
  autorun();
}

 function thumbFadeRolling(o,f,categoriNum){
        var categoriNum = categoriNum;
        var obj = $(o);
        var folderName = f;
        var direction = obj.find(" > .controls-direction");
        var itemDirection = obj.find(".pager-item > .controls-direction");
        var thumbLarge = obj.find(".thumb-large");
        var content = obj.find(".cont");
        var thumbPos = obj.find(".pager-item > .pos");
        var thumbItems = obj.find(".pager-item  > .pos > ul > li");
        var thumbItemsWidth = 84;
        var total = thumbItems.length;

      //  var thumbItemEx = 20;
        var exNum = 0;
        var ovr = $("<span>").css({
          "position":"absolute",
          "left":0,
          "top":0,
          "width":72,
          "height":57,
          "border":"4px #f37a45 solid"
        });

        var actionNum = 1;
        
/*
         function init(){
            itemMotion(actionNum);
            if(thumbItemEx >= total){
             itemDirection.css("display","none");
            }
         } */


         function directionMotion(){
          var direction = $(this).attr("class");
            if(direction == "prev"){
              if(actionNum <= 1){
                  actionNum = total;
              }else{
                actionNum --;
              }
            }else{//direction
              if(actionNum >= total){
                  actionNum = 1;
              }else{
                actionNum ++;
              }
            }//direction
           	if(actionNum >= total ){
             	exNum = total;
             	directionMotion2();
            }else{
            	exNum = 0;
            	directionMotion2();
            }
            itemMotion(actionNum);
         }//directionMotion

         function directionMotion2(){
           var direction = $(this).attr("class");
            if(direction == "prev"){
              if(exNum <= 0){
                  exNum = total /*- thumbItemEx*/;
              }else{
                exNum --;
              }
            }else if(direction == "next"){//direction
              if(exNum >= total /*- thumbItemEx*/){
                  exNum = 0;
              }else{
                exNum ++;
              }
            }//direction
            //thumbPos.find(">ul").stop().animate({"margin-left":-( thumbItemsWidth * exNum )},300);
         }//directionMotion




        function itemMotion(num){
              thumbLarge.find("img").attr("src","/images/"+folderName +"/goods/img_good"+categoriNum+"_"+num+".jpg");         
              thumbItems.each(function(){
                $(this).removeClass("on");
              });
              thumbItems.filter(":eq("+(num-1)+")").addClass("on");
              thumbItems.filter(":eq("+(num-1)+")").append(ovr);
              content.find(".item").each(function(){
                $(this).css("display","none");
              });
              content.find(".item.n"+(num)).css("display","block");
              exNum = num;
              actionNum = num;
        }

        

        function thumbAction(){
            var index =  $(this).index();
            itemMotion(index+1);
        }

        //init();
        itemMotion(1);
        direction.find("button").live("click",directionMotion);
        itemDirection.find("button").live("click",directionMotion2);
        thumbItems.live("click",thumbAction);
        


    };//thumbFadeRolling

$.fn.extend({
     imgConversion : function(s,type){
      var xt = $(this).attr('src').lastIndexOf('.') + 1;
      xt = $(this).attr('src').substr(xt);
      if(s) $(this).attr('src', $(this).attr('src').replace('off.'+xt, (type != "hover")? 'on.'+xt :'hover.'+xt ));
      else $(this).attr('src', $(this).attr('src').replace((type != "hover")? 'on.'+xt : 'hover.'+xt , 'off.'+xt));
      return $(this);
    }
  });

function btnHover(t){

  obj = $(t); 
  obj.each(function(){
    $(this).on("mouseenter mouseleave",function(e){
        if(e.type == "mouseenter"){
            $(this).imgConversion(true);
        }else{
            $(this).imgConversion(false);
        }
    })
  });
}
function menuFadeHover(t , sp){
  $this = $(t);
  var speed = (sp != "undefined") ? sp : 100;
  $this.bind("mouseenter mouseleave",function(e){
    var elemt = $(this);
    if(e.type == "mouseenter"){
      var imgOvr = elemt.find(">a>span>img").attr("src").replace("_off","_on");
      elemt.find(">a>span").append($("<img />").attr("src",imgOvr).css({
        "opacity":0,
        "position":"absolute",
        "left":0,
        "top":0
      }).addClass("ovr"))
      .find(".ovr").stop().animate({"opacity":1},speed,function(){
        elemt.find(".ovr").prev().css("visibility","hidden");
      });
      
    }else{
      elemt.find(">a .ovr").prev().css("visibility","visible").end().stop().animate({"opacity":0},speed,function(){$(this).remove();});
    }

  })
}

