// Created by iWeb 3.0.1 local-build-20090529

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({reflection_0:new IWReflection({opacity:1.00,offset:1.00}),shadow_0:new IWShadow({blurRadius:10,offset:new IWPoint(4.2426,4.2426),color:'#ffffff',opacity:0.750000})});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Current_Students_files/Current_StudentsMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');Widget.onload();fixupIECSS3Opacity('id3');fixAllIEPNGs('Media/transparent.gif');IMpreload('Current_Students_files','shapeimage_1','0');IMpreload('Current_Students_files','shapeimage_1','1');IMpreload('Current_Students_files','shapeimage_1','2');applyEffects()}
function onPageUnload()
{Widget.onunload();}
