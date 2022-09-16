
$(function(){
  $('.details-pane img').on('mouseover', function(e){
    var dpane      = $('#details-pane');
    var dpanetitle = $('#details-pane .title');
    var dpanedesc  = $('#details-pane .desc');
    var newtitle   = $(this).attr('alt');
    var newdate    = $(this).attr('data-date');
    var newdesc    = $(this).parent().next('meta.desc').attr('content');
    var newimg     = $(this).attr('data-fullsize');
    var linkurl    = $(this).parent().attr('href');
    
    var position = $(this).offset();
    var imgwidth = $(this).width();
    var ycoord   = position.top;
    if(position.left / $(window).width() >= 0.5) {
      var xcoord = position.left - 530;
      // details pane is 530px fixed width
      // if the img position is beyond 50% of the page, we move the pane to the left side
    } else {
      var xcoord = position.left + imgwidth;
    }

    $('.big-img a').attr('href',linkurl);
    $('.big-img a img').attr('src',newimg);
    
    var titlehtml = newtitle + '<span>('+newdate+')</span>';
    
    dpanetitle.html(titlehtml);
    dpanedesc.html(newdesc);
    dpane.css({ 'left': xcoord, 'top': ycoord, 'display': 'block'});
    
  }).on('mouseout', function(e){
    $('#details-pane').css('display','none');
  });
  
  // when hovering the details pane keep displayed, otherwise hide
  $('#details-pane').on('mouseover', function(e){
    $(this).css('display','block');
  });
  $('#details-pane').on('mouseout', function(e){
    //this is the original element the event handler was assigned to
    var e = e.toElement || e.relatedTarget;
    if (e.parentNode == this || e.parentNode.parentNode == this || e.parentNode.parentNode.parentNode == this || e == this || e.nodeName == 'IMG') {
      return;
    }
    $(this).css('display','none');
    //console.log(e.nodeName)
  });
});
