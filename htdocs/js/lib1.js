function fixie6() {

    var lc = location + "";
    lc = lc.substring(7);
    lc = lc.substring(0, lc.indexOf("/") + 1);


    location = "http://" + lc + "/pages/ie6.aspx";
}
function fixie7() {


}


function resizeimage(e, w, h) {

    var newImg = new Image();
    newImg.src = $(e).attr("src");

    var curHeight = newImg.height;
    var curWidth = newImg.width;
    var wa, ha;
    var ts = curWidth / curHeight;
    var ts1 = w / h;
    if (curWidth >= curHeight * ts1) {
        wa = w;
        ha = w / ts;
        var dl = (h - ha) / 2;


        $(e).css({ "width": w + "px", "height": "auto", "float": "left", "padding-top": dl + "px" });

    } else {
        ha = h;
        wa = ts * h;
        var dl = (w - wa) / 2;

        $(e).css({ "width": "auto", "height": h + "px", "float": "left", "padding-left": dl + "px" });

    }

}


$(document).ready(function () {
    if ($.browser.msie) {
        if ($.browser.version == '6.0')
            fixie6();
        if ($.browser.version == '7.0')
            fixie7();

        $(".timkiem").css({"height":"17px","padding-top":"6px"});
    }

    $("#google").attr({ "href": "https://plus.google.com/share?url=" + location });
    $("form").bind("keypress", function (e) {
        if (e.keyCode == 13) {
            return false;
        } else {
            return true;
        }
    });
    var arr = $(".toprealstateethumb").find("img").get();
    for (var i = 0; i < arr.length; i++) {
        clipimage(arr[i], 196, 168);
    }
    $(".logo").click(function () {
        location = "/batdongsanbinhduong/home.html";
    });
});
function clipimage2(e, w, h) {

    var newImg = new Image();
    newImg.src = $(e).attr("src");

    var curHeight = newImg.height;
    var curWidth = newImg.width;
    var wa, ha;
    var ts = curWidth / curHeight;
    var ts1 = w / h;
    if (curWidth >= curHeight * ts1) {
        wa = w;
        ha = w / ts;
        var dl = (h - ha) / 2;


        $(e).css({ "width": "100%", "height": "auto", "float": "left" });

    } else {
        ha = h;
        wa = ts * h;
        var dl = (w - wa) / 2;

        $(e).css({ "width":"18%", "height": "auto", "float": "left" });

    }

}
