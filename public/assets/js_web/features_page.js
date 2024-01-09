(window.webpackJsonpFF = window.webpackJsonpFF || []).push([[25], {
    1017: function(e, t, s) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t.features_page = void 0;
        var i = s(642);
        t.features_page = function() {
            var e = document.querySelector(".sections-nav")
              , t = document.querySelector("#sticky-header");
            t && new i.StickyElement(e,t,!0).init()
        }
    },
    642: function(e, t, s) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t.StickyElement = void 0;
        var i = s(22)
          , n = s(111)
          , o = function() {
            function e(e, t, s, i) {
                var o = this;
                this.handleIntersection = function(e, t) {
                    e.forEach((function(e) {
                        e.isIntersecting ? o.target.classList.contains("sticky") && o.target.classList.remove("sticky") : o.target.classList.add("sticky")
                    }
                    ))
                }
                ,
                this.element = e,
                this.target = t,
                s && (this.options = {
                    min: (0,
                    n.page_rpf)("screenlimit1", 0),
                    max: (0,
                    n.page_rpf)("screenlimit2", 0)
                }),
                i && (this.options = i)
            }
            return e.prototype.init = function() {
                (this.element && this.target || this.destroy(),
                this.options.min || this.options.max) ? "mobile" !== (0,
                i.checkResize)(this.options.min, this.options.max) ? (this.observer = new IntersectionObserver(this.handleIntersection,{
                    threshold: this.options.threshold,
                    rootMargin: this.options.rootMargin
                }),
                this.observer.observe(this.element)) : this.destroy() : (this.observer = new IntersectionObserver(this.handleIntersection,{
                    threshold: this.options.threshold
                }),
                this.observer.observe(this.element))
            }
            ,
            e.prototype.destroy = function() {
                var e;
                null === (e = this.observer) || void 0 === e || e.unobserve(this.element)
            }
            ,
            e
        }();
        t.StickyElement = o
    }
}]);
