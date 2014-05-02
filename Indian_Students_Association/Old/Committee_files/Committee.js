// Created by iWeb 3.0.1 local-build-20100527

function createMediaStream_id2()
{return IWCreatePhotocast("http://people.umass.edu/adwaraki/Indian_Students_Association/Committee_files/rss.xml",false);}
function initializeMediaStream_id2()
{createMediaStream_id2().load('http://people.umass.edu/adwaraki/Indian_Students_Association',function(imageStream)
{var entryCount=imageStream.length;var headerView=widgets['widget1'];headerView.setPreferenceForKey(imageStream.length,'entryCount');NotificationCenter.postNotification(new IWNotification('SetPage','id2',{pageIndex:0}));});}
function layoutMediaGrid_id2(range)
{createMediaStream_id2().load('http://people.umass.edu/adwaraki/Indian_Students_Association',function(imageStream)
{if(range==null)
{range=new IWRange(0,imageStream.length);}
IWLayoutPhotoGrid('id2',new IWPhotoGridLayout(3,new IWSize(161,161),new IWSize(161,48),new IWSize(204,224),27,27,0,new IWSize(6,6)),new IWPhotoFrame([IWCreateImage('Committee_files/comic-1_01.png'),IWCreateImage('Committee_files/comic-1_02.png'),IWCreateImage('Committee_files/comic-1_03.png'),IWCreateImage('Committee_files/comic-1_06.png'),IWCreateImage('Committee_files/comic-1_09.png'),IWCreateImage('Committee_files/comic-1_08.png'),IWCreateImage('Committee_files/comic-1_07.png'),IWCreateImage('Committee_files/comic-1_04.png')],null,0,1.000000,4.000000,4.000000,1.000000,1.000000,5.000000,5.000000,6.000000,6.000000,71.000000,115.000000,71.000000,115.000000,null,null,null,0.500000),imageStream,range,null,null,1.000000,{backgroundColor:'rgb(0, 0, 0)',reflectionHeight:100,reflectionOffset:2,captionHeight:100,fullScreen:0,transitionIndex:9},'Media/slideshow.html','widget1','widget2','widget3')});}
function relayoutMediaGrid_id2(notification)
{var userInfo=notification.userInfo();var range=userInfo['range'];layoutMediaGrid_id2(range);}
function onStubPage()
{var args=window.location.href.toQueryParams();parent.IWMediaStreamPhotoPageSetMediaStream(createMediaStream_id2(),args.id);}
if(window.stubPage)
{onStubPage();}
setTransparentGifURL('Media/transparent.gif');function hostedOnDM()
{return false;}
function onPageLoad()
{IWRegisterNamedImage('comment overlay','Media/Photo-Overlay-Comment.png')
IWRegisterNamedImage('movie overlay','Media/Photo-Overlay-Movie.png')
loadMozillaCSS('Committee_files/CommitteeMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');NotificationCenter.addObserver(null,relayoutMediaGrid_id2,'RangeChanged','id2')
Widget.onload();fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');initializeMediaStream_id2()
performPostEffectsFixups()}
function onPageUnload()
{Widget.onunload();}
