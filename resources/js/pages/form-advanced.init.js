!(function (i) {
    "use strict";
    function e() {}
    (e.prototype.init = function () {
        i(".select2").select2(),
            i(".select2-limiting").select2({ maximumSelectionLength: 2 }),
            i(".select2-search-disable").select2({ minimumResultsForSearch: 1 / 0 }),
            i(".select2-ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: "json",
                    delay: 250,
                    data: function (e) {
                        return { q: e.term, page: e.page };
                    },
                    processResults: function (e, t) {
                        return (t.page = t.page || 1), { results: e.items, pagination: { more: 30 * t.page < e.total_count } };
                    },
                    cache: !0,
                },
                placeholder: "Search for Music Fan Investors",
                minimumInputLength: 1,
                templateResult: function (e) {
                    if (e.loading) return e.text;
                    var t = i(
                        "<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='" +
                        e.owner.avatar_url +
                        "' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'></div><div class='select2-result-repository__description'></div><div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> </div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> </div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> </div></div></div></div>"
                    );
                    return (
                        t.find(".select2-result-repository__title").text(e.full_name),
                            t.find(".select2-result-repository__description").text(e.description),
                            t.find(".select2-result-repository__forks").append(e.forks_count + " Forks"),
                            t.find(".select2-result-repository__stargazers").append(e.stargazers_count + " Stars"),
                            t.find(".select2-result-repository__watchers").append(e.watchers_count + " Watchers"),
                            t
                    );
                },
                templateSelection: function (e) {
                    return e.full_name || e.text;
                },
            }),
            i(".select2-templating").select2({
                templateResult: function (e) {
                    return e.id ? i('<span><img src="/assets/images/flags/select2/' + e.element.value.toLowerCase() + '.png" class="img-flag" /> ' + e.text + "</span>") : e.text;
                },
            }),
            i(".colorpicker-default").colorpicker({ format: "hex" }),
            i(".colorpicker-rgba").colorpicker(),
            i("#colorpicker-horizontal").colorpicker({ color: "#88cc33", horizontal: !0 }),
            i("#colorpicker-inline").colorpicker({ color: "#DD0F20", inline: !0, container: !0 });
        var s = {};
        i('[data-toggle="touchspin"]').each(function (e, t) {
            var a = i.extend({}, s, i(t).data());
            i(t).TouchSpin(a);
        }),
            i("input[name='demo3_21']").TouchSpin({ initval: 40, buttondown_class: "btn btn-primary", buttonup_class: "btn btn-primary" }),
            i("input[name='demo3_22']").TouchSpin({ initval: 40, buttondown_class: "btn btn-primary", buttonup_class: "btn btn-primary" }),
            i("input[name='demo_vertical']").TouchSpin({ verticalbuttons: !0 }),
            i("input#defaultconfig").maxlength({ warningClass: "badge badge-info", limitReachedClass: "badge badge-warning" }),
            i("input#thresholdconfig").maxlength({ threshold: 20, warningClass: "badge badge-info", limitReachedClass: "badge badge-warning" }),
            i("input#moreoptions").maxlength({ alwaysShow: !0, warningClass: "badge badge-success", limitReachedClass: "badge badge-danger" }),
            i("input#alloptions").maxlength({ alwaysShow: !0, warningClass: "badge badge-success", limitReachedClass: "badge badge-danger", separator: " out of ", preText: "You typed ", postText: " chars available.", validate: !0 }),
            i("textarea#textarea").maxlength({ alwaysShow: !0, warningClass: "badge badge-info", limitReachedClass: "badge badge-warning" }),
            i("input#placement").maxlength({ alwaysShow: !0, placement: "top-left", warningClass: "badge badge-info", limitReachedClass: "badge badge-warning" });
    }),
        (i.AdvancedForm = new e()),
        (i.AdvancedForm.Constructor = e);
})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.AdvancedForm.init();
    })();
