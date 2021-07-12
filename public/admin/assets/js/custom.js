/* Add here all your JS customizations */


$(document).ready(function () {

	var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.lp-image-logo-avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $("#staffImage").on('change', function(){
        readURL(this);
    });

    $("input[type='image']").click(function(e) {
        e.preventDefault();
        $("input[id='staffImage']").click();
        
	});
	
	
	function bannerUpload(){
		let readURL = function(input) {
	    if (input.files && input.files[0]) {
		        let reader = new FileReader();
		        reader.onload = function (e) {
		            $('.ch-image-banner').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(".file-upload").on('change', function(){
	        readURL(this);
	    });
	}

	function featureUpload(){
		let readURL = function(input) {
	    if (input.files && input.files[0]) {
		        let reader = new FileReader();
		        reader.onload = function (e) {
		            $('.ch-image-feature').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(".file-upload").on('change', function(){
	        readURL(this);
	    });
	}

	function imageUpload(){
		let readURL = function(input) {
	    if (input.files && input.files[0]) {
		        let reader = new FileReader();
		        reader.onload = function (e) {
		            $('.site-logo').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(".file-upload").on('change', function(){
	        readURL(this);
	    });
	}
	

    $(".ch-image-banner").click(function(e) {
        e.preventDefault();
        bannerUpload();
        $("input[id='imageBannerInput']").click();
        
        
    }); 

    $(".ch-image-feature").click(function(e) {
        e.preventDefault();
        featureUpload();
        $("input[id='imageFeatureInput']").click();
        
    });

    $(".site-logo").click(function(e) {
        e.preventDefault();
        imageUpload();
        $("input[id='imageInput']").click();
        
    });

    $('#datatable-blocked').dataTable();
    $('#datatable-approved').dataTable();
    $('#datatable-pending').dataTable();
    $('#datatable-published').dataTable();
    $('#datatable-drafts').dataTable();
    $('#datatable-all').dataTable();
});