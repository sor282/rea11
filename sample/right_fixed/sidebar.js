
$(function(){
    var duration = 500;

    var $sidebar = $('.sidebar');
    var $sidebarButton = $('.sidebar-btn').on('click', function(){
        $sidebar.toggleClass('close');
        if($sidebar.hasClass('close')){
            $sidebar.stop(true).animate({right: '-270px'}, duration, 'easeInBack');
            $('.sidebar-span').text('<');
        }else{
            $sidebar.stop(true).animate({right: '-70px'}, duration, 'easeOutBack');
            $('.sidebar-span').text('>');
        };
    });
});


/*
$(function(){
    var duration = 500;

    var $sidebar = $('.sidebar');
    var $sidebarButton = $sidebar.find('button').on('click', function(){
        $sidebar.toggleClass('close');
        if($sidebar.hasClass('close')){
            $sidebar.stop(true).animate({right: '-270px'}, duration, 'easeInBack');
            $sidebarButton.find('span').text('<');
        }else{
            $sidebar.stop(true).animate({right: '-70px'}, duration, 'easeOutBack');
            $sidebarButton.find('span').text('>');
        };
    });
});*/