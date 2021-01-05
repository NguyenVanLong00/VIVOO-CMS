$("#shortlink").height($(window).height() - parseFloat($("header").css("padding-top").replace('px', '')) );
if($(window).width()>425) 
    $("#plan").height($(window).height());

$("#shortlink > form > input").on("change keyup paste click input", function () {
    if ($("#shortlink > form > input").attr("value") == "URL") {
        let width = 4;
        let max = $(window).width()>425?24:16;

        $("#shortlink > form > input").attr("value", "");
        $("#shortlink > form > input").css("height", "4rem");
        let id = setInterval(() => {
            if (width > max) {
                clearInterval(id);
            } else {
                width = width + width * 0.1;
                $("#shortlink > form > input").css("width", width + 'rem');
            }
        }, 10);
        $("#shortlink > form > input").css("padding-right", "3rem");
        $("#shortlink > form > img").css("display", "block");
    }
})

$("#shortlink > form > img").on("click",()=>{
    console.log("check");
})



