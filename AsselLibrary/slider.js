var lis=document.getEelementsByTagName('li');
for (var i=0; i<lis.length; i++){
lis[i].style.position='relative';
var span =document.createElement('span');
span.style.cssText='position:absolute; left:0; top:0';
span.innerHTML=1;
lis[i].appendChild(span);
}
var width=1280;
var count=1;

var slider=document.getElementById('slider');
var list=slider.querySelector('ul');
var listElements=slider.querySelectorAll('li');

var position=0;
slider.querySelector('.prev').onclick=function() {
position=Math.min(position+width*count, 0);
list.style.marginLeft=position+'px';
};
slider.querySelector('.next').onclick=function() {
position=Math.max(position-width*count, -width*(listElements.length-count));
list.style.marginLeft=position+ 'px';
};

