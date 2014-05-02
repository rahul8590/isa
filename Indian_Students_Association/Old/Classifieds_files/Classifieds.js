// Created by iWeb 3.0.1 local-build-20090529

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({shadow_1:new IWShadow({blurRadius:10,offset:new IWPoint(4.2426,4.2426),color:'#000000',opacity:0.750000}),shadow_0:new IWShadow({blurRadius:10,offset:new IWPoint(4.2426,4.2426),color:'#000000',opacity:0.750000})});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Classifieds_files/ClassifiedsMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');Widget.onload();fixAllIEPNGs('Media/transparent.gif');IMpreload('Classifieds_files','shapeimage_2','0');IMpreload('Classifieds_files','shapeimage_2','1');IMpreload('Classifieds_files','shapeimage_2','2');applyEffects()}
function onPageUnload()
{Widget.onunload();}
