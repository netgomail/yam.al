function JCTitleSearch(t) {
    var e = this;
    this.arParams = { AJAX_PAGE: t.AJAX_PAGE, CONTAINER_ID: t.CONTAINER_ID, INPUT_ID: t.INPUT_ID, MIN_QUERY_LEN: parseInt(t.MIN_QUERY_LEN) };
    if (t.WAIT_IMAGE) this.arParams.WAIT_IMAGE = t.WAIT_IMAGE;
    if (t.MIN_QUERY_LEN <= 0) t.MIN_QUERY_LEN = 1;
    this.cache = [];
    this.cache_key = null;
    this.startText = "";
    this.running = false;
    this.currentRow = -1;
    this.RESULT = null;
    this.CONTAINER = null;
    this.INPUT = null;
    this.WAIT = null;
    this.SUGGEST = document.querySelector('.suggest');
    this.CLONEMAIN = document.querySelector('.suggest__cloneMain');
    this.SUGGESTHEADER = document.querySelector('.suggest__header');
    this.SUGGESTWRAPPER = document.querySelector('.suggest__wrapper');
    this.ShowResult = function(t) {
        if (BX.type.isString(t)) { e.RESULT.innerHTML = t }
        e.RESULT.style.display = e.RESULT.innerHTML !== "" ? "block" : "none";
        var s = e.adjustResultNode();
        var i;
        var r;
        var n = BX.findChild(e.RESULT, { tag: "ul", "class": "suggest__suggests" }, true);
        if (n) { r = BX.findChild(n, { tag: "li" }, true) }
        if (r) {
            var a = BX.pos(n);
            a.width = a.right - a.left;
            var l = BX.pos(r);
            l.width = l.right - l.left;
            r.style.width = l.width + "px";
            e.RESULT.style.width = s.width + l.width + "px";
            e.RESULT.style.left = s.left - l.width - 1 + "px";
            if (a.width - l.width > s.width) e.RESULT.style.width = s.width + l.width - 1 + "px";
            a = BX.pos(n);
            i = BX.pos(e.RESULT);
            if (i.right > a.right) { e.RESULT.style.width = a.right - a.left + "px" } }
        var o;
        if (n) o = BX.findChild(e.RESULT, { "class": "title-search-fader" }, true);
        if (o && r) { i = BX.pos(e.RESULT);
            o.style.left = i.right - i.left - 18 + "px";
            o.style.width = 18 + "px";
            o.style.top = 0 + "px";
            o.style.height = i.bottom - i.top + "px";
            o.style.display = "block" } };
    this.onKeyPress = function(t) {
        var s = BX.findChild(e.RESULT, { tag: "ul", "class": "suggest__suggests" }, true);
        if (!s) return false;
        var i;
        var r = s.rows.length;
        switch (t) {
            case 27:
                e.RESULT.style.display = "none";
                e.currentRow = -1;
                e.UnSelectAll();
                return true;
            case 40:
                if (e.RESULT.style.display == "none") e.RESULT.style.display = "block";
                var n = -1;
                for (i = 0; i < r; i++) {
                    if (!BX.findChild(s.rows[i], { "class": "title-search-separator" }, true)) {
                        if (n == -1) n = i;
                        if (e.currentRow < i) { e.currentRow = i;
                            break } else if (s.rows[i].className == "title-search-selected") { s.rows[i].className = "" } } }
                if (i == r && e.currentRow != i) e.currentRow = n;
                s.rows[e.currentRow].className = "title-search-selected";
                return true;
            case 38:
                if (e.RESULT.style.display == "none") e.RESULT.style.display = "block";
                var a = -1;
                for (i = r - 1; i >= 0; i--) {
                    if (!BX.findChild(s.rows[i], { "class": "title-search-separator" }, true)) {
                        if (a == -1) a = i;
                        if (e.currentRow > i) { e.currentRow = i;
                            break } else if (s.rows[i].className == "title-search-selected") { s.rows[i].className = "" } } }
                if (i < 0 && e.currentRow != i) e.currentRow = a;
                s.rows[e.currentRow].className = "title-search-selected";
                return true;
            case 13:
                if (e.RESULT.style.display == "block") {
                    for (i = 0; i < r; i++) {
                        if (e.currentRow == i) {
                            if (!BX.findChild(s.rows[i], { "class": "title-search-separator" }, true)) {
                                var l = BX.findChild(s.rows[i], { tag: "a" }, true);
                                if (l) { window.location = l.href;
                                    return true } } } } }
                return false }
        return false };
    this.onTimeout = function() { e.onChange(function() { setTimeout(e.onTimeout, 500) }) };
    this.onChange = function(t) {
        if (e.running) return;
        e.running = true;
        if (e.INPUT.value) {
        	this.SUGGEST.classList.remove('_placeholder');
        	this.SUGGEST.classList.add('_inputHasValue');
        } else {
        	this.SUGGEST.classList.remove('_inputHasValue')
        	this.SUGGEST.classList.add('_placeholder');
        }
        if (e.INPUT.value != e.oldValue && e.INPUT.value != e.startText) { e.oldValue = e.INPUT.value;
            if (e.INPUT.value.length >= e.arParams.MIN_QUERY_LEN) { e.cache_key = e.arParams.INPUT_ID + "|" + e.INPUT.value;
                if (e.cache[e.cache_key] == null) {
                    if (e.WAIT) {
                        var s = BX.pos(e.INPUT);
                        var i = s.bottom - s.top - 2;
                        e.WAIT.style.top = s.top + 1 + "px";
                        e.WAIT.style.height = i + "px";
                        e.WAIT.style.width = i + "px";
                        e.WAIT.style.left = s.right - i + 2 + "px";
                        e.WAIT.style.display = "block" }
                    BX.ajax.post(e.arParams.AJAX_PAGE, { ajax_call: "y", INPUT_ID: e.arParams.INPUT_ID, q: e.INPUT.value, l: e.arParams.MIN_QUERY_LEN }, function(s) { e.cache[e.cache_key] = s;
                        e.ShowResult(s);
                        e.currentRow = -1;
                        e.EnableMouseEvents();
                        if (e.WAIT) e.WAIT.style.display = "none";
                        if (!!t) t();
                        e.running = false });
                    return } else { e.ShowResult(e.cache[e.cache_key]);
                    e.currentRow = -1;
                    e.EnableMouseEvents() } } else { e.RESULT.style.display = "none";
                e.currentRow = -1;
                e.UnSelectAll() } }
        if (!!t) t();
        e.running = false };
    this.UnSelectAll = function() {
        var t = BX.findChild(e.RESULT, { tag: "ul", "class": "suggest__suggests" }, true);
        if (t) {
            var s = t.rows.length;
            for (var i = 0; i < s; i++) t.rows[i].className = "" } };
    this.EnableMouseEvents = function() {
        var t = BX.findChild(e.RESULT, { tag: "ul", "class": "suggest__suggests" }, true);
        if (t) {
            var s = t.rows.length;
            for (var i = 0; i < s; i++)
                if (!BX.findChild(t.rows[i], { "class": "title-search-separator" }, true)) { t.rows[i].id = "row_" + i;
                    t.rows[i].onmouseover = function(t) {
                        if (e.currentRow != this.id.substr(4)) { e.UnSelectAll();
                            this.className = "title-search-selected";
                            e.currentRow = this.id.substr(4) } };
                    t.rows[i].onmouseout = function(t) { this.className = "";
                        e.currentRow = -1 } } } };
    this.onFocusLost = function(t) { 
    	setTimeout(function() { e.RESULT.style.display = "none" }, 250);
    	this.SUGGEST.classList.remove('_focus');
    };
    this.onFocusGain = function() {
        if (e.RESULT.innerHTML.length) e.ShowResult();
        this.SUGGEST.classList.add('_focus');
    };
    this.onKeyDown = function(t) {
        if (!t) t = window.event;
        if (e.RESULT.style.display == "block") {
            if (e.onKeyPress(t.keyCode)) return BX.PreventDefault(t) } };
    this.adjustResultNode = function() {
        // var t;
        // var s = BX.findParent(e.CONTAINER, BX.is_fixed);
        // if (!!s) { e.RESULT.style.position = "fixed";
        //     e.RESULT.style.zIndex = BX.style(s, "z-index") + 2;
        //     t = BX.pos(e.CONTAINER, true) } else { e.RESULT.style.position = "absolute";
        //     t = BX.pos(e.CONTAINER) }
        // t.width = t.right - t.left;
        // e.RESULT.style.top = t.bottom + 2 + "px";
        // e.RESULT.style.left = t.left + "px";
        // e.RESULT.style.width = t.width + "px";
        // return t 
    };
    this._onContainerLayoutChange = function() {
    //    if (e.RESULT.style.display !== "none" && e.RESULT.innerHTML !== "") { e.adjustResultNode() } 
    };
    this.Init = function() { this.CONTAINER = document.getElementById(this.arParams.CONTAINER_ID);
        //BX.addCustomEvent(this.CONTAINER, "OnNodeLayoutChange", this._onContainerLayoutChange);
        this.RESULT = this.SUGGESTWRAPPER.appendChild(document.createElement("DIV"));
        this.RESULT.className = "suggest__suggestsWrapper";
        this.INPUT = document.getElementById(this.arParams.INPUT_ID);
        this.startText = this.oldValue = this.INPUT.value;
        BX.bind(this.INPUT, "focus", function() { e.onFocusGain() });
        BX.bind(this.INPUT, "blur", function() { e.onFocusLost() });
        this.INPUT.onkeydown = this.onKeyDown;
        if (this.arParams.WAIT_IMAGE) { this.WAIT = document.body.appendChild(document.createElement("DIV"));
            this.WAIT.style.backgroundImage = "url('" + this.arParams.WAIT_IMAGE + "')";
            if (!BX.browser.IsIE()) this.WAIT.style.backgroundRepeat = "none";
            this.WAIT.style.display = "none";
            this.WAIT.style.position = "absolute";
            this.WAIT.style.zIndex = "1100" }
        BX.bind(this.INPUT, "bxchange", function() { e.onChange() }) };
    BX.ready(function() { e.Init(t) }) }
//# sourceMappingURL=script.map.js
