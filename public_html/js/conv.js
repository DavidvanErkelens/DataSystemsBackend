$(document).ready(function(){
		
	window.convdone = [];
    window.convstatus = {};
    
    mapper = {
        'nounderstand': 'The system was unable to understand the user',
        'usererror': 'The user did not know how to talk to the system',
        'noinfo': 'The system did not have enough information available to answer the user'
    };
	
	function generatePopoverHtml(identifier) {

        // Was this one already rated?
		if (window.convdone.includes(identifier)) {

            // Store reason
            reason = '';

            // If the status is other, format reason in other fashion
            if (window.convstatus[identifier]['type'] == 'other') {
                reason = 'Other: ' + window.convstatus[identifier]['reason'];
            }

            // Otherwise map it
            else {
                reason = mapper[window.convstatus[identifier]['type']];
            }

            var editUrl = '<a href="#" data-identifier="' + identifier + '" class="editReason">Edit reason</a>';

            // Format string to show
            return reason + ' ' + editUrl;
        }

        // Format reason dialog
		return `<div id="popover-content-popover" data-identifier="${identifier}" >
			<ul class="popover-content-popover" data-identifier="${identifier}" >
				<li>
					<label>
						<input type='radio' class="radio_reason" name='reason_dissatisfaction_${identifier}' value='nounderstand' width="80%">
						The system was unable to understand the user
					</label>
				</li>
				<li>
					<label>
						<input type='radio' class="radio_reason" name='reason_dissatisfaction_${identifier}' value='usererror'>
						The user did not know how to talk to the system
					</label>
				</li>
				<li>
					<label>
						<input type='radio' class="radio_reason" name='reason_dissatisfaction_${identifier}' value='noinfo'>
						The system did not have enough information available to answer the user
					</label>
				</li>
				<li>
					<label for="Other_dissatisfied">
						<input type="radio" name="reason_dissatisfaction_${identifier}" id="other_checkbox_${identifier}" value="other">
						<input id="propertytype_other_${identifier}" name="propertytype_other" type="text" value="" placeholder="Other reason..." class="input_other form-control propertytype_other" width="70%">  
					</label>
				</li>
			</ul>
			<button type="button" id="button_${identifier}" class="dissubmit" disabled>Ok</button>
		</div>`;
	}

	function checkSubmitDisabled() {
		// Get value
		var value = $("input[name='satisfaction']:checked").val();

		// Are we satisfied?
		if (value > 2) {

			// Do we have at least one checkbox checked?
			var $checks = $("input[name='reason_satisfaction']:checked");

			// Check number of checkboxes
			if ($checks.length > 0) {

				// Should we stop?
				window.stop = false;

				// If the 'other' box is checked, we need a reason
				$.each($checks, function() {
					
					// Is this the 'other' box?
					if ($(this).val() == 'other') {

						// Check if we have a reason
						if ($("#satisfied_other_text").val().trim().length == 0) {
							
							// No reason yet
							$("#submitbtn").prop("disabled", true);

							// We should stop
							window.stop = true;
						}
					}
					
				});

				// Stop if we need to
				if (window.stop) return;	

				// We're fine
				$("#submitbtn").prop("disabled", false);

			}

			else {

				// We are not enabled
				$("#submitbtn").prop("disabled", true);
			}

			// We're done
			return;
		}

		// Are we not satisfied?
		if (value <= 2) {
			if (Object.keys(window.convstatus).length > 0) {
				// We are enabled
				$("#submitbtn").prop("disabled", false);
			}
			else {
                // We are not enabled
				$("#submitbtn").prop("disabled", true);
			}

			// We're done
			return;
		}

		// We are not enabled
		$("#submitbtn").prop("disabled", true);
    }
    
    function updateHiddenField() {
        // Store value for in field
        fieldval = [];

        for (var objkey in window.convstatus) {
            
            // Store reason
            reason = '';

            // If the status is other, format reason in other fashion
            if (window.convstatus[objkey]['type'] == 'other') {
                reason = 'other:' + window.convstatus[objkey]['reason'];
            }

            // Otherwise just store it
            else {
                reason = window.convstatus[objkey]['type'];
            }

            // Add to field value
            fieldval.push(objkey + '|' + reason);
        }

        // Set value
        $("#dis_sentences_reasons").val(fieldval.join(','));
    };

	$('#dissatisfied').hide();
	$('#satisfied').hide();
	$('.checkbox').prop('disabled', true);
	$( "#deselectAll" ).prop('disabled', true);
	$( "#selectAll" ).prop('disabled', true);
	
	$("[data-toggle=popover]").popover({
		html: true,
		title: "Why do you think that the user was dissatisfied?",
		placement: 'right',
		boundary:'viewport',
		content: function() {
			return generatePopoverHtml($(this).data("index"));
		}
	});

	$("input[name='reason_satisfaction']").on('change', function() {
		checkSubmitDisabled();
	});


	$("#satisfied_other_text").on('input', function() {
		checkSubmitDisabled();
	});
	
	$('#selectAll').click(function() {
		$( ".checkbox" ).prop('checked', true);
	});


	$('#deselectAll').click(function() {
		$( ".checkbox" ).prop('checked', false);
	});
	
	$('.radio_sat').click(function() {
		if ($("input[name='satisfaction']:checked").val() <= 2) {
			/*Dissatisfied */
			$('#dissatisfied').show();
			$('#satisfied').hide();
			
			$( ".div_conversation" ).focus();
			$( ".checkbox" ).prop('disabled', false);
			$(".checklabel").addClass("hover_checklabel");
			$( "#deselectAll" ).prop('disabled', false);
			$( "#selectAll" ).prop('disabled', false);
	
		}
		else {
			/*Satisfied*/
			$('#satisfied').show();
			$('#dissatisfied').hide();
	
			$( ".checkbox" ).prop('checked', false);
			$( ".checkbox" ).prop('disabled', true);
			$(".checklabel").removeClass("hover_checklabel");
			$( "#deselectAll" ).prop('disabled', true);
			$( "#selectAll" ).prop('disabled', true);
		};

		// Check the submit button
		checkSubmitDisabled();
	});
	
	
	
	$(document).on('change', '.radio_reason', function() {
		// Get parent UL object
		$parent = $(this).parent().parent().parent();
	
		// Fetch index of entry
		var index = $parent.data("identifier");
	
		// Activate button
		$("#button_" + index).prop("disabled", false);
	});
	
	
	$(document).on('click', '.dissubmit', function() {
		
		// Get identifier
		var identifier = $(this).parent().data("identifier");
	
		// Store as done
		window.convdone.push(identifier);

        // Store status
        window.convstatus[identifier] = {};
        window.convstatus[identifier]['type'] = $("input[name='reason_dissatisfaction_" + identifier + "']:checked").val();
        if (window.convstatus[identifier]['type'] == 'other') window.convstatus[identifier]['reason'] = $("#propertytype_other_" + identifier).val();

		// Change contents of popover (hacky as fuck though)
		$("#" + $("#check" + identifier).attr('aria-describedby')).find('.popover-body').html(generatePopoverHtml(identifier));
	
		// Make sure popover is redrawn
		$("#check" + identifier).popover("show");

		// Re-check submit button
        checkSubmitDisabled();
        
        // Update the hidden field
        updateHiddenField();
	});
	
	$(document).on('input', '.input_other', function() {
		// Do we have valid text?
		if ($(this).val().trim().length == 0) return;
	
		// Get identifier
		var identifier = $(this).parent().parent().parent().data("identifier");
		
		// Activate appropriate radio button
		$("#other_checkbox_" + identifier).prop('checked', true);
	
		// Activate button as well
		$("#button_" + identifier).prop("disabled", false);
    });
    
    $(document).on('click', '.editReason', function(event) {
        // Skip event
        event.preventDefault();

        // Get identifier
        var identifier = $(this).data("identifier");

        // Remove it from storage
        var idx = window.convdone.indexOf(identifier);
        if (idx > -1) window.convdone.splice(idx, 1);

        // Remove status
        delete window.convstatus[identifier];

        // Change contents of popover (hacky as fuck though)
		$("#" + $("#check" + identifier).attr('aria-describedby')).find('.popover-body').html(generatePopoverHtml(identifier));
	
		// Make sure popover is redrawn
		$("#check" + identifier).popover("show");

		// Re-check submit button
        checkSubmitDisabled();
        
        // Update the hidden field
        updateHiddenField();
	});

	// Bind leave event
	$(window).bind('beforeunload', function() {

		// We'll prompt the user if he/she really wants to leave if the satisfied
		// value is set - that is the start of the annotation.
		if (!$("input[name='satisfaction']:checked").val()) return;

		// Return a string - this will most likely be ignored, since all major
		// browsers do that now
		return 'Your annotation will not be saved if you leave now!';
	});
});
