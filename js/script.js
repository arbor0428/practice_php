$(function(){

    AOS.init(); //aos 플러그인 동작 실행

    // 처음에 스크롤바 위치 0

    $(window).on("load",function(){

        $("html,body").stop().animate({"scrollTop":0},10);
    });

    //header 고정

    $(window).on("scroll",function(){

        let scTop = $(this).scrollTop();

        if(scTop >= 80) {
            $("#header").addClass("bg");
        }

        else if(scTop == 0) {
            $("#header").removeClass("bg"); 
        }
    });

    // //gnb 메뉴 나타나고 사라짐
    $(".h-btn").on("click",function(event){
        event.preventDefault();
        
        let vid = $(".gnbWrap03").children("video").get(0);

        vid.currentTime = 0; 
        vid.play(); 

        $(".right_scroll").stop().fadeOut();
        $(".gnbWrap01").stop().animate({"height":"100%"},300);
        $(".gnbWrap02").stop().animate({"height":"100%"},500);
        $(".gnbWrap03").stop().animate({"height":"100%"},700);
        $(".gnbWrap04").stop().animate({"height":"100%"},900);
        $(".gnbWrap05").stop().animate({"height":"100%"},1100);

        $(".gnb").stop().animate({"left":0},1000);
        $(".gnbWrap03").children("video").stop().animate({"opacity":"0.9"},1000);

    });

    $(".h-btn-m").on("click",function(event){

        event.preventDefault();

        $(".right_scroll").stop().fadeOut();
        $(".gnbWrap02").stop().animate({"height":"100%"},500);
        $(".gnb").stop().animate({"left":0},1000);
    });



    $(".close").on("click",function(event){
        event.preventDefault();
        
        let vid = $(".gnbWrap03").children("video").get(0);

        vid.currentTime = 0; 
        vid.pause();

        $(".right_scroll").stop().fadeIn();
        $(".gnb").stop().animate({"left":"-181px"},1000);
        $(".gnbWrap03").children("video").stop().animate({"opacity":"0"},1000);
        
        $(".gnbWrap05").stop().animate({"height":0},300);
        $(".gnbWrap04").stop().animate({"height":0},500);
        $(".gnbWrap03").stop().animate({"height":0},700);
        $(".gnbWrap02").stop().animate({"height":0},900);
        $(".gnbWrap01").stop().animate({"height":0},1100);

        $(".depth2").hide();
    });


    $(".close_m").on("click",function(event){

        event.preventDefault();

        $(".right_scroll").stop().fadeIn();
        $(".gnbWrap02").stop().animate({"height":0},900);
        $(".depth2").hide();

    });

    //gnb depth2 메뉴 나타나고 사라짐
    $(".gnb > li > a").on("click",function(){
         
        $(this).parent().siblings().children(".depth2").stop().slideUp();
   
        $(this).parent().siblings().children("li").removeClass("on");
   
        $(this).siblings(".depth2").stop().slideToggle();
        $(this).children("li").toggleClass("on");
   
       });

    //슬라이더 동그라미 버튼
    let slideNumber = 0; 


    $(".small-circles li").on("click",function(event){
        event.preventDefault();
        
        slideNumber = $(this).index();

        slideMove(); 
    });

    function slideMove(){ 
       

        $(".small-circles li").removeClass("on");
        $(".small-circles li").eq(slideNumber).addClass("on");

        $(".s-view").stop().fadeOut();
        $("#view .s-view").eq(slideNumber).stop().fadeIn(500,function(){

            $(".hb").removeClass("on");
            $("#view .s-view").eq(slideNumber).find(".hb").addClass("on");
    
            $(".hb2").removeClass("on");
            $("#view .s-view").eq(slideNumber).find(".hb2").addClass("on");
    
            $(".txtbox").removeClass("on");
            $("#view .s-view").eq(slideNumber).find(".txtbox").addClass("on");


        });

    }

    //visual 좌우버튼
    $(".s-left").on("click",function(event){
        event.preventDefault();

        if(slideNumber == 0) {
            slideNumber = 2;
        }
        else{
            slideNumber--;
        }

        slideMove();

    });
    $(".s-right").on("click",function(event){
        event.preventDefault();

        if(slideNumber == 2) {
            slideNumber = 0;
        }
        else{
            slideNumber++;
        }

        slideMove();

    });

    //슬라이더 자동부분

    let autoSlide;
    autoNextSlide();


    $("#visual").on("mouseenter",function(){ 
        clearInterval(autoSlide);
    });


    $("#visual").on("mouseleave",autoNextSlide);

    function autoNextSlide(){

        autoSlide = setInterval(function(){

            if(slideNumber == 2) {
                slideNumber = 0;
            }

            else{
                slideNumber++;
            }

            slideMove();

        },3500);
    }

    //메뉴 클릭시 스크롤 부분
    let firstsec;

    $(".scrolldown").on("click",function(event){
        
        event.preventDefault();
        
        firstsec = $("#container .cont").eq(0).offset().top;
        
        $("html,body").stop().animate({"scrollTop":firstsec},1000,"easeOutBack");
        
    });

    //메뉴 클릭시 스크롤 부분
    let secMove;

    $(".right_menu li").on("click",function(event){
        
        event.preventDefault();
        
        let seclist = $(this).index();
        secMove = $("#container .cont").eq(seclist).offset().top;
        
        $("html,body").stop().animate({"scrollTop":secMove},1000,"easeOutBack");
        
    });


    // //스크롤 자동 부분
    // let wheelCheck;

    // $(".cont").on("mousewheel",function(event){
    //     event.preventDefault();

    //     let mdelta = event.originalEvent.wheelDelta;
    //     let wheelIndex = $(this).index();
        

    //     if(mdelta > 0) {

    //         if(wheelIndex != 0 && wheelCheck == true) {

    //             secMove = $(this).prev().offset().top;
    //         }
    //         else if(wheelIndex == 4 && wheelCheck == false) {

    //             secMove = $(this).offset().top;
    //             wheelCheck = true;
    //         }

    //         else if(wheelIndex == 0) {

    //             secMove = $("#visual").offset().top;
    //             wheelCheck = false;
    //         }
            

    //     }

    //     else if(mdelta < 0) {

    //         if(wheelIndex != 4) {

    //             secMove = $(this).next().offset().top;
    //             wheelCheck = true;

    //         }
    //         else if(wheelIndex == 4) {
    //             secMove = $("#footer").offset().top;
    //             wheelCheck = false;
    //         }
    //     }


    //     $("html,body").stop().animate({"scrollTop":secMove},1000,"easeOutBack");
 
    //     //휠 했을 때 마지막 구역일 때만 풋터부분까지 쭉 내려가게
    // });
        
    
    //quickmenu rightmenu & TopBtn 중간영역부터 나타나기

    $(window).on("scroll",function(){

        let scroll = $(this).scrollTop();

        if(scroll >= 600) {

            $(".TopBtn").stop().fadeIn();

        }

        else {

            $(".TopBtn").stop().fadeOut();

        }

    });

    //top버튼 눌렀을씨 맨위로
    $(".TopBtn").on("click",function(){
    
        $("html,body").stop().animate({"scrollTop":0},1500); 
        
    });


    //화면 열리자 마다 캐러셀 li태그 가로값 받아오기(마진여백 포함)
    let c_move = $(".c-move li").outerWidth(true);
  

    $(window).on("resize",function(){

        c_move = $(".c-move li").outerWidth(true);
     
    });

    //cont2 캐러셀
    $(".c-left").on("click",function(event){

        event.preventDefault();

        $(".c-move").stop().animate({"margin-left":-c_move*2},1000,function(){
            
            $(".c-move li:first-child").appendTo(".c-move");
            $(".c-move").css({"margin-left":-c_move});

        });
    });

    $(".c-right").on("click",function(event){

        event.preventDefault();

        $(".c-move").stop().animate({"margin-left":0},1000,function(){

            $(".c-move li:last-child").prependTo(".c-move");
            $(".c-move").css({"margin-left":-c_move});

        });
    });

    //cont2 캐러셀 자동으로 움직임

    let autoCarousel;
    autoNextCarousel();
    
    $(".carousel").on("mouseenter",function(){ 

        clearInterval(autoCarousel);

    });
    
    $(".carousel").on("mouseleave",autoNextCarousel);

    function autoNextCarousel(){  

        autoCarousel = setInterval(function(){

            $(".c-move").animate({"margin-left":0},1500,function(){
    
                $(".c-move li:last-child").prependTo(".c-move");
                $(".c-move").css({"margin-left":-c_move});
    
            });

        },2000);
    }

    //tabBtn 눌렀을때

    $(".tabBtn > li").on("click",function(event){

        event.preventDefault();

        let tabNumber = $(this).index();

        $(".tabBtn > li").removeClass("on");
        $(this).addClass("on");

        $(".tabBoxWrap .tabBox").hide();
        $(".tabBoxWrap .tabBox").eq(tabNumber).show();

    });


    //bookmark 눌렀을때

    $(".bookmark").on("click",function(){
        
        $(this).toggleClass("on");

    });

    //cont4 캐러셀
    let CarouselNumber = 0; 

    $(".s-btn li").on("click",function(event){

        event.preventDefault();
        
        CarouselNumber = $(this).index();

        sayMove(); 
    });

    function sayMove(){ 
        $(".s-btn li").removeClass("on");
        $(".s-btn li").eq(CarouselNumber).addClass("on");

        $(".saybox").stop().animate({"margin-left":-100*CarouselNumber+"%"},3000,function(){

            $(".sayWrap").removeClass("on");
            $(".sayWrap").eq(CarouselNumber).addClass("on");
        });

    }

    //cont4 캐러셀 자동으로 움직임

    let autoSayBox;
    autoNextSayBox();
    
    $(".boxWrap").on("mouseenter",function(){ 

        clearInterval(autoSayBox);

    });
    
    $(".boxWrap").on("mouseleave",autoNextSayBox);

    function autoNextSayBox(){

        autoSayBox = setInterval(function(){

        if(CarouselNumber == 2) {
            CarouselNumber = 0;
        }
        else{
            CarouselNumber++;
        }

        sayMove();

        },4000);
    }

    //infolist 메뉴부분
    let faqNumber = 0;

    $(".infolist > li > a").on("click",function(event){

        event.preventDefault();
        faqNumber = $(this).parent().index();
        $(this).parent().siblings().removeClass("on");
        $(this).parent().toggleClass("on");

        $(this).parent().siblings().children(".showlist").stop().slideUp();
        $(this).parent().children(".showlist").stop().slideToggle();
        
    });




    ///introduce page


    ///recipe Page
    //ct10-tabBtn 눌렀을때

    $(".ct10-tabBtn > li").on("click",function(event){

        event.preventDefault();

        let tabNumber = $(this).index();

        $(".ct10-tabBtn > li").removeClass("on");
        $(this).addClass("on");

        $(".r-tabBoxWrap .recipeWrap").stop().fadeOut(400);
        $(".r-tabBoxWrap .recipeWrap").eq(tabNumber).stop().fadeIn(500);

    });

    ///class page
    //youtubebox 나타나고 사라짐
    $(".all .c-hoverBox").on("click",function(){
        
        let vid02 = $(".youtubebox").children("video").get(0);

        vid02.currentTime = 0; 
        vid02.play(); 

        $(".youtubebox").stop().fadeIn(700);

    });

    $(".close").on("click",function(){
        
        let vid02 = $(".youtubebox").children("video").get(0);

        vid02.currentTime = 0; 
        vid02.pause();

        $(".youtubebox").stop().fadeOut(700);

    });


    //isotope 플러그인 로딩
    $('.content').isotope({
        // options
        itemSelector: '.all',
        layoutMode: 'fitRows'
    });

    //버튼 클릭시 isotope 플러그인 정렬 시작!

    $(".ct11-tabBtn li").on("click",function(event){
        event.preventDefault();
        let value = $(this).attr("data-filter");

        $(".content").isotope({
            filter:value,
            transitionDuration: 200

        });
    });

    //ct11-tabBtn 눌렀을때

    $(".ct11-tabBtn > li").on("click",function(event){

        event.preventDefault();

        $(this).addClass("on");
        $(this).siblings().removeClass("on");

    });


    //login페이지 스크립트
    $(window).on("load",function(){


        $("#login_container .txtBox").stop().animate({"left":"23%"},1000);
        $(".loginBox").stop().animate({"right":"-12px"},1000);

    });


    
    ///register page
    //terms 나타나고 사라짐
    $(".agreebox button").on("click",function(event){
        
        event.preventDefault();

        $(".termWrap").stop().fadeIn(700);

    });

    $(".t-close").on("click",function(event){

        event.preventDefault();

        $(".termWrap").stop().fadeOut(700);

    });
    

});