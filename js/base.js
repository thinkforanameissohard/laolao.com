 window.onload = function(){
	imgLocation("body_container","box");
	var imageData = {"data":[{"src":"2.jpg"},{"src":"2.jpg"},{"src":"2.jpg"},{"src":"2.jpg"},{"src":"2.jpg"}]};
	window.onscroll = function(){
		 if(checkFlag()){
			 var cparent = document.getElementById("body_container");
			 for(var i=0;i<imageData.data.length;i++)
			 {
				 var ccontent = document.createElement("div");
				 ccontent.className="box";
				 cparent.appendChild(ccontent);
				 var boximg = document.createElement("div");
				 boximg.className="box_img";
				 ccontent.appendChild(boximg);
				 var img = document.createElement("img");
				  img.src="../image/"+imageData.data[i].src;
				  boximg.appendChild(img);
			}
			imgLocation("body_container","box");
		 }
	}
 }
 function checkFlag(){
	 var cparent = document.getElementById("body_container");
	 var ccontent = getChildElement(cparent,"box");
	 console.log("ccontent:"+ccontent);
	 var lastContentHeight = ccontent[ccontent.length-1].offsetTop;
	 var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
	 var pageHeight = document.documentElement.clientHeight||document.body.clientHeight;
	 if(lastContentHeight<scrollTop+pageHeight)
	 {
		 return true;
	 }
 }
 function getChildElement(parent,content)
 {
	var width=[];
	var height=0;
	try{
		var allcontent = parent.getElementsByTagName("*");
		for(var i=0;i<allcontent.length;++i)
		{
			if(allcontent[i].className==content)
			{
				width.push(allcontent[i]);
			}
		}
	}
	catch(err)
	{
		console.log(err);
	}
	
	return width;
 } 
 function imgLocation(parent,content)
 {
	//将parent下所有的content全部取出
	try{
		var cparent  = document.getElementById(parent);
		console.log(cparent);
		var ccontent= getChildElement(cparent,content);
		var imgWidth = ccontent[0].offsetWidth;
		var cols = Math.floor(document.documentElement.clientWidth / imgWidth);
		cparent.style.cssText = "width: "+imgWidth*cols+"px;margin:0 auto;";
	 
		var BoxHeightArr=[];
		for(var i=0;i<ccontent[i].length;++i)
		 {
			 if(i<cols)
			{
				 BoxHeightArr[i] = ccontent[i].offsetHeight;
				 // console.log(BoxHeightArr[i]);
			 }
			 else
			 {
				 var minheigh = Math.min.apply(null,BoxHeightArr);
				 var minIndex = getminheightlocation(BoxHeightArr,minheig);
				 ccontent[i].style.position = "absolute";
				 ccontent[i].style.top = minheigh+"px";
				 ccontent[i].style.left = ccontent[minIdex].offsetLeft+"px";
				 BoxHeightArr[minIndex] = BoxHeightArr[minIndex]+ccontent[i].offsetHeight;
			 }
		}
	}
	catch(err)
	{
		console.log(err);
	}
	function getminheightlocation(BoxHeightArr,minheigh)
	{
		 for(var i in BoxHeightArr)
		 {
			 if(BoxHeightArr[i]==minheigh)
			 {
				 return i;
			 }
		 }
	}

 }
 
