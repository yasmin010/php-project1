var mycanvas =document.getElementbyid('c'),
mycontext=mycanvas.getContext('2d');
mycontext.fillstyle ='#080';
mycontext.fillrect(10,10,100,50);
mycontext.fillstyle ='#0f0';
mycontext.fillrect(10,10,100,50);
mycontext.fillstyle ='#00f';
mycontext.fillrect(10,10,100,50);
mycontext.strokestyle ='#ff0'
mycontext.strokerect(100,100,100,50);