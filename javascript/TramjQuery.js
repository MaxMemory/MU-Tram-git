$(document).ready(function(){

  // Object Green effect
  $(".object_Green").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            height: '25px',
            width: '25px',
    },"fast");
  });
  $(".object_Green").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "3s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            height: '20px',
            width: '20px',
    },"fast");
  });

  // Object Blue effect
  $(".object_Blue").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            height: '25px',
            width: '25px',
    },"fast");
  });
  $(".object_Blue").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "3s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '50px',
            height: '20px',
            width: '20px',
    },"fast");
  });

  // Object Red effect
  $(".object_Red").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            left: '0px',
            height: '25px',
            width: '25px',
    },"fast");
  });
  $(".object_Red").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "3s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '0px',
            height: '20px',
            width: '20px',
    },"fast");
  });
  // Object Yellow effect
  $(".object_Yellow").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            left: '0px',
            height: '25px',
            width: '25px',
    },"fast");
  });
  $(".object_Yellow").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "3s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '0px',
            height: '20px',
            width: '20px',
    },"fast");
  });

});
