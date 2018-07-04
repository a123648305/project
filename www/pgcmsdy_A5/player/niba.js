var now = "";
var next = "";
var nextPage = "";
$(function () {
    var name = parent.mac_from;
    if (name == 'niba') {
        getPlay();
    }
})
function getPlay() {
    var AllVideo = mac_url.split("#");
    var nowNum = window.location.search.match(/num-(.+?)\.html/)[0].match(/\d+/)[0];
    if (AllVideo[nowNum - 1].match(/\$/)) {
        now = AllVideo[nowNum - 1].split("$")[1];
    } else {
        now = AllVideo[nowNum - 1];
    }
    if (AllVideo.length > nowNum) {
        if (AllVideo[nowNum].match(/\$/)) {
            next = AllVideo[nowNum].split("$")[1];
        } else {
            next = AllVideo[nowNum];
        }
        nextPage = window.location.href.replace(/num-\d+\.html/, 'num-' + (parseInt(nowNum) + 1) + '.html');
    }
    appendFrm();
}
function appendFrm() {
    var frm = '<iframe border="0" src="'+SitePath+'player/niba.html" width="' + mac_width + '" height="' + mac_height + '" marginWidth="0" frameSpacing="0" marginHeight="0" frameBorder="0" scrolling="no" vspale="0" noResize></iframe>';
    $("#playleft").html(frm);
}