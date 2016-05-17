(function($) {
    $(document).ready(function () {
        // Accordion tabs home page
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

        // Accordion for promotions page
        $('.js-accordion-trigger').bind('click', function(e){
            var image = $(this).find('img');
            var currentElement =$(this).parent();

            closeAllOpenned(this);

            $(this).parent().find('.submenu').slideToggle('slow');  // apply the toggle to the ul
            $(this).parent().toggleClass('is-expanded');

            changeIcon(image, currentElement);

            e.preventDefault();
        });

        // Check to see if any opened accordion tabs
        function closeAllOpenned(el) {
            var accordionTabs = $(el).parent().siblings();
            var image = accordionTabs.find('img');
            if(accordionTabs.hasClass('is-expanded')) {
                accordionTabs.removeClass('is-expanded').find('.submenu').hide('slow');
                changeIcon(image, accordionTabs);
            }
        }

        //Change accordion icon
        function changeIcon(image, currentElement) {
            if(currentElement[0].className == "is-expanded"){
                image.attr('src', '/wp-content/themes/MDLWP-master/images/up.png')
            } else {
                image.attr('src', '/wp-content/themes/MDLWP-master/images/down.png')
            }
        }

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

        // Skipass skirent modify html structure
        function modifySkirentStructure(){
            $(".skirent .mdl-cell:nth-child(3n-2) td:first-child").attr('colspan', 3)
            $(".skirent .mdl-cell:nth-child(3n-1) td:nth-child(2)").attr('colspan', 2)
            $(".skirent .mdl-cell:nth-child(3n) td:nth-child(2)").attr('colspan', 2)
        }
        modifySkirentStructure();

        // Skipass club-cards modify html structure

        var table1 = $(".club-cards .mdl-cell:last-child");
        function modifyClubCardsStructure(table1){
            $('.club-cards .mdl-cell:nth-child(-n+3) table thead:first-child').after('<tr class="limiter"></tr>');
            $(".club-cards .mdl-cell table tbody tr td:first-child").attr('colspan', 2);
        }
        modifyClubCardsStructure();

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
