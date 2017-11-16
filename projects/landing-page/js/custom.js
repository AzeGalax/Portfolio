$(document).ready(function(){
    var nbvisible = $('#test .visiblejs:visible').last().index();
    var x = 5;
    $('#loadMore').click(function(){
        if ($('#test div:visible').length !== $('#test div').length){
            $('#test .visiblejs:visible').nextAll("*:lt(" + x + ")").prevAll().removeClass('hidden');
            $('#gifloader').css({display: "block"});
            setTimeout(function(){
            $('#gifloader').css({display: "none"});
            $('#test .visiblejs:visible').nextAll("*:lt(" + x + ")").prevAll().addClass('opacity_1');
            x = x + 5;
            
             if ($('#test div:visible').length === $('#test div').length){
                $('#loadMore').hide();
             }
            
        }, 1000);
        }
    });
});