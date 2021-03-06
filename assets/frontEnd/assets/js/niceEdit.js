/* NicEdit - Micro Inline WYSIWYG
 * Copyright 2007-2008 Brian Kirchoff
 *
 * NicEdit is distributed under the terms of the MIT license
 * For more information visit http://nicedit.com/
 * Do not remove this copyright message
 */
var bkExtend = function() { var A = arguments; if (A.length == 1) { A = [this, A[0]] } for (var B in A[1]) { A[0][B] = A[1][B] } return A[0] };
​
function bkClass() {}
bkClass.prototype.construct = function() {};
bkClass.extend = function(C) {
    var A = function() { if (arguments[0] !== bkClass) { return this.construct.apply(this, arguments) } };
    var B = new this(bkClass);
    bkExtend(B, C);
    A.prototype = B;
    A.extend = this.extend;
    return A
};
var bkElement = bkClass.extend({
    construct: function(B, A) {
        if (typeof(B) == "string") { B = (A || document).createElement(B) }
        B = $BK(B);
        return B
    },
    appendTo: function(A) { A.appendChild(this); return this },
    appendBefore: function(A) { A.parentNode.insertBefore(this, A); return this },
    addEvent: function(B, A) { bkLib.addEvent(this, B, A); return this },
    setContent: function(A) { this.innerHTML = A; return this },
    pos: function() {
        var C = curtop = 0;
        var B = obj = this;
        if (obj.offsetParent) {
            do {
                C += obj.offsetLeft;
                curtop += obj.offsetTop
            } while (obj = obj.offsetParent)
        }
        var A = (!window.opera) ? parseInt(this.getStyle("border-width") || this.style.border) || 0 : 0;
        return [C + A, curtop + A + this.offsetHeight]
    },
    noSelect: function() { bkLib.noSelect(this); return this },
    parentTag: function(A) {
        var B = this;
        do {
            if (B && B.nodeName && B.nodeName.toUpperCase() == A) { return B }
            B = B.parentNode
        } while (B);
        return false
    },
    hasClass: function(A) { return this.className.match(new RegExp("(\\s|^)nicEdit-" + A + "(\\s|$)")) },
    addClass: function(A) { if (!this.hasClass(A)) { this.className += " nicEdit-" + A } return this },
    removeClass: function(A) { if (this.hasClass(A)) { this.className = this.className.replace(new RegExp("(\\s|^)nicEdit-" + A + "(\\s|$)"), " ") } return this },
    setStyle: function(A) {
        var B = this.style;
        for (var C in A) {
            switch (C) {
                case "float":
                    B.cssFloat = B.styleFloat = A[C];
                    break;
                case "opacity":
                    B.opacity = A[C];
                    B.filter = "alpha(opacity=" + Math.round(A[C] * 100) + ")";
                    break;
                case "className":
                    this.className = A[C];
                    break;
                default:
                    B[C] = A[C]
            }
        }
        return this
    },
    getStyle: function(A, C) { var B = (!C) ? document.defaultView : C; if (this.nodeType == 1) { return (B && B.getComputedStyle) ? B.getComputedStyle(this, null).getPropertyValue(A) : this.currentStyle[bkLib.camelize(A)] } },
    remove: function() { this.parentNode.removeChild(this); return this },
    setAttributes: function(A) { for (var B in A) { this[B] = A[B] } return this }
});
var bkLib = {
    isMSIE: (navigator.appVersion.indexOf("MSIE") != -1),
    addEvent: function(C, B, A) {
        (C.addEventListener) ? C.addEventListener(B, A, false): C.attachEvent("on" + B, A)
    },
    toArray: function(C) {
        var B = C.length,
            A = new Array(B);
        while (B--) { A[B] = C[B] }
        return A
    },
    noSelect: function(B) { if (B.setAttribute && B.nodeName.toLowerCase() != "input" && B.nodeName.toLowerCase() != "textarea") { B.setAttribute("unselectable", "on") } for (var A = 0; A < B.childNodes.length; A++) { bkLib.noSelect(B.childNodes[A]) } },
    camelize: function(A) { return A.replace(/\-(.)/g, function(B, C) { return C.toUpperCase() }) },
    inArray: function(A, B) { return (bkLib.search(A, B) != null) },
    search: function(A, C) { for (var B = 0; B < A.length; B++) { if (A[B] == C) { return B } } return null },
    cancelEvent: function(A) {
        A = A || window.event;
        if (A.preventDefault && A.stopPropagation) {
            A.preventDefault();
            A.stopPropagation()
        }
        return false
    },
    domLoad: [],
    domLoaded: function() {
        if (arguments.callee.done) { return }
        arguments.callee.done = true;
        for (i = 0; i < bkLib.domLoad.length; i++) { bkLib.domLoad[i]() }
    },
    onDomLoaded: function(A) {
        this.domLoad.push(A);
        if (document.addEventListener) { document.addEventListener("DOMContentLoaded", bkLib.domLoaded, null) } else {
            if (bkLib.isMSIE) {
                document.write("<style>.nicEdit-main p { margin: 0; }</style><script id=__ie_onload defer " + ((location.protocol == "https:") ? "src='javascript:void(0)'" : "src=//0") + "><\/script>");
                $BK("__ie_onload").onreadystatechange = function() { if (this.readyState == "complete") { bkLib.domLoaded() } }
            }
        }
        window.onload = bkLib.domLoaded
    }
};
​
function $BK(A) { if (typeof(A) == "string") { A = document.getElementById(A) } return (A && !A.appendTo) ? bkExtend(A, bkElement.prototype) : A }
var bkEvent = {
    addEvent: function(A, B) {
        if (B) {
            this.eventList = this.eventList || {};
            this.eventList[A] = this.eventList[A] || [];
            this.eventList[A].push(B)
        }
        return this
    },
    fireEvent: function() {
        var A = bkLib.toArray(arguments),
            C = A.shift();
        if (this.eventList && this.eventList[C]) { for (var B = 0; B < this.eventList[C].length; B++) { this.eventList[C][B].apply(this, A) } }
    }
};
​
function __(A) { return A }
Function.prototype.closure = function() {
    var A = this,
        B = bkLib.toArray(arguments),
        C = B.shift();
    return function() { if (typeof(bkLib) != "undefined") { return A.apply(C, B.concat(bkLib.toArray(arguments))) } }
};
Function.prototype.closureListener = function() {
    var A = this,
        C = bkLib.toArray(arguments),
        B = C.shift();
    return function(E) { E = E || window.event; if (E.target) { var D = E.target } else { var D = E.srcElement } return A.apply(B, [E, D].concat(C)) }
};
​
​
​
var nicEditorConfig = bkClass.extend({
    buttons: {
        'bold': { name: __('Click to Bold'), command: 'Bold', tags: ['B', 'STRONG'], css: { 'font-weight': 'bold' }, key: 'b' },
        'italic': { name: __('Click to Italic'), command: 'Italic', tags: ['EM', 'I'], css: { 'font-style': 'italic' }, key: 'i' },
        'underline': { name: __('Click to Underline'), command: 'Underline', tags: ['U'], css: { 'text-decoration': 'underline' }, key: 'u' },
        'left': { name: __('Left Align'), command: 'justifyleft', noActive: true },
        'center': { name: __('Center Align'), command: 'justifycenter', noActive: true },
        'right': { name: __('Right Align'), command: 'justifyright', noActive: true },
        'justify': { name: __('Justify Align'), command: 'justifyfull', noActive: true },
        'ol': { name: __('Insert Ordered List'), command: 'insertorderedlist', tags: ['OL'] },
        'ul': { name: __('Insert Unordered List'), command: 'insertunorderedlist', tags: ['UL'] },
        'subscript': { name: __('Click to Subscript'), command: 'subscript', tags: ['SUB'] },
        'superscript': { name: __('Click to Superscript'), command: 'superscript', tags: ['SUP'] },
        'strikethrough': { name: __('Click to Strike Through'), command: 'strikeThrough', css: { 'text-decoration': 'line-through' } },
        'removeformat': { name: __('Remove Formatting'), command: 'removeformat', noActive: true },
        'indent': { name: __('Indent Text'), command: 'indent', noActive: true },
        'outdent': { name: __('Remove Indent'), command: 'outdent', noActive: true },
        'hr': { name: __('Horizontal Rule'), command: 'insertHorizontalRule', noActive: true }
    },
    iconsPath: 'http://js.nicedit.com/nicEditIcons-latest.gif',
    buttonList: ['save', 'bold', 'italic', 'underline', 'left', 'center', 'right', 'justify', 'ol', 'ul', 'fontSize', 'fontFamily', 'fontFormat', 'indent', 'outdent', 'image', 'upload', 'link', 'unlink', 'forecolor', 'bgcolor'],
    iconList: { "xhtml": 1, "bgcolor": 2, "forecolor": 3, "bold": 4, "center": 5, "hr": 6, "indent": 7, "italic": 8, "justify": 9, "left": 10, "ol": 11, "outdent": 12, "removeformat": 13, "right": 14, "save": 25, "strikethrough": 16, "subscript": 17, "superscript": 18, "ul": 19, "underline": 20, "image": 21, "link": 22, "unlink": 23, "close": 24, "arrow": 26, "upload": 27 }
​
});;
var nicEditors = { nicPlugins: [], editors: [], registerPlugin: function(B, A) { this.nicPlugins.push({ p: B, o: A }) }, allTextAreas: function(C) { var A = document.getElementsByTagName("textarea"); for (var B = 0; B < A.length; B++) { nicEditors.editors.push(new nicEditor(C).panelInstance(A[B])) } return nicEditors.editors }, findEditor: function(C) { var B = nicEditors.editors; for (var A = 0; A < B.length; A++) { if (B[A].instanceById(C)) { return B[A].instanceById(C) } } } };
var nicEditor = bkClass.extend({
    construct: function(C) {
        this.options = new nicEditorConfig();
        bkExtend(this.options, C);
        this.nicInstances = new Array();
        this.loadedPlugins = new Array();
        var A = nicEditors.nicPlugins;
        for (var B = 0; B < A.length; B++) { this.loadedPlugins.push(new A[B].p(this, A[B].o)) }
        nicEditors.editors.push(this);
        bkLib.addEvent(document.body, "mousedown", this.selectCheck.closureListener(this))
    },
    panelInstance: function(B, C) {
        B = this.checkReplace($BK(B));
        var A = new bkElement("DIV").setStyle({ width: (parseInt(B.getStyle("width")) || B.clientWidth) + "px" }).appendBefore(B);
        this.setPanel(A);
        return this.addInstance(B, C)
    },
    checkReplace: function(B) {
        var A = nicEditors.findEditor(B);
        if (A) {
            A.removeInstance(B);
            A.removePanel()
        }
        return B
    },
    addInstance: function(B, C) {
        B = this.checkReplace($BK(B));
        if (B.contentEditable || !!window.opera) { var A = new nicEditorInstance(B, C, this) } else { var A = new nicEditorIFrameInstance(B, C, this) }
        this.nicInstances.push(A);
        return this
    },
    removeInstance: function(C) {
        C = $BK(C);
        var B = this.nicInstances;
        for (var A = 0; A < B.length; A++) {
            if (B[A].e == C) {
                B[A].remove();
                this.nicInstances.splice(A, 1)
            }
        }
    },
    removePanel: function(A) {
        if (this.nicPanel) {
            this.nicPanel.remove();
            this.nicPanel = null
        }
    },
    instanceById: function(C) { C = $BK(C); var B = this.nicInstances; for (var A = 0; A < B.length; A++) { if (B[A].e == C) { return B[A] } } },
    setPanel: function(A) {
        this.nicPanel = new nicEditorPanel($BK(A), this.options, this);
        this.fireEvent("panel", this.nicPanel);
        return this
    },
    nicCommand: function(B, A) { if (this.selectedInstance) { this.selectedInstance.nicCommand(B, A) } },
    getIcon: function(D, A) { var C = this.options.iconList[D]; var B = (A.iconFiles) ? A.iconFiles[D] : ""; return { backgroundImage: "url('" + ((C) ? this.options.iconsPath : B) + "')", backgroundPosition: ((C) ? ((C - 1) * -18) : 0) + "px 0px" } },
    selectCheck: function(C, A) {
        var B = false;
        do { if (A.className && A.className.indexOf("nicEdit") != -1) { return false } } while (A = A.parentNode);
        this.fireEvent("blur", this.selectedInstance, A);
        this.lastSelectedInstance = this.selectedInstance;
        this.selectedInstance = null;
        return false
    }
});
