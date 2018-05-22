
 
 
 var onState = "on";
 var offState = "off";
 
 initImage = function (elem) {
   
   var lindex = elem.src.lastIndexOf(".");
   var suffix = elem.src.substring(lindex) ;
   var path = elem.src.substring(0,elem.src.lastIndexOf("_")+1) ;
   
   //alert("init " + path);
   
   elem.off = new Image(elem.width,elem.height) ;
   elem.off.src = path + offState + suffix ;
   elem.on = new Image(elem.width,elem.height) ;
   elem.on.src = path + onState + suffix ;
   
   elem.onmouseover = function () {
     this.src = this.on.src;
   }
   
   elem.onmouseout = function () {
     this.src = this.off.src;
   }
   
 }

 initRollovers = function () {
   var tags = document.getElementsByName("rollover");
   var num = tags.length;
   for (i=0; i < num; i++) {
   	   initImage(tags[i]);
   }
   
 }
