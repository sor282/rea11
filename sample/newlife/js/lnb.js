// JavaScript Document
	$(function(){
  var gnbA = $("#lnb_ul>li>a"); //�������� a�������ϱ� ��ü ��ü�� �ϳ��� �����ѵ� ������ a��Ҹ� 5�� ���������ϱ� �迭��ü
  var sub = $("#lnb_ul>li>ul");
  gnbA.on("mouseenter focus",function(){
    if(gnbA.target){ //���� ã����������(undefind) = false 
      //$(gnbA.target).next().hide(); // hide�� removeClass show�� addClass�� �ٲܼ��ִ�.
      //$(this).next().show();
      $(gnbA.target).next().hide();
      $(this).next().show("fast")
    }else{//else�� ó�� �ѹ� ����ǰ� �״������ʹ� if�� �����
      $(this).next().show();	
    }
    gnbA.target = this;
  });
  gnbA.mouseleave(function(){
    $(this).next().hide();
  });
  sub.hover(function(){
    $(this).show();
  },function(){
    $(this).hide();
  });
  $("#lnb>li>ul>li>a:last").hover(function(){ //��Ŀ���� ��������
    $(gnbA.target).next().stop().fadeOut("fast");
  });
    });