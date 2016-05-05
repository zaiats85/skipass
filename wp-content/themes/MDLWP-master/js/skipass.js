(function($) {
    $(document).ready(function () {
        // Accordion for home page
        $('.accordion-tabs').each(function(index) {
            $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
        });
        $('.accordion-tabs').on('click', 'li > a.tab-link', function(event) {
            if (!$(this).hasClass('is-active')) {
                event.preventDefault();
                var accordionTabs = $(this).closest('.accordion-tabs');
                accordionTabs.find('.is-open').removeClass('is-open').hide();

                $(this).next().toggleClass('is-open').toggle();
                accordionTabs.find('.is-active').removeClass('is-active');
                $(this).addClass('is-active');
            } else {
                event.preventDefault();
            }
        });

        // Skipass ballance main function
        $(this).ajaxStart(function(){
            $('.mdl-spinner').addClass('is-active');
        }).ajaxStop(function(){
            $('.mdl-spinner').removeClass('is-active');
        });

        // Skipass ballance modify html structure
        function SkipassParseRespone(table, card){
            if(card !== '') {
                table.find('tr:first td:not(:first)').remove();
                table.find('tr:last td:first').attr('colspan', 4);
                table.find('tr:nth-of-type(2) td:first').attr('colspan', 4);
                table.find('tr:first td:first').attr('colspan',4).wrapInner('<span></span>').append('<span>'+ 'Номер квитка : <span>' + card + '</span>' + '</span>');
                table.find('#order_info_header_white table tr:first').after('<tr></tr>');

                if($('#order_info_header_white td').length == 0) {
                    $('#order_info_header_white').addClass('not-used-card');
                }

            } else {
                $('.skipass-ballance-result').html('<tr><td class="empty-card">Номер картки не може бути порожнім</td></tr>');
            }
        }

        $('.button-skipass-ballance').on('click', function(){
            var url = 'http://shop.bukovel.info/index.php?route=balance/balance/getBalance';
            var card = $('#skipass-ballance').val();
            var table = $('.skipass-ballance-result');

            $.post(url, {card_number: card},
                function(data, status){
                    if(data['error']) {
                        $('.skipass-ballance-result').html('<tr><td class="wrong-card">Картки з таким номером не існує</td></tr>');
                    } else  {
                        table.html(data['html']);
                        SkipassParseRespone(table, card);
                    }
                }, 'json')
                .fail(function() {
                        $('.skipass-ballance-result').html('<tr><td class="server-error">Сталася помилка на сервері, спробуйте пізнішe</td></tr>');
                    }
                )
        });

        // Skipass ballance input form prevent submit on enterkey
        $(".skipass-ballance").keydown(function (e) {
            if (e.keyCode == 13) {
                event.preventDefault();
                $('.button-skipass-ballance').trigger('click');
                return false;
            }
        });

        $(function() {
            $("#modal-1").on("change", function() {
                if ($(this).is(":checked")) {
                    $("body").addClass("modal-open");
                } else {
                    $("body").removeClass("modal-open");
                }
            });

            $(".modal-fade-screen, .modal-close").on("click", function() {
                $(".modal-state:checked").prop("checked", false).change();
            });

            $(".modal-inner").on("click", function(e) {
                e.stopPropagation();
            });
        });
    });
})(jQuery);

