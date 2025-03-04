jQuery(function($){

    const layout = $('.pykam-slider-images');
    const fieldname = 'pykam_slider_image_source'; //PYKAM_SLIDE_FIELD
    const data = JSON.parse($("#slides").text());

    if (data.length) {
        data.forEach(function(url) {
            layout.append(createImage(url, fieldname));
        });
    }

    function createImage(url, fieldname) {

        const imageLayout = $('<div>', { class: 'layout' });
        const img = $('<img>', { src: url }).width(150);
        const input = $('<input>', { type: 'hidden', name: fieldname + '[]', value: url });
        const removeBtn = $('<button>', { class: 'remove_image_btn', text: 'Remove', click: function(event) {
            event.preventDefault();
            $(this).parent().remove();
        } });

        imageLayout.append(img);
        imageLayout.append(input);
        imageLayout.append(removeBtn);

        return imageLayout;
    }

	$('.image_upload_btn').click(function( event ){
 
		event.preventDefault();
 
		const btn = $(this);
 
		const imgUploader = wp.media({
			library : {
				type : 'image'
			},
			multiple: false
		});
 
		imgUploader.on('select', function() {
 
			const image = imgUploader.state().get('selection').first().toJSON();
            layout.append(createImage(image.url, fieldname));
 
		});
 
		imgUploader.open();
	});

	// $('.remove_image_btn').click(function(e){

	// 	e.preventDefault();

    //     $(this).parent().remove();
 
	// });
});