$(document).ready(function(){
   var animationName = "animated bounceInDown";
   var animationEnd = "webkitAnimationEnd mozAnimatinEnd MsAnimationEnd oanimationend animationend";
           $('#arrow').addClass(animationName).one(animationEnd,
             function() {
               $(this).removeClass(animationName);
             });
  });
       



