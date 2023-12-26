! function (e) {
    var t = {};

    function r(n) {
        if (t[n]) return t[n].exports;
        var o = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(o.exports, o, o.exports, r), o.l = !0, o.exports
    }
    r.m = e, r.c = t, r.d = function (e, t, n) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, r.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, r.t = function (e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) r.d(n, o, function (t) {
                return e[t]
            }.bind(null, o));
        return n
    }, r.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return r.d(t, "a", t), t
    }, r.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, r.p = "/", r(r.s = 22)
}({
    22: function (e, t, r) {
        e.exports = r(23)
    },
    23: function (e, t) {
        new ApexCharts(document.querySelector("#overview-chart"), {
            series: [{
                type: "area",
                name: "BTC",
                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
            }, {
                type: "area",
                name: "ETH",
                data: [28, 41, 52, 42, 13, 18, 29, 18, 36, 51, 55, 35]
            }, {
                type: "line",
                name: "LTC",
                data: [45, 52, 38, 24, 33, 65, 45, 75, 54, 18, 28, 10]
            }],
            chart: {
                height: 240,
                type: "line",
                toolbar: {
                    show: !1
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                curve: "smooth",
                width: 2,
                dashArray: [0, 0, 3]
            },
            fill: {
                type: "solid",
                opacity: [.15, .05, 1]
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            colors: ["#f1b44c", "#3452e1", "#50a5f1"]
        }).render(), $(document).ready((function () {
            $("#datatable").DataTable()
        }))
    }
});
