// JavaScript Document

 $(document).ready(function () {
	var article = $('.faq .article');//모든 li태그
	
	
	$('.faq .article .trigger').click(function(){   //질문 클릭시
	var myArticle = $(this).parents('.article');  //클릭된 질문의 li태그
	
	if(myArticle.hasClass('hide')){    //답변이 닫혀있나? 
	    article.find('.a').slideUp(100);  //모든 답변을 닫는다.
        article.removeClass('show').addClass('hide');   //hied로 바꾼다
	    myArticle.removeClass('hide').addClass('show');  
	    myArticle.find('.a').slideDown(100);  
	 } else {      //답변이 열려있다
	   myArticle.removeClass('show').addClass('hide');  
	   myArticle.find('.a').slideUp(100);  
	}  
  });   
  
	//모두 여닫기 추가  
    $('.all').toggle(function(){ 
	    article.find('.a').slideDown(100);
	    article.removeClass('hide').addClass('show');
	},function(){ 
	    article.find('.a').slideUp(100);
	    article.removeClass('show').addClass('hide');
	});    
}); 