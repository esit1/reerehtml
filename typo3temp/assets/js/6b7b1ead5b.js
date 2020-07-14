lightbox.option({});					var typeOfSlickUids = typeof slickUids;
					if( typeOfSlickUids != 'undefined' ) {
						if(Array.isArray(slickUids)){
							$(document).ready(function () {
								for (var i = 0; i < slickUids.length; i++) {
									var boolSlickRandomizeX = eval("boolSlickRandomize" + slickUids[i]);
									//alert(boolSlickRandomizeX);
									if( boolSlickRandomizeX == true ) {
										$('#slickid-' + slickUids[i]).randomize();
									} 
								}
							});
						}
					}
					$(document).ready(function () {
						if( (typeof obj === "object") && (obj !== null) ) {
							var sortedKeys = Object.keys(obj).sort();
							//alert( sortedKeys[0] );
							if(Array.isArray(sortedKeys)){
								for (var i = 0; i < sortedKeys.length; i++) {
									obj[sortedKeys[i]]();
								}
							}
						}
					});
					