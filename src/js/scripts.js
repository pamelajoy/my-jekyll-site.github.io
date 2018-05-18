// primary javascript file


jQuery(document).ready(function($) {

  /* Smooth Scroll */

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        });
      }
    }
  });

	/* WordPress REST API Integration - Availability */

	var AvailabilityAPI = {
		URL: 'http://localhost:8888/181wm/wp-json/wp/v2/availability?per_page=100',
	};


	var floorPlansContainer = document.querySelector('[data-role=floor-plans]');
  var previewContainerDiv = document.querySelector('[data-role=preview-container]');
	var activeFilters =[];

	function FloorPlan(id, floor, suite, sqFt, imageId, pdfId) {
		this.id = id;
		this.floor = floor;
		this.suite = suite;
		this.sqFt = sqFt;
		this.imageId = imageId;
		this.pdfId = pdfId;
	}

	function queryFloorPlans(){
		return AvailabilityAPI.URL;
	}

	function buildSqFt(sqFt) {
		var pSqFt;
		pSqFt = sqFt + ' SF';

	  return pSqFt;
	}

	function loadFloorPlans(){
		
		var query = queryFloorPlans();

		$.get(query, function(searchResult){

      buildFloorPlans(searchResult);
			
		});
	}

  function bindPreviewClickEvent(element, floorPlan) {
    function runPreviewDetails(event) {
      $('.availability-row').removeClass('active');
      element.classList.add('active');
      previewDetails(floorPlan);
      // event.preventDefault();
    }

    element.addEventListener('click', runPreviewDetails, false);

  }

	function buildFloorPlansList() {
	  var floorPlansList = document.createElement('div');
	  floorPlansList.className = 'floor-plans-list';

	  floorPlansContainer.appendChild(floorPlansList);

	  return floorPlansList;
	}

	function buildFloorPlans(floorPlans) {

	  var floorPlansList = buildFloorPlansList();

    // CASE-INSENSITIVE COMPARISON
    function compare(a, b) {
      a = a.toLowerCase();
      b = b.toLowerCase();

      return (a < b) ? -1 : (a > b) ? 1 : 0;
    }

    // SORT FLOORPLANS BY SUITE FIRST //
    floorPlans.sort(function(a, b){
      return compare(a.acf.suite, b.acf.suite);
    });
    // SORT FLOORPLANS BY FLOOR //
    floorPlans.sort(function(a, b){
      return compare(a.acf.floor, b.acf.floor);
    });

	  floorPlans.forEach(function(floorPlan) {
	  	var thisFloorPlan = new FloorPlan(
	  		floorPlan.id,
				floorPlan.acf.floor,
				floorPlan.acf.suite,
				floorPlan.acf.square_footage,
				floorPlan.acf.floorplan_image,
				floorPlan.acf.floorplan_pdf
	  	);

      var divRow = document.createElement('div');
      var divCol1 = document.createElement('div');
      var divCol2 = document.createElement('div');
      var divCol3 = document.createElement('div');
      var divCol4 = document.createElement('div');
      var h5Floor = document.createElement('h5');
      var h5FloorText = document.createTextNode(thisFloorPlan.floor);
      var h5Suite = document.createElement('h5');
      var h5SuiteText = document.createTextNode(thisFloorPlan.suite);
      var h5SqFt = document.createElement('h5');
      var h5SqFtText = document.createTextNode(buildSqFt(thisFloorPlan.sqFt));
      var aLink = document.createElement('a');
      var h5Link = document.createElement('h5');
      var h5LinkText = document.createTextNode('Download Plan');

      divRow.className = 'row py-2 availability-row';
      divCol1.className = 'col-2 d-none d-md-block';
      divCol2.className = 'col-3';
      divCol3.className = 'col-3';
      divCol4.className = 'col-6 col-md-4';
      h5Floor.className = 'h5 dark-text availability-floor';
      h5Suite.className = 'h5 dark-text';
      h5SqFt.className = 'h5 dark-text';
      h5Link.className = 'h5 dark-text bold';
      aLink.className = 'download-link';

      aLink.href = thisFloorPlan.pdfId;
      aLink.target = '_blank';

      h5Floor.appendChild(h5FloorText);
      h5Suite.appendChild(h5SuiteText);
      h5SqFt.appendChild(h5SqFtText);
      h5Link.appendChild(h5LinkText);
      aLink.appendChild(h5Link);
      divCol1.appendChild(h5Floor);
      divCol2.appendChild(h5Suite);
      divCol3.appendChild(h5SqFt);
      divCol4.appendChild(aLink);
      divRow.appendChild(divCol1);
      divRow.appendChild(divCol2);
      divRow.appendChild(divCol3);
      divRow.appendChild(divCol4);


      bindPreviewClickEvent(divRow, thisFloorPlan);


      floorPlansList.appendChild(divRow);
 

	  });
	}

  function previewDetails(floorPlan){
    // WHAT WILL BE THERE WHEN PAGE LOADS?
    // HOW TO CACHE JS?

    document.getElementById('floorplan-image').src = floorPlan.imageId;
    document.getElementById('suite-number').innerHTML = floorPlan.suite;
    document.getElementById('square-footage').innerHTML = buildSqFt(floorPlan.sqFt);

    $('.floor').removeClass('active');
    document.getElementById(floorPlan.floor).classList.add('active');

  }

	if ($('section').is('.availability')){
    loadFloorPlans();
  }

});