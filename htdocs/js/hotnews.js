var posscroll = 0;
var intervalid = 0;
$(document).ready(function () {
    var arr = $(".hotnewsscrollethumb").find("img").get();
    for (var i = 0; i < arr.length; i++) {
        clipimage(arr[i], 69, 54);
    }
    var arr = $(".hotnewstitlethumb").find("img").get();
    for (var i = 0; i < arr.length; i++) {
        clipimage(arr[i], 58, 53);
    }

    var arr = $(".hotnewsscroll").find(".hotnewsscrolle").get();
   
    if (arr.length > 1) {
        intervalid = setInterval(movescrollnext, 5000);
    }
    if (arr.length > 0) {
        showhotnews($(".hotnewsscrolle:eq(0)"));

    }
    $('#scrollbar1').tinyscrollbar();
    $('#scrollbar2').tinyscrollbar();
});
var isrunning = false;
function movescrollnext() {
    if (isrunning) return;

    var arr = $(".hotnewsscroll").find(".hotnewsscrolle").get();

    if (arr.length > 1) {
        isrunning = true;
        $(".hotnewsscroll").animate({ "margin-left": "-60px", }, 700, function () {
            $(".hotnewsscroll").append($(".hotnewsscrolle:eq(0)"));
            $(".hotnewsscroll").css({ "margin-left": "0" });
            showhotnews($(".hotnewsscrolle:eq(0)"));
            isrunning = false;
        });

    }
}
function movescrollprev() {
    if (isrunning) return;

    var arr = $(".hotnewsscroll").find(".hotnewsscrolle").get();
    if (arr.length > 1) {
        isrunning = true;
        $(".hotnewsscrolle:last").insertBefore($(".hotnewsscrolle:eq(0)"));
        $(".hotnewsscroll").css({ "margin-left": "-153px" });

        $(".hotnewsscroll").animate({ "margin-left": "0" }, 700, function () {
            isrunning = false;
            showhotnews($(".hotnewsscrolle:eq(0)"));
        });

    }
}
function showhotnews(e) {
    $(".hotnewsframeimage1").html("<img style='float: left !important; width: 45% ' src='" + $(e).attr("image") + "' alt='" + $(e).attr("title") + "'/>");
    clipimage($(".hotnewsframeimage1 img"), 244, 203);

    var p = "" + $(e).attr("title") + "";

    $(".hotnewsright").html(p + "<p>" + $(e).attr("des") + "</p>");
}
function pausehotnews() {
    if (intervalid > 0) {
        clearInterval(intervalid);
        intervalid = 0;
    }
    else {
        var arr = $(".hotnewsscroll").find(".hotnewsscrolle").get();

        if (arr.length > 1) {
            intervalid = setInterval(movescrollnext, 5000);
        }

    }
}
