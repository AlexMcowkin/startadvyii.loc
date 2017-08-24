$(document).ready(function() {

    var siteAdminBaseUrl = window.location.host;

    // -------- DELETE RECORD CONFIRMATION DIALOG ----------
    // $('.deleterecord').on('click', function (){
    //       return confirm('Вы действительно хотите удалить эту запись?');
    // });

	// -------------------NESTABLE MENU-------------------

    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    // var updateOutput = function(e)
    // {
    //     var list   = e.length ? e : $(e.target),
    //         output = list.data('output');
    //     if (window.JSON) {
    //         output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
    //     } else {
    //         output.val('JSON browser support required for this demo.');
    //     }
    // };

    // $('#nestable').nestable({group: 1}).on('change', updateOutput);
    
    // output initial serialised data
    // updateOutput($('#nestable').data('output', $('#nestable-output')));

    $('#nestable').nestable({group: 1}).on('change', function(){});

    // sort menu for topmenu
    $('#saveTopmenuSort').on('click', function(e)
    {
        e.preventDefault();

        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var jsonData = window.JSON.stringify($('#nestable').nestable('serialize'));
        $.ajax({
            // url : siteAdminBaseUrl + "/topmenu/sortordermenu",
            url : "/topmenu/sortordermenu",
            type : 'POST',
            data: {jsonData: jsonData, _csrf : csrfToken},
            beforeSend: function() {
                $('#saveTopmenuSort').attr('disabled','disabled');
                $('#cancelTopmenuSort').attr('disabled','disabled');
                $('#expandTopmenuSort').attr('disabled','disabled');
                $('#collapseTopmenuSort').attr('disabled','disabled');
                $('.error-msg, .save-msg').hide();
                $('#nestable .dd-list').hide();
                $('#nestable .dd-list-wait').show();
            },
            complete: function() {
                $('#saveTopmenuSort').removeAttr('disabled');
                $('#cancelTopmenuSort').removeAttr('disabled');
                $('#expandTopmenuSort').removeAttr('disabled');
                $('#collapseTopmenuSort').removeAttr('disabled');
            },
            success : function(data) {
                $('.save-msg').fadeIn(1000);
                $('#nestable .dd-list-wait').fadeOut();
                setTimeout(function() {
                    $('#nestable .dd-list').show();
                    $('#nestable .dd-list-wait').hide();
                    $('.save-msg').hide();
                    $('#topmenuSort').modal('hide');
                    location.reload();
                }, 3000);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#saveTopmenuSort').removeAttr('disabled');
                $('#cancelTopmenuSort').removeAttr('disabled');
                $('#expandTopmenuSort').removeAttr('disabled');
                $('#collapseTopmenuSort').removeAttr('disabled');
                $('.error-msg').fadeIn(1000);
                $('#nestable .dd-list').show();
                $('#nestable .dd-list-wait').hide();
            }
        });
    });

    // sort menu for categories
    $('#saveCategorySort').on('click', function(e)
    {
        e.preventDefault();

        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var jsonData = window.JSON.stringify($('#nestable').nestable('serialize'));
        $.ajax({
            url : "/category/sortordermenu",
            type : 'POST',
            data: {jsonData: jsonData, _csrf : csrfToken},
            beforeSend: function() {
                $('#saveCategorySort').attr('disabled','disabled');
                $('#cancelCategorySort').attr('disabled','disabled');
                $('#expandCategorySort').attr('disabled','disabled');
                $('#collapseCategorySort').attr('disabled','disabled');
                $('.error-msg, .save-msg').hide();
                $('#nestable .dd-list').hide();
                $('#nestable .dd-list-wait').show();
            },
            complete: function() {
                $('#saveCategorySort').removeAttr('disabled');
                $('#cancelCategorySort').removeAttr('disabled');
                $('#expandCategorySort').removeAttr('disabled');
                $('#collapseCategorySort').removeAttr('disabled');
            },
            success : function(data) {
                $('.save-msg').fadeIn(1000);
                $('#nestable .dd-list-wait').fadeOut();
                setTimeout(function() {
                    $('#nestable .dd-list').show();
                    $('#nestable .dd-list-wait').hide();
                    $('.save-msg').hide();
                    $('#categorySort').modal('hide');
                    // location.reload();
                }, 3000);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#saveCategorySort').removeAttr('disabled');
                $('#cancelCategorySort').removeAttr('disabled');
                $('#expandCategorySort').removeAttr('disabled');
                $('#collapseCategorySort').removeAttr('disabled');
                $('.error-msg').fadeIn(1000);
                $('#nestable .dd-list').show();
                $('#nestable .dd-list-wait').hide();
            }
        });
    });
  
    // -------------------AJAX SEOURL GENERATION-------------------
    // help popover
    $("input[data-fieldtype=seourl]").popover();

    $('a#generateSeourl').on('click', function(e){
        e.preventDefault();

        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        var _lngId = $(this).data('langid'); // current language id
        var modelYii = $(this).data('yiimodel'); // current model name

        var _seoVal = $("input#" + modelYii + "-title-" + _lngId).val();

        $.ajax({
            url : "http://" + siteAdminBaseUrl + "/backend/seourl",
            type : 'POST',
            data: {seoVal: _seoVal, _csrf : csrfToken},
            beforeSend: function() {},
            complete: function() {},
            success : function(data) {
                $("input#" + modelYii + "-seourl-" + _lngId).val(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });
    });
    
    // -----------AJAX CHANGE COUNTRY DISPLAY STATUS-------------------

    $("body").on('change','#chbx', function () {
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        
        var chbxId = $(this).attr("data-chbx");
        var chbxStatus = $(this).is(':checked');

        $.ajax({
            url : "http://" + siteAdminBaseUrl + "/country/ajaxstatus",
            type : 'POST',
            data: {chbxId: chbxId, chbxStatus: chbxStatus, _csrf : csrfToken},
            beforeSend: function() {},
            complete: function() {},
            success : function(data) {
                $('#rowid'+chbxId).text(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {}
        });
    });

    // --------------------------------------

});