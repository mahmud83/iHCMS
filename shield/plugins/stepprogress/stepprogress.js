$(function() {
    var container = $('.form-step'),
            length = container.children('fieldset').length;

    // STEP PROGRESSBAR
    container.find('fieldset').hide().eq(0).show().addClass('active');
    container.prepend('<div class="progressbox"></div>');
    container.children('.progressbox').append('<div class="progress progress-info"><div class="bar"></div></div>');

    // STEP TITLE 
    var title = container.find('fieldset.active').attr('title');
    desc = container.find('fieldset.active').children('legend').text();

    container.prepend('<div class="title"><h4>' + title + '</h4><p class="description">' + desc + '</div></div>');

    progressStep();

    // STEP BUTTON
    container.append('<div class="buttonpane"></div>');
    container.find('.buttonpane').append('<a href="javascript:void(0)" class="btn btn-small next">NEXT</a>');
    container.find('.buttonpane').prepend('<a href="javascript:void(0)" class="btn btn-small prev">PREV</a>');

    // INITIALIZATION
    if (container.find('fieldset').eq(0).hasClass('active')) {
        container.find('.buttonpane').children('a.prev').hide();
    } else {
        container.find('.buttonpane').children('a.prev').show();
    }

    // FUNCTION STEP
    function formStep(id) {
        var active = container.find('fieldset.active'),
                length = container.children('fieldset').length;
        index = active.index();
        if (id == 'next') {
            container.find('fieldset').hide().removeClass('active');
            active.next('fieldset').addClass('active').show();
            progressStep();
            if (index == length) {
                container.find('.buttonpane').children('a.prev').show();
                container.find('.buttonpane').children('a.next').hide();
                container.find('.buttonpane').append('<button type="submit" class="btn btn-primary btn-small">Submit</button>');
            }
        } else {
            container.find('.buttonpane').children('button').hide();
            container.find('.buttonpane').children('a.next').show();

            container.find('fieldset').hide().removeClass('active');
            active.prev('fieldset').addClass('active').show();
            progressStep();
            if (index == 1) {
                container.find('.buttonpane').children('a.next').show();
                container.find('.buttonpane').children('a.prev').hide();
            }
        }
    }

    $(container.find('a.next')).click(function() {
        formStep('next');
    });
    $(container.find('a.prev')).click(function() {
        formStep('prev');
    });


    function progressStep() {
        var activeBar = parseInt(container.find('fieldset.active').index()) - 1,
                length = parseInt(container.children('fieldset').length),
                percent = (parseInt(activeBar) / parseInt(length)) * 100;

        container.find('.progressbox .progress .bar').css('width', percent + '%');
        if (percent == 100) {
            container.find('.progressbox .progress').removeClass('progress-info').addClass('progress-success');
        } else {
            container.find('.progressbox .progress').removeClass('progress-success').addClass('progress-info');
        }
        //alert(percent);

        var title = container.find('fieldset.active').attr('title'),
                desc = container.find('fieldset.active').children('legend').text();

        container.find('.title h4').text(title).next('.description').text(desc);

        if (container.find('fieldset').eq(0).hasClass('active')) {
            container.find('.buttonpane').children('a.prev').hide();
        } else {
            container.find('.buttonpane').children('a.prev').show();
        }
    }
});

