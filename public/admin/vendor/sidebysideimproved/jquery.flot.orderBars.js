jQuery.plot.plugins.push({init:function(r){var i,o,u,h,l=new Array,d=new Array,f=1,b=!1;function c(r,e){for(var a=new Array,n=0;n<r.length;n++)a[0]=r[n].data[0][e],a[1]=r[n].data[r[n].data.length-1][e];return"string"==typeof a[0]&&(a[0]=0,a[1]=r[0].data.length-1),a}function y(r,e){var a=r.bars.barWidth?r.bars.barWidth:1,n=e.bars.barWidth?e.bars.barWidth:1;return a<n?-1:n<a?1:0}function p(r,e,a){var n=r.slice((a||e)+1||r.length);return r.length=e<0?r.length+e:e,r.push.apply(r,n),r}function g(){var r=0;return o%2!=0&&(r=i[Math.floor(o/2)].bars.barWidth/2),r}function v(r,e,a){for(var n=0,t=e;t<=a;t++)n+=r[t].bars.barWidth+2*h;return n}function A(r,e,a){for(var n=r.pointsize,t=r.points,s=0,i=b?1:0;i<t.length;i+=n)t[i]+=a,e.data[s][3]=t[i],s++;return t}r.hooks.processDatapoints.push(function(r,e,a){var n=null;if(function(r){return null!=r.bars&&r.bars.show&&null!=r.bars.order}(e))if(function(r){r.bars.horizontal&&(b=!0)}(e),function(r){var e=b?r.getPlaceholder().innerHeight():r.getPlaceholder().innerWidth(),a=c(r.getData(),b?1:0),n=a[1]-a[0];f=n/e}(r),function(r){i=function(r){for(var e=new Array,a=0;a<r.length;a++)null!=r[a].bars.order&&r[a].bars.show&&e.push(r[a]);return function(r){var e=r.length;do{for(var a=0;a<e-1;a++)if(r[a].bars.order>r[a+1].bars.order){var n=r[a];r[a]=r[a+1],r[a+1]=n}else if(r[a].bars.order==r[a+1].bars.order){var t;r[a].sameSeriesArrayIndex?void 0!==r[a+1].sameSeriesArrayIndex&&(t=r[a].sameSeriesArrayIndex,r[a+1].sameSeriesArrayIndex=t,d[t].push(r[a+1]),d[t].sort(y),r[a]=d[t][0],p(r,a+1)):r[a+1].sameSeriesArrayIndex?void 0!==r[a].sameSeriesArrayIndex&&(t=r[a+1].sameSeriesArrayIndex,r[a].sameSeriesArrayIndex=t,d[t].push(r[a]),d[t].sort(y),r[a]=d[t][0],p(r,a+1)):(t=d.length,d[t]=new Array,r[a].sameSeriesArrayIndex=t,r[a+1].sameSeriesArrayIndex=t,d[t].push(r[a]),d[t].push(r[a+1]),d[t].sort(y),r[a]=d[t][0],p(r,a+1)),a--,e--}e-=1}while(1<e);for(a=0;a<r.length;a++)r[a].sameSeriesArrayIndex&&(l[r[a].sameSeriesArrayIndex]=a);return r}(e)}(r.getData()),o=i.length}(r),function(r){u="number"==typeof r.bars.lineWidth?r.bars.lineWidth:2,h=u*f}(e),2<=o){var t=function(r){var e=0;if(r.sameSeriesArrayIndex)e=l[r.sameSeriesArrayIndex];else for(var a=0;a<i.length;++a)if(r==i[a]){e=a;break}return e+1}(e),s=g();n=A(a,e,function(r){return r<=Math.ceil(o/2)}(t)?-1*v(i,t-1,Math.floor(o/2)-1)-s:v(i,Math.ceil(o/2),t-2)+s+2*h),a.points=n}else 1==o&&(n=A(a,e,s=-1*g()),a.points=n);return n})},options:{series:{bars:{order:null}}},name:"orderBars",version:"0.2"});