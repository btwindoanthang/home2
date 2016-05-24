var posscroll = 0;
var intervalid = 0;

var isrunning = false;
function movescrollnext2() {
    if (isrunning) return;

    var arr = $(".hotnewsscroll2").find(".hotnewsscrolle2").get();

    if (arr.length > 1) {
        isrunning = true;
        $(".hotnewsscroll2").animate({ "margin-left": "-10px", }, 700, function () {
            $(".hotnewsscroll2").append($(".hotnewsscrolle2:eq(0)"));
            $(".hotnewsscroll2").css({ "margin-left": "0" });
            showhotnews2($(".hotnewsscrolle2:eq(0)"));
            isrunning = false;
        });

    }
}
function movescrollprev2() {
    if (isrunning) return;

    var arr = $(".hotnewsscroll2").find(".hotnewsscrolle2").get();
    if (arr.length > 1) {
        isrunning = true;
        $(".hotnewsscrolle2:last").insertBefore($(".hotnewsscrolle2:eq(0)"));
        $(".hotnewsscroll2").css({ "margin-left": "-10px" });

        $(".hotnewsscroll2").animate({ "margin-left": "0" }, 700, function () {
            isrunning = false;
            showhotnews2($(".hotnewsscrolle2:eq(0)"));
        });

    }
}
function showhotnews2(e) {
    $(".hotnewsframeimage2").html("<img style='float: left !important; width: 100% ' src='" + $(e).attr("image") + "' alt='" + $(e).attr("title") + "'/>");
    clipimage2($(".hotnewsframeimage2 img"), 244, 203);

    var p = "" + $(e).attr("title") + "";

    $(".hotnewsright").html(p + "<p>" + $(e).attr("des") + "</p>");
}
function pausehotnews() {
    if (intervalid > 0) {
        clearInterval(intervalid);
        intervalid = 0;
    }
    else {
        var arr = $(".hotnewsscroll1").find(".hotnewsscrolle1").get();

        if (arr.length > 1) {
            intervalid = setInterval(movescrollnext, 5000);
        }

    }
}
