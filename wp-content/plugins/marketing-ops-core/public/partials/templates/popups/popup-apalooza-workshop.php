<div id="moc_apaloza_workshop" class="popup moc_speakers non-active">
    <div class="popup_container">
        <div class="popup_content">
            <div id="popup_close" class="popup_close moc_profile_close moc_close_session_modal">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0001 2.00011L2.00011 20.0001L0.939453 18.9395L18.9395 0.939453L20.0001 2.00011Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9393 20.0001L0.93934 2.00011L2 0.939453L20 18.9395L18.9393 20.0001Z" fill="white" />
                </svg>
            </div>
            <!-- Popup Content -->
            <div class="popup_content_box">
                <div class="box_content">
                	

                		
        		</div>	
        </div>
    </div>
</div>
</div>

<script>
    document.querySelector("#popup_close").addEventListener("click", function () {
        document.getElementById("moc_apaloza_workshop").classList.remove("active");
    });


jQuery(document).ready(function() {
    jQuery(".earlybirdbutons").click(function() {
    	jQuery("body").addClass('overflowhidden');
        var template = jQuery(this).closest('div').find('.dynamicdata').html();
        jQuery(".box_content").append(template);
    });
});

jQuery(document).ready(function() {
    jQuery("#popup_close").click(function() {
    	jQuery("body").removeClass('overflowhidden');
        jQuery(".box_content").children().remove();
    });
});
    
    

</script>
