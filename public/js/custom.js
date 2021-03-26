$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '8292271994',
        limit: 9,
        resolution: 'standard_resolution',
        accessToken: '8292271994.1677ed0.e9a990f8d95449f5b02d43c90500491d',
        sortBy: 'most-recent',
        template: '<div class="col-lg-4 instaimg"><a href="{{link}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    // $('.gallery').magnificPopup({
    //     type: 'image',
    //     delegate: 'a',
    //     gallery: {
    //         enabled: true
    //     }
    // });


});