// Webpack Imports
import * as bootstrap from 'bootstrap';
// import isotope from 'isotope-layout';

( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );

} )();


// ( function () {

// 	var elem = document.querySelector('.isotope-cont');
// 	var iso = new Isotope( elem, {
// 	  // options
// 	  itemSelector: '.isotope-item',
// 	  layoutMode: 'fitRows'
// 	});

// 	// filter functions
// 	var filterFns = {
// 	};
	
// 	// bind filter button click
// 	var filtersElem = document.querySelector('.filters-button-group');
// 	filtersElem.addEventListener( 'click', function( event ) {
// 		// only work with buttons
// 		if ( !matchesSelector( event.target, 'button' ) ) {
// 		return;
// 		}
// 		var filterValue = event.target.getAttribute('data-filter');
// 		// use matching filter function
// 		// filterValue = filterFns[ filterValue ] || filterValue;
// 		iso.arrange({ filter: filterValue });
// 	});
	
// 	// change is-checked class on buttons
// 	var buttonGroups = document.querySelectorAll('.button-group');
// 	for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
// 		var buttonGroup = buttonGroups[i];
// 		radioButtonGroup( buttonGroup );
// 	}

// 	function radioButtonGroup( buttonGroup ) {
// 	buttonGroup.addEventListener( 'click', function( event ) {
// 		// only work with buttons
// 		if ( !matchesSelector( event.target, 'button' ) ) {
// 		return;
// 		}
// 		buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
// 		event.target.classList.add('is-checked');
// 	});
// 	}
// } )();
function getHashFilter() {
	var hash = location.hash;
	// get filter=filterName
	var matches = location.hash.match( /filter=([^&]+)/i );
	var hashFilter = matches && matches[1];
	return hashFilter && decodeURIComponent( hashFilter );
  }

  
( function ( $ ) {


// init Isotope
var $grid = $('.isotope-cont').isotope({
	itemSelector: '.isotope-item',
	resizable: false,
	// layoutMode: 'fitRows',
	getSortData: {
		date: '[date]'
	},
	sortBy: 'date',
	sortAscending: false
  });
  
  // store filter for each group
  var filters = {};
  
  $('.filters').on( 'click', '.button', function( event ) {
	var $button = $( event.currentTarget );
	// get group key
	var $buttonGroup = $button.parents('.button-group');
	var filterGroup = $buttonGroup.attr('data-filter-group');
	// set filter for group
	filters[ filterGroup ] = $button.attr('data-filter');
	// combine filters
	var filterValue = concatValues( filters );
	// set filter for Isotope
	location.hash = 'filter=' + encodeURIComponent( filterValue );
	$grid.isotope({ filter: filterValue });
  });
  
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
	var $buttonGroup = $( buttonGroup );
	$buttonGroup.on( 'click', 'button', function( event ) {
	  $buttonGroup.find('.is-checked').removeClass('is-checked');
	  var $button = $( event.currentTarget );
	  $button.addClass('is-checked');
	});
  });
	
  // flatten object by concatting values
  function concatValues( obj ) {
	var value = '';
	for ( var prop in obj ) {
	  value += obj[ prop ];
	}
	return value;
  }

  $('.sort-by-button-group').on( 'click', '.asc', function() {
	// var sortByValue = $(this).attr('data-sort-by');
	$grid.isotope({ sortAscending : true });
  });
  $('.sort-by-button-group').on( 'click', '.desc', function() {
	$grid.isotope({ sortAscending : false });
  });

	//   ustawienie wyboru na dropdown
  $(".dropdown-menu li a").on( 'click' , function(){
	$(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
	$(this).parents(".dropdown").find('.btn').val($(this).data('value'));
  });
  
  var isIsotopeInit = false;

  function onHashchange() {
    var hashFilter = getHashFilter();
    if ( !hashFilter && isIsotopeInit ) {
      return;
    }
    isIsotopeInit = true;
    // filter isotope
    $grid.isotope({
      itemSelector: '.isotope-item',
      filter: hashFilter
    });
    // set selected class on button
    if ( hashFilter ) {
      $filters.find('.is-checked').removeClass('is-checked');
      $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
    }
  }

  $(window).on( 'hashchange', onHashchange );
  // trigger event handler to init Isotope
  onHashchange();


} )( jQuery );
