/**
 * Input con rango de fechas.
 * @param {string} fromid
 * @param {string} toid
 */

var dateRange = function (fromid, toid) {
    var dateFormat = "yy-mm-dd";

    if ($(fromid).length > 0) {
        var from = $(fromid).datepicker({
            dateFormat: 'yy-mm-dd',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
        }).on("change", function () {
            to.datepicker("option", "minDate", getDate(this));
        });
    }
    if ($(toid).length > 0) {
        var to = $(toid).datepicker({
            dateFormat: 'yy-mm-dd',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
        }).on("change", function () {
            from.datepicker("option", "maxDate", getDate(this));
        });
    }

    var getDate = function (element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    };
};

var exportExcelConsultant = function () {
    $("a.export-consultant").click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var data = {};
        data.consultant = $("#id-consultant-search").val();
        data.type = $("#id-type-search").val();
        data.nif = $("#id-nif-search").val();
        data.docureq = $("#id-docureq-search").val();
        var param = '?' + 'consultant=' + data.consultant + '&type=' + data.type + '&nif=' + data.nif + '&docureq=' + data.docureq;
        document.location = url + param;
    });
}

var exportExcelAcoord = function () {
    $("a.export-accord").click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var data = {};
        data.consultant = $("#id-consultant-search").val();
        data.validity = $("#id-validity-search").val();
        data.dateEnd = $("#id-dateglobal-search").val();
        var param = '?' + 'consultant=' + data.consultant + '&validity=' + data.validity + '&dateEnd=' + data.dateEnd;
        document.location = url + param;
    });
}
var exportExcelService = function () {
    $("a.export-service").click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var data = {};
        data.requestNumber = $("#id-requestnum-search").val();
        data.area = $("#id-area-search").val();
        data.dateStart = $("#id-datestart-search").val();
        data.dateEnd = $("#id-dateend-search").val();
        data.validityGlobal = $("#id-validity-search").val();
        data.state = $("#id-state-search").val();
        if ($("#id-datesign-search").length && $("#id-consultant-search").length) {
            data.datesign = $("#id-datesign-search").val();
            data.consultant = $("#id-consultant-search").val();
            var param = '?' + 'consultant=' + data.consultant + '&datesign=' + data.datesign + '&requestNumber=' + data.requestNumber + '&area=' + data.area + '&dateStart=' + data.dateStart + '&dateEnd=' + data.dateEnd + '&validityGlobal=' + data.validityGlobal + '&state=' + data.state;
        } else {
            var param = '?' + 'requestNumber=' + data.requestNumber + '&area=' + data.area + '&dateStart=' + data.dateStart + '&dateEnd=' + data.dateEnd + '&validityGlobal=' + data.validityGlobal + '&state=' + data.state;
        }
        document.location = url + param;
    });
}

var errorFormExtension = function () {
    $("span.text-danger").each(function () {
        var $collapse = $(this).closest(".collapse-extension");
        if ($collapse.length) {
            $collapse.attr("aria-expanded", "true");
            $collapse.addClass("in");
            $collapse.css("hight", "");
        }
    });
}
var addAutoCompleteUser = function (elem, url) {
    if (elem) {
        $(elem).autocomplete({
            source: url,
            minLength: 3,
            delay: 900,
            position: {my: "left bottom", at: "left top", collision: "flip"},
            select: function (event, ui) {
                if (ui.item) {
                    $(this).val(ui.item.value);
                    var fullname = $("#user_fullname");
                    var onlyname = ui.item.label.split("(", 1);
                    fullname.val(onlyname);
                    event.preventDefault();
                }
            },
            close: function (event, ui) {
                $(elem).removeClass('ui-autocomplete-loading');
            },
            change: function (event, ui) {
                $(elem).removeClass('ui-autocomplete-loading');
            }
        });
    }
};

var autoCompleteConsultant = function (elem, url) {
    if (elem) {
        $(elem).autocomplete({
            source: url,
            minLength: 3,
            delay: 500,
            position: {my: "left bottom", at: "left top", collision: "flip"},
            select: function (event, ui) {
                if (ui.item) {
                    $(this).val(ui.item.label);
                    event.preventDefault();
                }
            },
            close: function (event, ui) {
                $(elem).removeClass('ui-autocomplete-loading');
                $(elem).val("");
            },
            change: function (event, ui) {
                $(elem).removeClass('ui-autocomplete-loading');
            }
        });
    }
};
var dateRequest = function () {
    $("#service_dateStart").focus(function () {
        var $dateStart = $(this);
        var $dateService = $('#service_dateService');
        if (0 == $dateStart.val().length && 10 == $dateService.val().length) {
            $dateStart.val($dateService.val());
        }
    });
}

var autoCompleteAccordContact = function (url) {
    $("#accord_consultantId").change(function (e) {
//        e.preventDefault();
        var id = $("#accord_consultantId").val();
        var $phone = $("#accord_signerConsultant_0_phone");
        var $fax = $("#accord_signerConsultant_0_fax");
        var $email = $("#accord_signerConsultant_0_email");
        if ($phone.val() == '' && $fax.val() == '' && $email.val() == '') {
            var request = $.ajax({
                method: "POST",
                url: url,
                data: {id: id}
            })
            request.done(function (data) {
                console.log("Data Saved: " + data.phone);
                $phone.val(data.phone);
                $fax.val(data.fax);
                $email.val(data.email);
            });
        }

    });
}
$(document).ready(function () {
    errorFormExtension();
});