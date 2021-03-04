//home panel
//需要有對應的左右panel
//# home 設定為當前頁面
//#right-panel-home 設定為右pannel的ID
//#left-panel-home 設定為左panel的ID

var index=0;
var pImgSrc,pName,plink;
var aryImgSrc=new Array("images/htc_u20.jpg","images/htc_deisre21.jpg","images/large-a42.png","images/large-a71.png","images/large-x12.png"); //生成照片陣列
var aryName=new Array("HTC U20 5G","HTC Desire 21 pro 5G","Samsung A42","Samsung A71","Sony X1 markII");//生成型號品名陣列
var arylink=new Array("https://24h.pchome.com.tw/store/DYAW0B","https://24h.pchome.com.tw/store/DYAW38","https://24h.pchome.com.tw/store/DYALDZ","https://24h.pchome.com.tw/store/DYAL9M","https://24h.pchome.com.tw/store/DYAW07");

// $("#showup").bind("click",showup); //監聽上一頁按鈕
// $("#showdown").bind("click",showdown); //監聽下一頁按鈕
$( document ).on( "pagecreate", "#home", function() {     					//監聽是否開啟home page
     $( document ).on( "swipeleft swiperight", "#home", function( e ) {    	//監聽是否有左右滑動的動作
        if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) { 		//先確認panel頁沒有開啟，
            if ( e.type === "swipeleft" ) {									//如監聽到滑向左邊的動作
               showup();						//則開啟右邊的panel
            } else if ( e.type === "swiperight" ) {				  			//如有監聽到滑向右邊的動作
               showdown();						//開啟左邊的panel
            }
            }
     });
});

//上一頁按鈕後的function
function showup(){ 
	index--;     //指標自減1
	if(index<0){   //判斷指標是否為負，
		index=4;  //為負的話回最開頭第9個
	}
	pImgSrc=aryImgSrc[index]; //取出照片的順序存到變數 curPictureSrc
	pName=aryName[index];   //取出品名型號的順序存到變數 curPhone
	$("#picture").attr("src",pImgsrc); //用attr函數取代 src的相當位置將curPictureSrc帶入以顯示對應照片
	$("#content").text(pName); //用Text函數取代pcont內的內容
	$("#mylink").attr("href",plink);
}
//下一頁按鈕後的function（參考上一頁註解）
function showdown(){
	index++; //指標自加1
	if(index>4){ 
		index=0;
	}
	pImgSrc=aryImgSrc[index]; //取出照片的順序存到變數 curPictureSrc
	pName=aryName[index];   //取出品名型號的順序存到變數 curPhone
	$("#picture").attr("src",pImgSrc);
	$("#content").text(pName);
	$("#mylink").attr("href",plink);
}
//上一頁按鈕後的function
	// function showpic(){ 
	// 	index--;     //指標自減1
	// 	if(index<0){   //判斷指標是否為負，
	// 		index=4;  //為負的話回最開頭第9個
	// 	}
	// 	pImgSrc=aryImgSrc[index]; //取出照片的順序存到變數 pImgsrc
	// 	pName=aryName[index];   //取出品名型號的順序存到變數 pName
	// 	plink=arylink[index];  //取出型號的超鏈接存到變數 pHlink
	// 	$("#picture").attr("src",pImgSrc); //用attr函數取代 src的相當位置將curImgSrc帶入以顯示對應照片
	// 	$("#content").text(pName); //用Text函數取代content內的內容
	// 	$("#mylink").attr("href",plink);
	// }


